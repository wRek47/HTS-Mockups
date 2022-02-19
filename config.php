<?php

$root = getcwd() . "/";
$root = str_replace(DIRECTORY_SEPARATOR, "/", $root);
@define("ROOT", $root);

$base = "/hts/";
@define("BASE", $base);

$sysroot = str_replace($base, "", $root);
@define("SYSROOT", $sysroot);

$_SESSION['client'] = (object) array();
$hts = (object) array();

// layout skin choices
$hts->skins = (object) array(
	"default"	=> "bootstrap",
	"bootstrap"	=> (object) array(),
	"classic"	=> (object) array(),
	"modern"	=> (object) array(),
	"dark"		=> (object) array(),
	"girlish"	=> (object) array(),
	"holiday"	=> (object) array(),
);

// global layout
$css = array(
	(object) array("href" => "//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"),
	(object) array("href" => "//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"),
	(object) array("href" => "/hts/media/stylesheets/hts.default.css"),
);

$ecma = array(
	(object) array("src" => "//code.jquery.com/jquery-3.5.1.slim.min.js"),
	(object) array("src" => "//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"),
	(object) array("src" => "//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"),
);

// layout: bootstrap
$bootstrap = (object) array();
$modern = (object) array();
$dark = (object) array();
$classic = (object) array();
$girlish = (object) array();
$holiday = (object) array();

# css media
@define("CSS", "/hts/media/stylesheets/");
$css[] = (object) array("href" => CSS . "hts.bootstrap.css");
$bootstrap->css = $css;

array_pop($css);
$css[] = (object) array("href" => CSS . "hts.dark.css");
$dark->css = $css;

array_pop($css);
$css[] = (object) array("href" => CSS . "hts.classic.css");
$classic->css = $css;

# javascript media
@define("ECMA", "/hts/media/javascript/");
$bootstrap->ecma = $ecma;
$dark->ecma = $ecma;
$classic->ecma = $ecma;

# apply layout media
$hts->skins->bootstrap = $bootstrap;
$hts->skins->dark = $dark;
$hts->skins->classic = $classic;

$hts->pages = array(

	(object) array("index" => "home", "href" => "?page=home", "file" => "pages/home.php"),
	(object) array("index" => "profile", "href" => "?page=profile", "file" => "pages/profile/view.php"),
	(object) array("index" => "settings", "href" => "?page=settings", "file" => "pages/profile/settings.php"),
	(object) array("index" => "settings_r", "href" => "?page=settings_r", "file" => "pages/profile/settings.remastered.php"),
	(object) array("index" => "missions", "href" => "?page=missions", "file" => "pages/missions/index.php"),
	(object) array("index" => "about_hts", "href" => "?page=about_hts", "file" => "pages/about/index.php"),
	(object) array("index" => "bill_of_rights", "href" => "?page=bill_of_rights", "file" => "pages/about/bill_of_rights.php"),
	(object) array("index" => "terms_and_conditions", "href" => "?page=terms_and_conditions", "file" => "pages/about/terms_and_conditions.php"),
	(object) array("index" => "privacy_policy", "href" => "?page=privacy_policy", "file" => "pages/about/privacy_policy.php"),
	(object) array("index" => "blogs", "href" => "?page=blogs", "file" => "pages/blogs/index.php"),
	(object) array("index" => "lectures", "href" => "?page=lectures", "file" => "pages/lectures/index.php"),
	(object) array("index" => "articles", "href" => "?page=articles", "file" => "pages/articles/index.php"),
	(object) array("index" => "news", "href" => "?page=news", "file" => "pages/news/index.php"),
	(object) array("index" => "useful_stuff", "href" => "?page=useful_stuff", "file" => "pages/useful_stuff.php"),
	(object) array("index" => "donate", "href" => "?page=donate", "file" => "pages/donate.php"),
	(object) array("index" => "meet_the_staff", "href" => "?page=meet_the_staff", "file" => "pages/meet_the_staff.php"),
	(object) array("index" => "under_the_hood", "href" => "?page=under_the_hood"),
	(object) array("index" => "ipv6", "href" => "?page=ipv6"),
	(object) array("index" => "hall_of_fame", "href" => "?page=hall_of_fame", "file" => "pages/hall_of_fame.php"),
	(object) array("index" => "rankings", "href" => "?page=rankings", "file" => "pages/rankings.php"),
	(object) array("index" => "online_users", "href" => "?page=online_users", "file" => "pages/online-users.php"),
	(object) array("index" => "search_users", "href" => "?page=search_users", "file" => "pages/search-users.php"),
	(object) array("index" => "hackthiszine", "href" => "?page=hackthiszine"),
	(object) array("index" => "htsmc", "href" => "?page=htsmc", "file" => "pages/htsmc/index.php"),
	(object) array("index" => "submit/article", "href" => "?page=submit/article", "file" => "pages/submit-article.php"),
	(object) array("index" => "submit/lecture", "href" => "?page=submit/lecture", "file" => "pages/submit-lecture.php"),
	(object) array("index" => "submit/useful_stuff", "href" => "?page=submit/useful_stuff", "file" => "pages/submit-insert.php"),
	(object) array("index" => "bug_report", "href" => "?page=bug_report", "file" => "pages/bug-report/index.php"),

);

