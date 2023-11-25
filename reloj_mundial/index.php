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
    date_default_timezone_set('America/Vancouver');
    $vancouver = '<strong>Vancouver:</strong> ' . date('H:i:s');

    date_default_timezone_set('America/Puerto_Rico');
    $puertp_rico = '<strong>Puerto Rico:</strong> ' . date('H:i:s');

    date_default_timezone_set('America/Guayaquil');
    $guayaquil = '<strong>Guayaquil:</strong> ' . date('H:i:s');

    date_default_timezone_set('America/Maceio');
    $maceio = '<strong>Maceio:</strong> ' . date('H:i:s');
    ?>

    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Reloj Mundial America</h2>
                        <div class="row mt-5">

                            <div class="col">
                                <div class="alert alert-success" role="alert">
                                    <?php echo $vancouver; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-info" role="alert">
                                    <?php echo $puertp_rico; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-warning" role="alert">
                                    <?php echo $guayaquil; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-primary" role="alert">
                                    <?php echo $maceio; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        date_default_timezone_set('Asia/Seoul');
        $seoul = '<strong>Seoul:</strong> ' . date('H:i:s');

        date_default_timezone_set('Asia/Kuwait');
        $kuwait = '<strong>Kuwait:</strong> ' . date('H:i:s');

        date_default_timezone_set('Asia/Jerusalem');
        $jerusalem = '<strong>Jerusalem:</strong> ' . date('H:i:s');

        date_default_timezone_set('Asia/Hong_Kong');
        $hong_kong = '<strong>Hong Kong:</strong> ' . date('H:i:s');
        ?>

        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Reloj Mundial Asia</h2>
                        <div class="row mt-5">

                            <div class="col">
                                <div class="alert alert-success" role="alert">
                                    <?php echo $seoul; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-info" role="alert">
                                    <?php echo $kuwait; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-warning" role="alert">
                                    <?php echo $jerusalem; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-primary" role="alert">
                                    <?php echo $hong_kong; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        date_default_timezone_set('Europe/Madrid');
        $madrid = '<strong>Madrid:</strong> ' . date('H:i:s');

        date_default_timezone_set('Europe/Samara');
        $samara = '<strong>Samara:</strong> ' . date('H:i:s');

        date_default_timezone_set('Europe/Belfast');
        $belfast = '<strong>Belfast:</strong> ' . date('H:i:s');

        date_default_timezone_set('Europe/Zaporozhye');
        $zaporozhye = '<strong>Zaporozhye:</strong> ' . date('H:i:s');
        ?>

        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2>Reloj Mundial Europa</h2>
                        <div class="row mt-5">

                            <div class="col">
                                <div class="alert alert-success" role="alert">
                                    <?php echo $madrid; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-info" role="alert">
                                    <?php echo $samara; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-warning" role="alert">
                                    <?php echo $belfast; ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="alert alert-primary" role="alert">
                                    <?php echo $zaporozhye; ?>
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