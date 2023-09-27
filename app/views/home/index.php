<?php
require_once APPROOT. "\\views\\inc\\header.php";
require_once APPROOT. "\\views\\inc\\nav.php";
?>
<?php flash('login_success') ?>
<?php print_r(getUserSession()) ?>
<? require_once APPROOT. "\\views\\inc\\footer.php"; ?>
