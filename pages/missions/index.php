<?php

if ($hts->mch == "basic"):

	require_once "basic.php";

elseif ($hts->mch == "realistic"):

	require_once "realistic.php";

elseif ($hts->mch == "application"):

	require_once "application.php";

elseif ($hts->mch == "programming"):

	require_once "programming.php";

elseif ($hts->mch == "phreaking"):

	require_once "phreaking.php";

elseif ($hts->mch == "javascript"):

	require_once "javascript.php";

elseif ($hts->mch == "forensic"):

	require_once "forensics.php";

elseif ($hts->mch == "extbasic"):

	require_once "extbasic.php";

elseif ($hts->mch == "stego"):

	require_once "stego.php";

elseif ($hts->mch == "IRC"):

	require_once "irc.php";

endif;

?>