// configure navigator data for active workspace
$hts->navigator = (object) array(

	"menu"		=> (object) array(),
	"sidebar"	=> (object) array(),
	"page"		=> (object) array(
	
		"skin"	=> null,
		"index"	=> "home",
	
	),

);

$hts->navigator->page = parse_active_page();

$menu = (object) array();
$sidebar = (object) array();

// content nav community environments
$links = array(

	(object) array("title" => "HackThisSite", "href" => "/hts/index.php"),
	(object) array("title" => "IRC"),
	(object) array("title" => "Discord"),
	(object) array("title" => "Forums"),
	(object) array("title" => "Store"),
	(object) array("title" => "URL Shortener"),
	(object) array("title" => "CryptoPaste"),

);
$menu->community = build_nav_menu("community", $links);

// content nav: social networking
$links = array(

	(object) array("title" => "Like Us",),
	(object) array("title" => "Follow Us"),
	(object) array("title" => "Fork Us"),

);
$menu->social = build_nav_menu("social", $links);

// sidebar panel: challenges
$links = array(

	(object) array("title" => "Basic", "href" => "?page=missions&ch=basic"),
	(object) array("title" => "Realistic", "href" => "?page=missions&ch=realistic"),
	(object) array("title" => "Application", "href" => "?page=missions&ch=application"),
	(object) array("title" => "Programming", "href" => "?page=missions&ch=programming"),
	(object) array("title" => "Phonephreaking", "href" => "?page=missions&ch=phreaking"),
	(object) array("title" => "Javascript", "href" => "?page=missions&ch=javascript"),
	(object) array("title" => "Forensic", "href" => "?page=missions&ch=forensic"),
	(object) array("title" => "Extbasic", "href" => "?page=missions&ch=extbasic"),
	(object) array("title" => "Stego", "href" => "?page=missions&ch=stego"),
	(object) array("title" => "Irc", "href" => "?page=missions&ch=IRC"),

);
$sidebar->challenges = build_nav_menu("challenges", $links);

// sidebar panel: get informed
$links = array(

	(object) array("title" => "Blogs", "href" => "?page=blogs"),
	(object) array("title" => "News", "href" => "?page=news"),
	(object) array("title" => "Articles", "href" => "?page=articles"),
	(object) array("title" => "Lectures", "href" => "?page=lectures"),
	(object) array("title" => "Useful Stuff", "href" => "?page=useful_stuff"),
	(object) array("title" => "HackThisZine", "href" => "?page=hackthiszine"),

);
$sidebar->get_informed = build_nav_menu("get_informed", $links);

// sidebar panel: get involved
$links = array(

	(object) array("title" => "Donate to HackThisSite!", "href" => "?page=donate"),
	(object) array("title" => "Store", "href" => "?page=news"),
	(object) array("title" => "Submit Article", "href" => "?page=submit/article"),
	(object) array("title" => "Submit Bug Report", "href" => "?page=bug_report"),
	(object) array("title" => "Submit Lecture", "href" => "?page=submit/lecture"),
	(object) array("title" => "Submit Useful Stuff", "href" => "?page=submit/useful_stuff"),

);
$sidebar->get_involved = build_nav_menu("get_involved", $links);

