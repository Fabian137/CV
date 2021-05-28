<?php 
    require_once 'vendor/autoload.php';

    use Illuminate\Database\Capsule\Manager as Capsule;
    use App\Models\Project;
    use App\Models\Job;

    $capsule = new Capsule;
    
    $capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => '127.0.0.1:3308',
        'database'  => 'ejemplophp',
        'username'  => 'root',
        'password'  => 'root',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);
    
    // Make this Capsule instance available globally via static methods... (optional)
    $capsule->setAsGlobal();
    
    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $capsule->bootEloquent();

    $nombre = "Fabián";
    $apellido = 'Beltrán';
    $nombreCompleto = $nombre . $apellido;
    $boolean = false;
    //var_dump($nombre);
    require_once('jobs.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>

     <!--////////////// Datos Personales ////////////////////  -->
    <div class="container">
        <div class="row section">
            <div class="col s3 foto">
                <img src="assets/img/man.jpg" alt="persona">
            </div>
            <div class="col s7 texto-foto">
                <h4><?php echo $nombre ?></h4>
                <h5>Científico de datos Bu</h5>
                <ul>
                    <li class="lista">Correo: cbeltrani@ifp.mx</li>
                    <li class="lista">Telefono: 55-55-55-55-55</li>
                    <li class="lista">Dirección: has been the industry's standard dummy the 1500s</li>
                    <li class="lista">Edad: 17 años</li>
                </ul>
            </div>
        </div>         
    </div>

        <!--////////////// Descripción ////////////////////  -->

    <section class="section">
        <div class="container">
            <h4 class="otra-seccion">Descripción</h4>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </section>

        <!--////////////// Experiencia Laboral ////////////////////  -->

    <section class="section">
        <div class="container">
            <h4 class="otra-seccion">Experiencia Laboral</h4>

            <?php 
                $valor = 0;
                $totalMeses = 0;
                for ($valor=0; $valor < count($jobs); $valor++){
                    Myfunction($jobs[$valor]);
                }
            ?>

            <a href="LaborFormulario.php" style="margin-top:2rem;" class="btn btn-primary">Formulario</a>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <h4 class="otra-seccion">Proyectos</h4>
                <?php 
                    $valor = 0;
                    for ($valor=0; $valor < count($projects); $valor++){
                        Myfunction($projects[$valor]);
                    }
                ?>
                <a href="formulario.php" style="margin-top:2rem;" class="btn btn-primary">Formulario Proyectos</a>
            </div>

            <?php
                $i=0;
                for($i=0; $i<count($proyectos); $i++){
                    proyectos($proyectos[$i]);
                }
            ?>
        </div>
    </section>
</body>
</html>