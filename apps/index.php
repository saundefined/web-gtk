<?php

// 
// this is the main page that gets loaded by end users
// 

require_once("apps.inc");

commonHeader('Applications' . $title, false);
appHeader($the_cat, $the_subcat);

include("apps.php");

appFooter();
commonFooter(false);

?>