// sidebar panel: communicate
$links = array(

	(object) array("title" => "Forums"),
	(object) array("title" => "Private Messages"),
	(object) array("title" => "Discord"),
	(object) array("title" => "IRC Web Chat"),
	(object) array("title" => "IRC IdleRPG"),
	(object) array("title" => "IRC Stats"),
	(object) array("title" => "IRC Quotes"),
	(object) array("title" => "IRC Command Reference"),
	(object) array("title" => "Search Users", "href" => "?page=search_users"),
	(object) array("title" => "Who is Online", "href" => "?page=online_users"),
	(object) array("title" => "Rankings", "href" => "?page=rankings"),

);
$sidebar->communicate = build_nav_menu("communicate", $links);

// sidebar panel: about hts
$links = array(

	(object) array("title" => "About the Project", "href" => "?page=about_hts"),
	(object) array("title" => "Bill of Rights", "href" => "?page=bill_of_rights"),
	(object) array("title" => "Terms & Conditions", "href" => "?page=terms_and_conditions"),
	(object) array("title" => "Privacy Policy", "href" => "?page=privacy_policy"),
	(object) array("title" => "Meet the Staff", "href" => "?page=meet_the_staff"),
	(object) array("title" => "Under the Hood", "href" => "?phps"),
	(object) array("title" => "Advertise with HTS", "href" => "?page=advertise"),
	(object) array("title" => "IPv6", "href" => "?page=ipv6"),
	(object) array("title" => "Hall of Fame", "href" => "?page=hall_of_fame"),

);
$sidebar->about_hts = build_nav_menu("about_hts", $links);

// sidebar panel: affiliate badge
$links = array();

// sidebar panel: partners
$links = array();

# release vars
$hts->navigator->menu = $menu;
$hts->navigator->sidebar = $sidebar;

unset($menu, $sidebar, $links, $link, $item, $nav);

// set active layout per last session or default choice
$hts->skins->active = parse_active_skin();
parse_active_layout($hts);

// engine shortcut variables
$ws = $hts->navigator;
$nav = $hts->navigator->menu;
$panel = $hts->navigator->sidebar;
$page = $hts->navigator->page;

