<?php
setcookie('id', '', time() - 60*60*24*30, '/'); 
setcookie('sess', '', time() - 60*60*24*30, '/');
header('Location: log-in.php');
die();
echo '<script>parent.window.location.reload(true);</script>';
?>