<?php

include ('index.php');
session_destroy();
echo "Loging out............";
header('refresh:2;url=index.php');
?>