$hts->missions = (object) array(

	"basic" => array(
	
		(object) array(
			"title" => "Basic 1", "completed" => true,
			"img" => "//data.htscdn.org/images/missions/basic1.gif",
			"requirements" => array("HTML"),
			"description" => "Basic test of your skills to see if you can do any of these missions."),
		
		(object) array(
			"title" => "Basic 2", "completed" => true,
			"img" => "//data.htscdn.org/images/missions/basic2.gif",
			"requirements" => array("Common sense"),
			"description" => "A slightly more difficult challenge, involving an incomplete password script."),
		
		(object) array(
			"title" => "Basic 3", "completed" => true,
			"img" => "//data.htscdn.org/images/missions/basic3.gif",
			"requirements" => array("Basic HTML knowledge"),
			"description" => "Some intuition is needed to find the location of the hidden password file."),
		
		(object) array(
			"title" => "Basic 4", "completed" => true,
			"img" => "//data.htscdn.org/images/missions/basic4.gif",
			"requirements" => array("HTML knowledge, an email address"),
			"description" => "An email script has been set up, which sends the password to the administrator."),
		
		(object) array(
			"title" => "Basic 5", "completed" => true,
			"img" => "//data.htscdn.org/images/missions/basic5.gif",
			"requirements" => array("HTML knowledge, JS or FF, an email address"),
			"description" => "Similar to the previous challenge, but with some extra security measures in place."),
		
		(object) array(
			"title" => "Basic 6", "completed" => true,
			"img" => "//data.htscdn.org/images/missions/basic6.gif",
			"requirements" => array("Persistence, some general cryptography knowledge."),
			"description" => "An encryption system has been set up, which uses an unknown algorithm to change the text given."),
		
		(object) array(
			"title" => "Basic 7", "completed" => true,
			"img" => "//data.htscdn.org/images/missions/basic7.gif",
			"requirements" => array("Basic UNIX command knowledge"),
			"description" => "The password is hidden in an unknown file, and Sam has set up a script to display a calendar."),
		
		(object) array(
			"title" => "Basic 8", "completed" => true,
			"img" => "//data.htscdn.org/images/missions/basic8.gif",
			"requirements" => array("Knowledge of SSI (dynamic html executed by server, rather than browser)"),
			"description" => "The password is yet again hidden in an unknown file. Sam's daughter has begun learning PHP, and has a small script to demonstrate her knowledge."),
		
		(object) array(
			"title" => "Basic 9", "completed" => true,
			"img" => "//data.htscdn.org/images/missions/basic9.gif",
			"requirements" => array("Knowledge of SSI, unix directory structure"),
			"description" => "The password is again hidden in an unknown file. However, the script that was previously used to find it has some limitations."),
		
		(object) array(
			"title" => "Basic 10", "completed" => true, "requirements" => array(),
			"img" => "//data.htscdn.org/images/missions/basic10.gif",
			"description" => "This time Sam used a more temporary and &quot;hidden&quot; approach to authenticating users, but he didn't think about whether or not those users knew their way around javascript..."),
		
		(object) array("title" => "Basic 11", "completed" => true, "requirements" => array(),
			"img" => "//data.htscdn.org/images/missions/basic11.gif",
			"description" => "Sam decided to make a music site. Unfortunately he does not understand Apache. This mission is a bit harder than the other basics."),
	
	),
	
	"application" => array(
	
		(object) array(
			"completed" => true, "difficulty" => "easy",
			"objective" => "Find the password",
			"windows" => "app1win.zip", "mac" => "app1mac.sit", "unix" => "(unix)",
		),
	
		(object) array(
			"completed" => true, "difficulty" => "easy",
			"objective" => "Find the password",
			"windows" => "app2win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "easy",
			"objective" => "Find the password",
			"windows" => "app3win.zip", "mac" => "app3mac.sit", "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "easy",
			"objective" => "Press the button.",
			"windows" => "app4win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "easy",
			"objective" => "Find the password",
			"windows" => "app5win.zip", "mac" => false, "unix" => "app5unix.tar.gz",
		),
	
		(object) array(
			"completed" => true, "difficulty" => "easy",
			"objective" => "Find the password",
			"windows" => "app6win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "medium",
			"objective" => "Find the password",
			"windows" => "app7win.zip", "mac" => "app7map.zip", "unix" => "app7unix.tar.gz",
		),
	
		(object) array(
			"completed" => true, "difficulty" => "medium",
			"objective" => "Find the 6 digit code.",
			"windows" => "app8win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "medium",
			"objective" => "Match the beeps to the 'Play' button",
			"windows" => "app9win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "medium",
			"objective" => "Find the password",
			"windows" => "app10win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "medium",
			"objective" => "Find the password",
			"windows" => "app11win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "hard",
			"objective" => "Find the password",
			"windows" => "app12win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "medium",
			"objective" => "Find the numbers",
			"windows" => "app13win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "easy",
			"objective" => "It's Windows-only for a reason.",
			"windows" => "app14win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "hard",
			"objective" => "Think N64 hacking",
			"windows" => "app15win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => true, "difficulty" => "medium",
			"objective" => "",
			"windows" => "app16win.zip", "mac" => false, "unix" => false,
		),
	
		(object) array(
			"completed" => false, "difficulty" => "hard",
			"objective" => "Create a serial unique to your HTS username",
			"windows" => "app17win.zip", "mac" => "app17mac.zip", "unix" => "app17unix.tar.gz",
		),
	
		(object) array(
			"completed" => false, "difficulty" => "hard",
			"objective" => "Yet another unique key mission ;)",
			"windows" => "app18win.zip", "mac" => false, "unix" => false,
		),
	
	),
	
	"programming" => array(
	
		(object) array("title" => "Unscramble the words", "difficuty" => "easy", "completed" => true,
			"description" => "You have to find the original (unscrambled) words, which were randomly taken from a wordlist."),
		
		(object) array("title" => "Analyze the picture and find the ascii code", "difficuty" => "easy", "completed" => true,
			"description" => "The ascii code for a particular white pixel in the picture is equal to the offset from the last white pixel. The text contained in the image is the answer encoded in Morse.",
		),
		
		(object) array("title" => "Reverse Encryption", "difficuty" => "medium", "completed" => true,
			"description" => "This level is about reversing an encryption algorithm."),
		
		(object) array("title" => "Parse an XML file", "difficuty" => "medium", "completed" => true,
			"description" => "The XML file contains information about lines and arcs you have to draw. The result of the drawing gives you the solution to this challenge.",
		),
		
		(object) array("title" => "Fix a corrupted file", "difficuty" => "hard", "completed" => false,
			"description" => "This level is about a corrupted file. Someone downloaded a bz2 compressed png-file which contained an important password. But he forgot something important, and so the file got corrupted. It is up to you to fix it.",
		),
		
		(object) array("title" => "Bypass the image captcha", "difficuty" => "harder", "completed" => false,
			"description" => "Bypass the image captcha This level is about OCR. Write a program which is able to read all the characters in a given image, and let it beat a captcha automatically.",
		),
		
		(object) array("title" => "Unscramble the image lines, like pay-tv cracking", "difficuty" => "hard", "completed" => false,
			"description" => "This challenge is about image analyzing, inspired by pay-tv cracking. Code a program which automatically unscrambles the lines of the given image.",
		),
		
		(object) array("title" => "Code an IRC bot", "difficuty" => "easy", "completed" => false,
			"description" => "The goal of the challenge is to write a basic irc bot to perform some simple commands. It should only do things when told however (no automatic processes) and to keep it interesting, no mirc scripts.",
		),
		
		(object) array("title" => "One-Time-Pad Encryption", "difficuty" => "Insane!", "completed" => false,
			"description" => "This challenge has to do with creating algorithms to break one-time pad encryptions. You must create your own algorithm for solving a provided sudoku, and then applying the solution as the key against a blowfish-encrypted string.",
		),
		
		(object) array("title" => "Automated Steganography", "difficuty" => "hard", "completed" => false,
			"description" => "This mission is about writing a program to reverse and brute force the data hidden inside the image, and doing so in a smart manner in order to finish within the time limit.",
		),
		
		(object) array("title" => "Reverse Ascii Shift", "difficuty" => "easy", "completed" => true,
			"description" => "This level is about reversing a simple cipher text."),
		
		(object) array("title" => "String manipulation", "difficuty" => "moderate", "completed" => true,
			"description" => "This challenge is to test your skills at manipulating strings and making use of them at the same time."),
	
	),
	
	"phreaking" => array(),
	
	"javascript" => array(
		(object) array("title" => "Idiot Test", "difficulty" => "easy", "completed" => true,
			"description" => "faith is learning Javascript, the only thing that is protecting her from hackers is luck."),
		
		(object) array("title" => "Disable Javascript", "difficulty" => "easy", "completed" => true,
			"description" => "faith had made a redirect script and logout with javascript to keep hackers away"),
		
		(object) array("title" => "Math time!", "difficulty" => "easy", "completed" => true,
			"description" => "faith is going to test your math skills and your javascript operations"),
		
		(object) array("title" => "Var?", "difficulty" => "easy", "completed" => true,
			"description" => "But that's what it said! Right?"),
		
		(object) array("title" => "Escape!", "difficulty" => "easy", "completed" => true,
			"description" => "Did... she say runescape?"),
		
		(object) array("title" => "go go away .js", "difficulty" => "weird", "completed" => true,
			"description" => "now you see it..umm...wait..."),
		
		(object) array("title" => "JS Obfuscation. FTW!", "difficulty" => "moderate", "completed" => true,
			"description" => "Obfuscation?!!"),
	),
	
	"forensic" => array(
		(object) array("title" => "First Time Go", "difficulty" => "easy", "completed" => true,
		"description" => "Recover the deleted password file."),
		
		(object) array("title" => "Cheater", "difficulty" => "easy", "completed" => true,
		"description" => "Detect evidence of image manipulation."),
		
		(object) array("title" => "PapaSmurphey's Pizza", "difficulty" => "medium", "completed" => false,
		"description" => "Examine copied files for evidence."),
	),
	
	"extbasic" => array(
		(object) array("title" => "Over and Over?", "completed" => true),
		(object) array("title" => "Extension blocking", "completed" => true),
		(object) array("title" => "Finda Fake 1", "completed" => true),
		(object) array("title" => "Finda Fake 2", "completed" => true),
		(object) array("title" => "Fix the script", "completed" => true),
		(object) array("title" => "Sucky Sysadmin", "completed" => true),
		(object) array("title" => "Bugs? In my PHP? It's more likely than you think", "completed" => true),
		(object) array("title" => "Perl is a bitch sometimes", "completed" => true),
		(object) array("title" => "Captain Kirk learns perl!", "completed" => true),
		(object) array("title" => "Windows shell? ZOMG!", "completed" => true),
		(object) array("title" => "Can you get the password now?", "completed" => true),
		(object) array("title" => "I change my own variables.", "completed" => true),
		(object) array("title" => "I do validate. I really do.", "completed" => true),
		(object) array("title" => "1337 race condition", "completed" => true),
	),
	
	"stego" => array(),
	
	"IRC" => array(),

);

