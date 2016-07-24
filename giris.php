<?php
/**
 * Created by PhpStorm.
 * User: YunusEmre
 * Date: 13.7.2016
 * Time: 10:19
 */
session_start();
if(isset($_POST["girisbuton"]))
{
    $_SESSION["kullaniciadi"]=$_POST["kadi"];
    $_SESSION["kullanicisifre"]=$_POST["sifre"];
    header("location: index.php");
}


?>


<form action="" method="post" name="girisformu" >
    <table width="354" border="0" cellpadding="2" cellspacing="5">
        <tr>
            <td width="130" height="25">Kullanıcı Adı</td>
            <td width="12">:</td>
            <td width="189">
                <label for="kadi"></label>
                <input type="text" name="kadi" id="kadi">
            </td>
        </tr>
        <tr>
            <td>Kullanıcı Şifresi</td>
            <td>:</td>
            <td><input type="text" name="sifre" id="sifre"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="girisbuton" id="girisbuton" value="Giriş Yap">
            </td>
        </tr>
    </table>
</form>
