<?php
require 'vendor/autoload.php';
$templates = new League\Plates\Engine('template');
echo $templates->render('contenido');