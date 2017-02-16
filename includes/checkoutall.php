<?php
session_start();
session_destroy();
session_unset();
    header('Location: http://titan.csit.rmit.edu.au/~s3515746/wp/a3/index.php');
?>