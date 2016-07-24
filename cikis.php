<?php
/**
 * Created by PhpStorm.
 * User: YunusEmre
 * Date: 13.7.2016
 * Time: 10:32
 */
session_start();
session_destroy();
header("location: giris.php");
?>