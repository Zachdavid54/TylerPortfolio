<?php
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/TylerPortfolio/work.php":
        $CURRENT_PAGE = "About";
        $PAGE_TITLE = "About Us";
        break;
    case "/TylerPortfolio/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact Us";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "TEVS Home";
}
?>