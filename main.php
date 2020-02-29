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

 $slicer = $col_2->add(['View','template' => new \atk4\ui\Template('
<div id="{$_id}" class="ui statistic">
  <input type="button" id="clicke" value=0 onclick=Clicker() style="width:500px;height:100px;background-color:green;color:white;font-size:35px;">
</div>
<script>
  function Clicker() {
    var click = document.getElementById("clicke");
    click.value = parseInt(click.value) + 1;
  }
</script>')]);

$save = $col_2->add(['View','template' => new \atk4\ui\Template('
<div id="{$_id}" class="ui statistic">
 <input type="button" value="Save" onclick=Save() style="width:500px;height:100px;background-color:green;color:white;font-size:35px;">
</div>
<script>
function Save() {
  var click = document.getElementById("clicke");
  var link = \'save.php?val=\'+click.value;
  window.open(link);
}
</script>')]);
//$val = $col_2->add(['FormField/Line', '1']);
 //$clicker = $col_2->add(["Button","Click!!!","green fluid big"]);
//$clicker->js('click', new \atk4\ui\jsReload($val, ['val' => $val->jsInput()->val(new \atk4\ui\jsExpression('parseInt([])+1', [$val->jsInput()->val()]), $val->jsInput()->focus())]));
// $label = $col_2->add(["Label",$_SESSION['user_id']]);

$save = $col_2->add(["Button","Save","blue big"]);

$exit = $app->add(['Button',"Ēxit","red"]);
$exit->link(['exit']);

$x2 = $col_3->add(["Button","click x2","medium white"]);

$pus = $col_3->add(["Button","+0.5 click/sec","medium blue"]);

$click1 = $col_3->add(["Button","+1 click/sec","medium red"]);
