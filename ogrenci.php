<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Öğrenci Formu</title>
</head>
<body>
<?php
$ad="";
$tc="";
$soyad="";
$yas="";
$ort="";
$sonuc="";
$icerik=[$tc,$ad,$soyad,$yas,$ort];


if(count($_POST)>0){
    $tc=getir("tc",0);
    $ad=getir("ad",0);
    $soyad=getir("soyad",0);
    $yas=getir("yas",0);
    $ort=getir("ort",0);
    if($tc=="" && $ad==""  &&$soyad==""  && $yas=="" && $ort=="")
        $sonuc="Hiçbir şey girilmedi.";


}
?>
<form method="post" action="ogrenci.php">
<table width="550" border="2">

    <tr>
        <td width="30%" align="center" style="..."><font color="black" face="tahoma" size="3">TC</font></td>
        <td width="20%" align="center" style="..."><font color="black" face="tahoma" size="3">AD</font></td>
        <td width="50%" align="center" style="..."><font color="black" face="tahoma" size="3">SOYAD</font></td>
        <td width="50%" align="center" style="..."><font color="black" face="tahoma" size="3">YAŞ</font></td>
        <td width="50%" align="center" style="..."><font color="black" face="tahoma" size="3">ORTALAMA</font></td>
    </tr>
    <tr>
        <td><input type="text" name="tc"></td>
        <td><input type="text" name="ad"></td>
        <td><input type="text" name="soyad"></td>
        <td><input type="text" name="yas"></td>
        <td><input type="text" name="ort"></td>
    </tr>
    <tr>
        <td colspan="5">
            <input onclick="location.href='localhost/deneme/ders/dosya.txt'" type="button" name="button" value="Kaydet">
            <?php
            dosyayaz($icerik);
            ?>
        </td>
    </tr>




</table>
</form>

</body>
</html>
<?php

function getir($key,$yoksa)
{
    if(isset($_POST[$key]))
        return $_POST[$key];
    return $yoksa;
}
function dosyayaz(array $icerik)
{

    $dosya = fopen('dosya.txt', 'a');
    for($i=0;$i<6;$i++)
    {
        fwrite($dosya,$icerik[$i]);

    }
    fclose($dosya);
}


?>