$hts->profile = (object) array();
$hts->profile->id = 2472533;
$hts->profile->hobbies = array("Epistemology");
$hts->profile->location = "Seattle, Washington";
$hts->profile->timezone = -8;
$hts->profile->website = "http://dylanlhall.com/";
$hts->profile->avatar = "//www.hackthissite.org/pages/user/avatar.view.php?id=standard/hack4.jpg";
$hts->profile->nickname = "wRek47";
$hts->profile->email = "Hidden";
$hts->profile->rank = "Hacker";
$hts->profile->points = 7178;
$hts->profile->im = (object) array();
$hts->profile->im->msn = "None";
$hts->profile->im->aim = "None";
$hts->profile->im->icq = "None";
$hts->profile->im->yahoo = "None";
$hts->profile->im->irc = "Fractal";
$hts->profile->warn_level = "//data.htscdn.org/images/warn/0.gif";
$hts->profile->voice_muted = "not muted";
$hts->profile->missions = (object) array();
$hts->profile->missions->basic = array(true, true, true, true, true, true, true, true, true, true, true);
$hts->profile->missions->realistic = array(true, true, true, true, true, true, true, true, true, true, true, true, true, true, true, true);
$hts->profile->missions->application = array(true, true, true, true, true, true, true, true, true, true, true, true, true, true, true, true, false, false);
$hts->profile->missions->programming = array(true, true, true, true, false, false, false, false, false, false, true, true);
$hts->profile->missions->forensic = array(true, true, false);
$hts->profile->missions->javascript = array(true, true, true, true, true, true, true);
$hts->profile->missions->extbasic = array(true, true, true, true, true, true, true, true, true, true, true, true, true, true);
$hts->profile->missions->stego = array(true, true, true, true, true, true, true, true, true, true, false, true, true, true, false, false, false);
$hts->profile->articles = array();
$hts->profile->lectures = array();
$hts->profile->hof = array();
$hts->profile->donations = array();
$hts->profile->member_group = "members";
$hts->profile->pw_expire = 18417;
$hts->profile->time_offset = -8;

