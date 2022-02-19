<?php

foreach ($missions as $mission):

$tpl = (object) array();
$tpl->file = "pages/missions/basic.tpl.php";
$tpl->html = file_get_contents($tpl->file);

if ($mission->completed == true):

	$completed_class = "complete";
	$completed_icon = "check";
	$completed_text = "Complete";

else:

	$completed_class = "incomplete";
	$completed_icon = "close";
	$completed_text = "Incomplete";

endif;

if (isset($mission->requirements)):

	$requirements = implode(", ", $mission->requirements);

endif;

$vars = array("{title}", "{difficulty}", "{img}", "{requirements}", "{description}", "{complete.class}", "{complete.icon}", "{complete.text}", "{points}");
$vals = array($mission->title, $mission->difficulty, $mission->img, $requirements, $mission->description, $completed_class, $completed_icon, $completed_text, $mission->points);

$tpl->html = str_replace($vars, $vals, $tpl->html);

print $tpl->html;

endforeach;

?>