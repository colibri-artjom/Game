<?php

require "vendor/autoload.php";

$app = new \atk4\ui\App('pon4ik');
$app->initLayout('Centered');

$clicker_name = $app->add(["Header","Colibri Clicker","Huge centered"]);

$button_login = $app->add(["Button","Log in","circular inverted blue","icon"=>"power off"]);

$button_login->on('click',  function() {
  return new \atk4\ui\jsExpression('document.location = "login.php" ');
  });

$button_reg = $app->add(["Button","Registration","green","icon"=>"arrow circle right"]);
$button_reg->link('reg.php');
