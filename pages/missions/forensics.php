<article class="block">
	<h3>Forensic Missions</h3>
	
	<p class="mx-3">
		These missions are designed to test your skills in finding that which isn't there.<br />
		Get help <a href="javascript:void();">here</a>.
	</p>
</article>

<?php

foreach ($missions as $mission):

$tpl = (object) array();
$tpl->file = "pages/missions/forensics.tpl.php";
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

$vars = array("{title}", "{difficulty}", "{description}", "{complete.class}", "{complete.icon}", "{complete.text}", "{points}");
$vals = array($mission->title, $mission->difficulty, $mission->description, $completed_class, $completed_icon, $completed_text, $mission->points);

$tpl->html = str_replace($vars, $vals, $tpl->html);

print $tpl->html;

endforeach;

?>