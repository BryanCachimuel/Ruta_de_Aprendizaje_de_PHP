<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reloj Mundial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <?php
        date_default_timezone_set('Asia/Seoul');
        $sul = '<strong>Seoul:</strong> ' . date('H:i:s');

        date_default_timezone_set('America/Puerto_Rico');
        $pr = '<strong>Puerto Rico:</strong> ' . date('H:i:s');

        date_default_timezone_set('Africa/Lubumbashi');
        $lbmb = '<strong>Lubumbashi:</strong> ' . date('H:i:s');

        date_default_timezone_set('Europe/Athens');
        $atn = '<strong>Atenas:</strong> ' . date('H:i:s');
    ?>

    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Reloj Mundial</h2>
                        <div class="row mt-5">

                            <div class="col">
                                <div class="alert alert-success" role="alert">
                                    <?php echo $sul; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-info" role="alert">
                                    <?php echo $pr; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-warning" role="alert">
                                    <?php echo $lbmb; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-primary" role="alert">
                                    <?php echo $atn; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>