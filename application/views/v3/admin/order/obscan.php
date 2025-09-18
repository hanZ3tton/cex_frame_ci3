<div class="row">
    <!-- Konten utama di kiri -->
    <div class="col-md-8">
        <h3>Data Barang</h3>
        <!-- tabel atau konten lain di sini -->
    </div>

    <!-- Scanner di kanan -->
    <div class="">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Barcode Scanner</h5>
            </div>
            <div class="card-body">
                <div id="video"></div>
                <canvas id="snapshot" style="display:none; width:100%;"></canvas>

                <div class="mt-2">
                    <button id="startBtn" class="btn btn-sm btn-primary">Start</button>
                    <button id="stopBtn" class="btn btn-sm btn-danger" disabled>Stop</button>
                </div>

                <div class="mt-2">
                    <strong>Hasil:</strong>
                    <pre id="result">—</pre>
                </div>

                <audio id="beep" src="https://actions.google.com/sounds/v1/alarms/beep_short.ogg"></audio>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/quagga@0.12.1/dist/quagga.min.js"></script>
<script>
    const startBtn = document.getElementById('startBtn');
    const stopBtn = document.getElementById('stopBtn');
    const resultEl = document.getElementById('result');
    const videoContainer = document.getElementById('video');
    const snapshot = document.getElementById('snapshot');
    const beep = document.getElementById('beep');

    let currentStreamActive = false;
    let lastResult = null;
    let sameCount = 0;
    const threshold = 3; // konsistensi minimal

    function startScanner() {
        if (currentStreamActive) return;
        Quagga.init({
            inputStream: {
                type: "LiveStream",
                constraints: {
                    facingMode: "environment",
                    width: {
                        min: 320
                    },
                    height: {
                        min: 240
                    }
                },
                target: videoContainer
            },
            decoder: {
                readers: ["ean_reader", "code_128_reader", "code_39_reader", "upc_reader", "codabar_reader"]
            },
            locate: true
        }, function(err) {
            if (err) {
                console.error(err);
                return;
            }
            Quagga.start();
            currentStreamActive = true;
            startBtn.disabled = true;
            stopBtn.disabled = false;
            resultEl.textContent = 'Scanning...';
        });
        Quagga.onDetected(onDetected);
    }

    function stopScanner() {
        if (!currentStreamActive) return;
        Quagga.stop();
        Quagga.offDetected(onDetected);
        currentStreamActive = false;
        startBtn.disabled = false;
        stopBtn.disabled = true;
    }

    function onDetected(data) {
        if (!data || !data.codeResult) return;
        const code = data.codeResult.code;

        if (code === lastResult) {
            sameCount++;
        } else {
            sameCount = 0;
            lastResult = code;
        }

        if (sameCount >= threshold) {
            finalizeResult(code);
        }
    }

    function finalizeResult(code) {
        stopScanner();
        resultEl.textContent = code;

        const video = videoContainer.querySelector("video");
        if (video) {
            const ctx = snapshot.getContext("2d");
            snapshot.width = video.videoWidth;
            snapshot.height = video.videoHeight;
            ctx.drawImage(video, 0, 0, snapshot.width, snapshot.height);
            videoContainer.innerHTML = "";
            snapshot.style.display = "block";
            videoContainer.appendChild(snapshot);
        }
        beep.play();
    }

    startBtn.addEventListener('click', startScanner);
    stopBtn.addEventListener('click', stopScanner);
</script>