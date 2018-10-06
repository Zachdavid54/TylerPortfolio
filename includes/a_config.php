<?php
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/work.php":
        $CURRENT_PAGE = "Work";
        $PAGE_TITLE = "Work - tevs.creative";
        break;
    case "/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact - tevs.creative";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Home - tevs.creative";
}
?>