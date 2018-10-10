<?php
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact | Tevs Creative";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Home | Tevs Creative";
}
?>