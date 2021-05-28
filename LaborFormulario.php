<?php

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
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
    
if(!empty($_POST)){
    $job = new Job();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job ->meses = $_POST['meses'];
    // $project-> visible=true;
    $job->save();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario para llenar la parte laboral</h1>
    <form action="LaborFormulario.php" method="post">
        <label for="">Title: </label>
        <input type="text" name='title'><br>
        <label for="">Description: </label>
        <input type="text" name='description'><br>
        <label for="">Experiencia: </label>
        <input type="number" name='meses'><br>
        <button type='submit'>Enviar</button>
    </form>
    <a style="margin-top:2rem;" class="btn btn-primary" href="index.php">CV</a>
</body>
</html>