$hts->partners = array(

	(object) array("image" => "//data.htscdn.org/images/hbhlogo.jpg", "title" => "Hellbound Hackers"),
	(object) array("image" => "//data.htscdn.org/images/netsparker.gif", "title" => "netsparker web scanner"),
	(object) array("image" => "//data.htscdn.org/images/acunetixblog.gif", "title" => "acunetix web security blog"),
	(object) array("image" => "//data.htscdn.org/images/buddyns88x31.png", "title" => "BuddyNS DNS Uptime"),
	(object) array("image" => "//data.htscdn.org/images/brave-88x31.png", "title" => "Brave Web Browser"),

);

$hts->ranks = array(

	(object) array("image" => "//www.hackthissite.org/user/img/rank001.gif", "title" => "Petitioner", "points" => 0),
	(object) array("image" => "//www.hackthissite.org/user/img/rank002.gif", "title" => "Script Kiddie", "points" => 700),
	(object) array("image" => "//www.hackthissite.org/user/img/rank003.gif", "title" => "Apprentice", "points" => 1700),
	(object) array("image" => "//www.hackthissite.org/user/img/rank004.gif", "title" => "Wiseman", "points" => 3200),
	(object) array("image" => "//www.hackthissite.org/user/img/rank005.gif", "title" => "Master", "points" => 5400),
	(object) array("image" => "//www.hackthissite.org/user/img/rank006.gif", "title" => "Hacker", "points" => 7000),
	(object) array("image" => "//www.hackthissite.org/user/img/rank007.gif", "title" => "Elite", "points" => 8400),
	(object) array("image" => "//www.hackthissite.org/user/img/rank008.gif", "title" => "Sage", "points" => 10000),

);

