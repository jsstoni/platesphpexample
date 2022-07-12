<?php
require 'vendor/autoload.php';
$templates = new League\Plates\Engine('template');
//renderizar el contenido del archivo
echo $templates->render('contenido');