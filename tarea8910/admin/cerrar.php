<?php
session_start();
session_unset();
session_destroy();
echo "<script>sessionStorage.clear();
location.href = '../login.php';
</script>";

exit();