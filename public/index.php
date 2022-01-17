<?php

define("WHITE_LIST", ["homepage", "contact", "section", "article"]);
define("HTML_ID", [
    "homepage" => "home",
    "section" => "blog",
    "article" => "blog",
    "contact" => "contact"
]);

include "../view/header.php";
include "../view/publicView/" . (isset($_GET["p"]) && in_array($_GET["p"], WHITE_LIST) ? $_GET["p"] : "homepage") . "View.php";
include "../view/footer.php";
