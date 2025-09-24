<!DOCTYPE html>
<html>

<head>
    <title>Barcode Test</title>
</head>

<body>
    <h3>AWB: <?= $awbnumber; ?></h3>
    <p>
        <?= generate_barcode($awbnumber); ?>
    </p>
</body>

</html>