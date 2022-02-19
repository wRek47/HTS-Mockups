<?php

session_start();

require_once "config.php";

$hts->tpl = (object) array(
	"top" => file_get_contents(ROOT . "layout/top.tpl.php"),
	# "sidebar_popup" => file_get_contents(ROOT . "layout/popup/sidebar.tpl.php"),
	"skin_chooser" => file_get_contents(ROOT . "layout/popup/skin_chooser.tpl.php"),
	# "sidebar" => file_get_contents(ROOT . "layout/sidebar.tpl.php"),
	"bottom" => file_get_contents(ROOT . "layout/bottom.tpl.php"),
	
	"sidebar" => array(
		"profile-card" => file_get_contents(ROOT . "layout/sidebar/profile-card.tpl.php"),
		"about-panel" => file_get_contents(ROOT . "layout/sidebar/about-panel.tpl.php"),
		"commune-panel" => file_get_contents(ROOT . "layout/sidebar/commune-panel.tpl.php"),
		"mission-panel" => file_get_contents(ROOT . "layout/sidebar/mission-panel.tpl.php"),
		"donation-panel" => file_get_contents(ROOT . "layout/sidebar/donation-panel.tpl.php"),
		"services-panel" => file_get_contents(ROOT . "layout/sidebar/services-panel.tpl.php"),
		"resource-panel" => file_get_contents(ROOT . "layout/sidebar/resource-panel.tpl.php"),
		"partners-panel" => file_get_contents(ROOT . "layout/sidebar/partners-panel.tpl.php"),
	),
);

if (isset($_GET['skin'])) {

	$skin = $_GET['skin'];
	
	if (!isset($hts->skins->$skin))
		$skin = $hts->skins->default;
	
	$_SESSION['hts.skin'] = $skin;

}

if (isset($_SESSION['hts.skin'])):

	$hts->skins->active = $_SESSION['hts.skin'];

endif;

$html = (object) array();

// document header
$html->top = $hts->tpl->top;

	# build sidebar
	$sidebar = $hts->tpl->sidebar;
	
	$keys = array(
		"{panel.challenges}", "{panel.get_informed}", "{panel.get_involved}",
		"{panel.communicate}", "{panel.about_hts}", "{panel.partners}",
	);
	
	$values = array(
		build_menu($panel, "challenges"), build_menu($panel, "get_informed"), build_menu($panel, "get_involved"),
		build_menu($panel, "communicate"), build_menu($panel, "about_hts"), build_partners(),
	);
	
	$html->panels = array();
	
	foreach ($values as $value):
	
		$html->panel = TAB . TAB . "<article class=\"panel\">" . PHP_EOL . TAB . TAB . TAB . "<nav>" . PHP_EOL .
			$value . TAB . TAB . TAB . "</nav>" . PHP_EOL . TAB . TAB . "</article>" . PHP_EOL;
		
		array_push($html->panels, $html->panel);
	
	endforeach;
	
	$html->sidebar = $sidebar['profile-card'] . implode(PHP_EOL, $html->panels);
	# var_dump($html->sidebar);
	
	# find banner
	switch ($hts->skins->active):
	
		case "bootstrap":
			$banner = "//data.htscdn.org/themes/Default/images/header.jpg";
		break;
		
		case "dark":
			$banner = "//data.htscdn.org/themes/Dark/images/header.jpg";
		break;
		
		default:
			$banner = "//data.htscdn.org/themes/Default/images/header.jpg";
		break;
	
	endswitch;
	
	$uri = BASE . "?page={$page->index}";
	
	$keys = array(
		"{navSidebar.popUp}", "{skinChooser.popUp}",
		"{css}", "{ecma}",
		"{siteBanner}", "{siteAdvert}",
		"{layoutSidebar}",
		
		"!BASE",
	);
	
	$values = array(
		"", str_replace("{uri}", $uri, $hts->tpl->skin_chooser),
		build_media("css"), build_media("ecma"),
		$banner, "http://data.htscdn.org/images/support-hts.gif",
		$html->sidebar,
		
		BASE,
	);
	
	$html->top = str_replace($keys, $values, $html->top); unset($keys, $values);
/* $html->top = str_replace("{profile.nickname}", $hts->profile->nickname, $html->top); */