$hts->points = (object) array(

	"basic" => (object) array("missions" => 11, "points" => 5),
	"realistic" => (object) array("missions" => 12, "points" => array(20, 35, 50, 75, 95, 95, 120, 165, 210, 240, 300, 210, 220, 350, 450, 400)),
	"application" => (object) array("missions" => 18, "points" => array(10, 20, 30, 15, 25, 30, 150, 60, 80, 95, 115, 130, 150, 40, 75, 40, 200, 350)),
	"programming" => (object) array("missions" => 12, "points" => array(100, 100, 250, 150, 250, 300, 250, 100, 300, 300, 100, 150)),
	"phonephreaking" => (object) array(),
	"javascript" => (object) array("missions" => 7, "points" => 6),
	"forensic" => (object) array("missions" => 3, "points" => array(100, 50, 160)),
	"extbasic" => (object) array("missions" => 14, "points" => 7),
	"stego" => (object) array("missions" => 17, "points" => array(15, 25, 15, 15, 150, 15, 20, 40, 35, 125, 225, 125, 65, 200, 150, 120, 200)),
	"irc" => (object) array("missions" => 9, "points" => 10),

);

$hts->blogs = array(

	(object) array("date" => "05/10/18", "author" => "Kage", "comments" => 68,
		"title" => "Github for Status Pages",
		"preview" => "Status pages are important for maintaining a line of communication with your users in the event of a loss of services. We do this both via Twitter and our status page. Over the years we have maintained these status pages in one form or another. This varied from custom-generated output from a parsed Nagios status.dat file, to a Cachet site, to (currently) StatusCake pages.

Through all of these iterations we always had to host this somewhere, itself a single point of failure, usually a tiny VPS with a different provider. The last and current one, StatusCake, while a cloud provider, also required a self-maintained VPS due supporting only HTTP (not HTTPS) for our status sub-domains. Some of our domains use HTTP Strict Transport Security (HSTS), which enforces HTTPS on all sub-domains, so their solution wouldn't work out of the box. This meant we had to run a..."
	),
	
	(object) array("date" => "21/02/16", "author" => "limdis", "comments" => 40,
		"title" => "Internetwache CTF 2016",
		"preview" => "Shout to all those that participated under the HackThisSite flag. We finished 81st out of 1492 teams!

Great work everyone! There was an amazing turnout for this event. We will be participating in a lot of CTFs this year of varying skill levels. Keep your eyes open for upcoming event announcements!

HackThisSite IW-CTF 2016 Team Members:
Ninjex, Ayr3s, missingRemote, mShred, Pure'Cadence, Zylopfa, stoneman, LiquidLemon, NETWORKsecurity, rained, Skyfa11, limdis"
	),
	
	(object) array("date" => "26/03/15", "author" => "limdis", "comments" => 16,
		"title" => "Metasploit Unleashed",
		"preview" => "What's up guys. I'm ready to fire this course up again. This time with a bit more involvement and additional projects for you to practice and hone your skills on. If you have never heard about Metasploit before I highly encourage you to check it out. This course is more than simply reading about exploits. You will actually be performing them! The goal is to provide you with the opportunity to really dive into penetration testing, and learn together with others. If you have ever wished that someone took you under their wing and teach you, this is as close as you will get.

I want to officially kick this off Saturday, the 11th of April. If you wish to participate in a group setting join us via IRC in #metasploit. Alternatively, you may ask questions and post comments here in this thread. All content is public and is available at anytime so you are free to learn at your own pace.

For more information: See here",
	),
	
	(object) array("date" => "19/12/14", "author" => "limdis", "comments" => 16,
		"title" => "POSITION FILLED",
		"preview" => "There were many outstanding candidates and we conducted several interviews. It was a tough decision but the Security News position has been filled. Thanks to all that applied!


~HTS Staff",
	),
	
	(object) array("date" => "21/09/14", "author" => "limdis", "comments" => 18,
		"title" => "Call for Staff - Security News *POSITION FILLED*",
		"preview" => "We have decided to revive the security news project and open a slot in our staff for anyone who might be interested in joining in. This an opportunity to join our team as we push forward and continue to shape HTS.


Description of Duties:
You will be responsible for weekly (or bi-weekly) news summaries.
You will have flexibility on how this information is presented and you may brand it with your nic/avatar.
You will participate in staff meetings and will be a subject matter expert in larger political events (for example &quot;fast lanes&quot;).
This is a volunteer position. Everyone here at HTS works on a volunteer basis.

Requirements:
Must be able to find and vet legitimate sources (no satire).
Somewhat fluent in English and can write clearly.
Possess some skill with an image editor.
Dedication.

How to Apply:
Contact mShred or myself if you are interested.
Applicants will be interviewed to determine eligibility.


~HTS Staff",
	),

);

