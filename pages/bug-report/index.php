<?php

$report_categories = array("Other", "Profiles", "Settings", "Avatars",
"Messages", "Comments", "Basic Challenges", "Realistic Challenges", "Application Challenges",
"Programming Challenges", "JavaScript Challenges", "Logic Challenges", "Ext. Basic Challenges",
"Steganography Challenges", "News", "Articles", "Lectures", "Bug Report", "Search Users",
"Rankings", "Hall of Fame", "Forums", "IRC", "RootThisBox", "Feature Request", "Typo");

$report_status_colors = array("new" => "ffa0a0", "feedback" => "ff50a8", "acknowledged" => "ffd850", "confirmed" => "ffffb0",
"assigned" => "c8c8ff", "resolved" => "cceedd", "closed" => "e8e8e8", "public" => "161616",
"private" => "161616", "delete" => "161616", "sysadmin" => "c0c0c0", "fixed in git" => "cceedd");

$bug_reports = array();

	$report = array(
	
		"id" => 5935,
		"category" => "Other",
		"submitted" => "11-12-20",
		"updated" => "11-12-20",
		"assigned" => "Nobody",
		"status" => "new",
		"short-title" => "Legal page unavailable at https://www.ha...",
		"title" => "Legal page unavailable at https://www.hackthissite.org/pages/info/legal/",
		"description" => "The registration page at
https://www.hackthissite.org/register

Says:
Terms of Service:
[ ] Agree to adhere to our Legal Disclaimer.

The link to the Legal Disclaimer,
https://www.hackthissite.org/pages/info/legal/, returns an error message:
\"The requested URL
/pages/info/legal/ was not found on this server.\"",
		"author" => "ygersh",
		"visibility" => "public",
		"steps" => "1) Enter https://www.hackthissite.org/register
2) Click Legal Disclaimer
3) Get page not found error",
	
	);
	
	array_push($bug_reports, $report); unset($report);

foreach ($bug_reports as $key => $report):

	$id = $report['id'];
	
	$report['id'] = str_pad($report['id'], 6, "0", "STR_PAD_LEFT");
	$bug_reports[$key]['id'] = $report['id'];
	
	$visibility = $report['visibility'];
	
	if ($visibility == "public"):
	
		$visibility = "true";
	
	elseif ($visibility == "private"):
	
		$visibility = "false";
	
	endif;
	
	$report['visibility'] = $visibility;
	
	$report['description'] = nl2br(htmlentities($report['description']));
	$report['steps'] = nl2br(htmlentities($report['steps']));
	
	$report['status-color'] = $report_status_colors[$report['status']];
	
	if (isset($_GET['view'])):
	
		if ($_GET['view'] == $id)
			$cwr = $report;
	
	endif;
	
	unset($id);

endforeach;

define("ROOT", str_replace(DIRECTORY_SEPARATOR, "/", getcwd()) . "/");

$dir = ROOT . "pages/bug-report/";
$default_cwv = "show_all.php";

$cwv = $default_cwv;

if (isset($_GET['view'])):

	$view = $_GET['view'];
	
	if ($view == "show_all")
		$cwv = "show_all.php";
	
	if ($view == "submit")
		$cwv = "new_bug.php";
	
	if (isset($cwr))
		$cwv = "see_bug.php";

endif;

$sub_page = $dir . $cwv;

?><section>
	<article class="block">
		<nav class="nav justify-content-center">
			<a class="nav-link" href="?page=bug_report&view=submit">Submit Bug</a>
			<a class="nav-link" href="?page=bug_report&view=show_all">Show All Bugs</a>
		</nav>
		
		<nav class="nav justify-content-center">
			<a class="nav-link" href="javascript:void();">Open Bugs</a>
			<a class="nav-link" href="javascript:void();">Unclosed Bugs</a>
			<a class="nav-link" href="javascript:void();">Unresolved Bugs</a>
			<a class="nav-link" href="javascript:void();">New Bugs</a>
		</nav>
		
		<hr class="mt-2" />
		
		<nav>
			<ul class="pagination mb-0 justify-content-center">
				<li class="page-item disabled"><a class="page-link rounded-0">&laquo;</a></li>
				<li class="page-item"><a class="page-link text-success" href="javascript:void();">1</a></li>
<?php for ($i = 2; $i <= 10; $i++): ?>
				<li class="page-item">
					<a class="page-link text-success" href="javascript:void();"><?= $i; ?></a>
				</li>
<?php endfor; ?>
				<li class="page-item"><a class="page-link text-success rounded-0">&raquo;</a></li>
			</ul>
		</nav>
	</article>
	
<?php require_once $sub_page; ?>
	
	<article class="block">
		<ul class="list-unstyled mb-0 d-flex small justify-content-center">
			<li class="px-3 py-2" style="background-color: #ffa0a0;">new</li>
			<li class="px-3 py-2" style="background-color: #ff50a8;">feedback</li>
			<li class="px-3 py-2" style="background-color: #ffd850;">acknowledged</li>
			<li class="px-3 py-2" style="background-color: #ffffb0;">confirmed</li>
			<li class="px-3 py-2" style="background-color: #c8c8ff;">assigned</li>
			<li class="px-3 py-2" style="background-color: #cceedd;">resolved</li>
			<li class="px-3 py-2" style="background-color: #e8e8e8;">closed</li>
			<li class="px-3 py-2 text-light" style="background-color: #161616;">public</li>
			<li class="px-3 py-2 text-light" style="background-color: #161616;">private</li>
			<li class="px-3 py-2 text-light" style="background-color: #161616;">delete</li>
			<li class="px-3 py-2" style="background-color: #c0c0c0;">sysadmin</li>
			<li class="px-3 py-2" style="background-color: #cceedd;">fixed in git</li>
		</ul>
	</article>
</section>