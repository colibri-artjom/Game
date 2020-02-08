<?php
session_start();
require "vendor/autoload.php";
$n = 9090;
$app = new \atk4\ui\App('pon4ik');
$app->initLayout('Centered');
$m = 1;

 $columns = $app->add('Columns');
 $col_1 = $columns->addColumn(3);
 $col_2 = $columns->addColumn(10);
 $col_3 = $columns->addColumn(3);

 $clicker = $col_2->add(["Button",$_SESSION["i"],"green fluid big"]);
 $clicker->on('click', function ($m) {
   $_SESSION["i"] = $_SESSION["i"] + 1;
   return $m;
 });
 $label = $col_2->add(["Label",$_SESSION['user_id']]);

$save = $col_2->add(["Button","Save","blue big"]);

$exit = $app->add(['Button',"Ēxit","red"]);
$exit->link(["exit"]);