// document footer
$html->bottom = $hts->tpl->bottom;

	if ($hts->skins->active == "dark")
		$banner = "//data.htscdn.org/themes/Dark/images/hts_bottomheadern.jpg";
	
	$html->bottom = str_replace("{footer.banner}", $banner, $html->bottom);

// output document
print $html->top;

foreach ($hts->pages as $view):

	if ($view->index == $page->index):
	
		require_once $view->file;
	
	endif;

endforeach;

print $html->bottom;

// some custom functions
function build_media($type) {

	global $hts;
	
	@define("TAB", "\t");
	@define("EOL", "\n");
	
	$theme = @$hts->navigator->page->skin->theme;
	
	if (is_null($theme)):
	
		$theme = $hts->skins->active;
	
	endif;
	
	$html = "";
	
	foreach ($hts->skins as $skin => $data):
	
		if ($theme == $skin):
		
			$var = $hts->skins->$skin;
			switch ($type):
			
				case "css":
					$var = $var->css;
					break;
				
				case "ecma":
					$var = $var->ecma;
					break;
			
			endswitch;
			
			$attr = "";
			
			foreach ($var as $result):
			
				if ($type == "css"):
				
					$attr .= TAB . "<link rel=\"stylesheet\" type=\"text/css\"";
				
				elseif ($type == "ecma"):
				
					$attr .= TAB . "<script type=\"text/javascript\"";
				
				endif;
				
				foreach ($result as $key => $value):
				
					$attr .= " " . $key . "=\"" . $value . "\"";
				
				endforeach;
				
				if ($type == "css"):
				
					$attr .= " />" . EOL;
				
				elseif ($type == "ecma"):
				
					$attr .= "></script>" . EOL;
				
				endif;
			
			endforeach;
			
			$html .= $attr;
		
		endif;
	
	endforeach;
	
	unset($type, $hts, $page, $theme, $skin, $data, $attr, $key, $value);
	
	return $html;

}

function build_menu($nav, $menu) {

	global $hts;
	
	@define("TAB", "\t");
	@define("EOL", "\n");
	
	$html = "";
	
	foreach ($nav->$menu as $item):
	
		$active = "";
		
		if ($menu == "community" AND $item->title == "HackThisSite")
			$active = " active";
		
		$href = "javascript:void();";
		
		if (isset($item->href)):
		
			$href = $item->href;
		
		endif;
		
		if ($menu == "challenges"):
		
			$item->title .= " missions";
		
		endif;
		
		if (isset($hts->published) AND in_array($href, $hts->published)):
		
			$item->title .= "<i class=\"fa fa-lock\"></i>";
		
		elseif (isset($hts->developing) AND in_array($href, $hts->developing)):
		
			$item->title .= " <i class=\"fa fa-check\"></i>";
		
		endif;
		
		$html .= TAB . TAB . TAB . TAB . "<a class=\"nav-link" . $active . "\" href=\"" . BASE . $href . "\">" . $item->title . "</a>" . EOL;
	
	endforeach;
	
	unset($nav, $menu, $item);
	
	return $html;

}

function build_partners() {

	global $hts;
	@define("EOL", "\n");
	@define("TAB", "\t");
	
	$html = "";
	
	foreach ($hts->partners as $partner):
	
		$html .= TAB . TAB . TAB . TAB . "<a href=\"javascript:void();\"><img src=\"" . $partner->image . "\" alt=\"" . $partner->title . "\" / ></a><br />" . EOL;
	
	endforeach;
	
	return $html;

}

function build_pagination($page) {

	@define("EOL", "\n");
	@define("TAB", "\t");
	
	$html = "";
	
	if ($page == "blogs"):
	
		$html .= TAB . "<nav><ul class=\"pagination pagination-sm\">" . EOL;
		
		for ($i = 1; $i <= 3; $i++):
		
			$class = ($i == 1) ? " active" : "";
			$html .= TAB . TAB . "<li class=\"page-item" . $class . "\"><a class=\"page-link\" href=\"javascript:void();\">" . $i . "</a></li>" . EOL;
		
		endfor;
		
		$html .= TAB . "</ul></nav>" . EOL;
	
	endif;
	
	return $html;

}


?>