$ch = "basic";
if (isset($_GET['ch'])):

	foreach ($hts->missions as $section => $data):
	
		if ($_GET['ch'] == $section):
		
			$ch = $section;
		
		endif;
	
	endforeach;

endif;

$hts->mch = $ch;
$missions = $hts->missions->$ch;
$points = $hts->points;

foreach ($missions as $m_id => $mission):

	$id = $m_id + 1;
	$p = $points->$ch;
	
	if (is_array($p->points)):
	
		$mp = $p->points[$m_id];
	
	else:
	
		$x = $points->$ch->points;
		$y = $x * $id;
		$mp = $y;
	
	endif;
	
	$missions[$m_id]->points = $mp;

endforeach;

$javascript_enabled = true;

// HTS Demo Functionality

function parse_active_page() {

	global $hts;
	
	$page = $hts->pages[0];
	
	if (isset($_GET['page'])):
	
		foreach ($hts->pages as $data):
		
			if ($data->index == $_GET['page']):
			
				$page = $data;
			
			endif;
		
		endforeach;
	
	endif;
	
	return $page;

}

function parse_active_skin() {

	global $hts;
	
	$skin = "default";
	
	if (isset($_SESSION['client']->hts->skin)):
	
		$skin = $_SESSION['client']->hts->skin;
	
	else:
	
		if (!isset($_SESSION['client']))
			$_SESSION['client'] = (object) array();
		
		if (!isset($_SESSION['client']->hts))
			$_SESSION['client']->hts = (object) array();
		
		$_SESSION['client']->hts->skin = $skin;
	
	endif;
	
	# validate active skin
	if (!isset($hts->skins->$skin) OR $skin == "default"):
	
		$skin = $hts->skins->default;
	
	endif;
	
	if ($_SESSION['client']->hts->skin != $skin):
	
		$_SESSION['client']->hts->skin = $skin;
	
	endif;
	
	# save secured layout selection
	return $skin;

}

function parse_active_layout($hts) {

	if (isset($_GET['skin'])):
	
		$skin = $_GET['skin'];
		
		if (isset($hts->skins->$skin)):
		
			@$hts->navigator->page->skin = $skin;
		
		else:
		
			$skin = $hts->skins->default;
			$hts->navigator->page->skin = $skin;
		
		endif;
	
	else:
	
		$skin = "default";
	
	endif;
	
	if ($skin == "default"):
	
		@$hts->navigator->page->skin = @$hts->skins->default;
	
	endif;
	
	$_SESSION['client']->hts->skin = $hts->navigator->page->skin;
	$hts->skins->active = $hts->navigator->page->skin;
	
	unset($hts, $skin);

}

function build_nav_menu($cat, $links) {

	$nav = array();
	
	foreach ($links as $data):
	
		$item = $data;
		$nav[] = $item;
	
	endforeach;
	
	unset($links, $link, $item);
	
	return $nav;

}

class Template {

	function __construct($file) {
	
		$this->file = $file;
		$this->html = file_get_contents($file);
	
	}
	
	function set($var, $val) {
	
		$html = $this->html;
		$html = str_replace("{" . $var . "}", $val, $html);
		
		$this->html = $html;
	
	}
	
	function condition($key, $bool, $procedure) {
	
		$html = $this->html;
		
		if (key_exists($procedure[$bool]))
			$replace = $procedure[$bool];
		
		$html = str_replace("{if:" . $key . "}", $replace, $html);
		
		$this->html = $html;
	
	}

}

?>