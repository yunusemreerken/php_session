<?php
/**
 * Created by PhpStorm.
 * User: YunusEmre
 * Date: 13.7.2016
 * Time: 10:19
 */

session_start();
if($_SESSION["kullaniciadi"]=="admin"  && $_SESSION["kullanicisifre"]=="1234")
{
    echo "Hoş geldiniz ".$_SESSION["kullaniciadi"]."<br><br><a href='cikis.php'>Çıkış</a>";
}
else
{
    header("location: giris.php");
}
?>