<!--begin::Card-->
<div class="card mb-5">
  <!--begin::Card header-->
  <div class="card-header border-0 pt-6">
    <div class="card-title">
      <h3 class="fw-bold m-0">Barcode Scanner</h3>
    </div>
  </div>
  <!--end::Card header-->

  <!--begin::Card body-->
  <div class="card-body">
    <div class="mb-5">
      <div id="video" class="border rounded w-100"
        style="height:482px; background:#000; overflow:hidden; border-radius:10px;">
      </div>
      <canvas id="snapshot" class="mt-3 border rounded w-100" style="display:none;"></canvas>
    </div>

    <div class="d-flex gap-3 mb-5">
      <button id="startBtn" class="btn btn-sm btn-primary">Start</button>
      <button id="stopBtn" class="btn btn-sm btn-danger" disabled>Stop</button>
    </div>

    <div class="fs-6">
      <strong>Scan result:</strong>
      <pre id="result" class="border rounded p-3 bg-light">—</pre>
    </div>

    <audio id="beep" src="https://actions.google.com/sounds/v1/alarms/beep_short.ogg"></audio>
  </div>
  <!--end::Card body-->
</div>
<!--end::Card-->

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
      <!--begin::Page title-->
      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"><?= $title ?></h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <?php $this->load->view('v3/admin/_partials/breadcrumb', ['breadcrumb' => ['Shipment', 'List Outbound']]); ?>
        <!--end::Breadcrumb-->
      </div>
      <!--end::Page title-->
    </div>
    <!--end::Toolbar container-->
  </div>
  <!--end::Toolbar-->
  <!--begin::Content-->
  <div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
      <!--begin::Card-->
      <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
          <!--begin::Card Search Bar-->
          <?php $this->load->view('v3/admin/_partials/search', [
            'module' => 'outbound',
            'placeholder' => 'Search Package'
          ]); ?>
          <!--begin::Card Search Bar-->
          <!--begin::Card toolbar-->
          <?php $this->load->view('v3/admin/_partials/toolbar', [
            'show_add_button' => false,
          ]); ?>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
          <!--begin::Table-->
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_outbound">
            <thead>
              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-90px text-start">Actions</th>
                <th class="min-w-150px text-start">AIRWAYBILL</th>
                <th class="min-w-120px">Date</th>
                <th class="min-w-120px">Outbound</th>
                <th class="min-w-150px text-center">Received in HO</th>
                <th class="min-w-120px">Release</th>
                <th class="min-w-130px text-center">Status</th>
                <th class="min-w-150px">Sender</th>
                <th class="min-w-150px">Receiver</th>
                <th class="min-w-300px">Address</th>
                <th class="min-w-150px text-center">Postal Code</th>
                <th class="min-w-140px">City</th>
                <th class="min-w-180px">Phone Number</th>
                <th class="min-w-130px">Country</th>
                <th class="min-w-150px">Package</th>
                <th class="min-w-150px text-center">Actual Weight</th>
                <th class="min-w-150px text-center">Weight Charge</th>
                <th class="min-w-150px text-start">Shipping Cost</th>
                <th class="min-w-100px text-start">Paid</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
              <?php foreach ($orders as $order) : ?>
                <tr>
                  <td class="text-center">
                    <a
                      href="#"
                      class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                      data-kt-menu-trigger="click"
                      data-kt-menu-placement="bottom-end">Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                    <!--begin::Menu-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                      data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a
                          href="apps/user-management/users/view.html"
                          class="menu-link px-3">Print Resi</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a
                          href="#"
                          class="menu-link px-3"
                          data-kt-users-table-filter="delete_row">Print Resi Thermal</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                  <td class="text-start"><?= $order->final_connote ?></td>
                  <td class="text-start"><?= date("m/d/Y", strtotime($order->tgl_kirim)) ?></td>
                  <td class="text-center">
                    <i class="ki-duotone ki-check fs-2"></i>
                  </td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td><span class="<?= $order->status_label ?>"><?= $order->status_name ?></span></td>
                  <td><?= $order->ship_name ?></td>
                  <td><?= $order->rec_name ?></td>
                  <td><?= $order->ship_address ?></td>
                  <td class="text-center"><?= $order->rec_postcode ?></td>
                  <td><?= $order->rec_city ?></td>
                  <td><?= $order->rec_phone ?></td>
                  <td><?= $order->origin ?></td>
                  <td><?= $order->desc_of_goods ?></td>
                  <td class="text-center"><?= $order->weight ?></td>
                  <td class="text-center"><?= $order->charge_weight ?></td>
                  <td class="text-start"><?= number_format($order->payment, 0, ",", ".");  ?></td>
                  <td class="text-start"><?= number_format($order->payment, 0, ",", "."); ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <!--end::Table-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end::Card-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->
</div>
<!--end::Content wrapper-->

<script src="https://unpkg.com/quagga@0.12.1/dist/quagga.min.js"></script>
<script>
  const startBtn = document.getElementById('startBtn');
  const stopBtn = document.getElementById('stopBtn');
  const resultEl = document.getElementById('result');
  const videoEl = document.getElementById('video');
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
        target: videoEl,
        constraints: {
          facingMode: "environment"
        }
      },
      decoder: {
        readers: [
          "ean_reader",
          "code_128_reader",
          "code_39_reader",
          "upc_reader",
          "codabar_reader"
        ]
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

    const video = videoEl.querySelector("video");
    if (video) {
      // pastikan canvas ukurannya sama dengan video asli
      snapshot.width = video.videoWidth;
      snapshot.height = video.videoHeight;

      const ctx = snapshot.getContext("2d");
      ctx.drawImage(video, 0, 0, snapshot.width, snapshot.height);

      snapshot.style.display = "block"; // tampilkan canvas hasil snapshot
    }

    beep.play();
  }

  startBtn.addEventListener('click', startScanner);
  stopBtn.addEventListener('click', stopScanner);
</script>