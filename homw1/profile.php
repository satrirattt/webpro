<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="pro.css">

</head>

<body>
    <?php
    echo "<h1>PROFILE</h1>";
    $name = "นางสาวสตรีรัตน์ สีวัน";
    $nickname = "การ์ด";
    $age = 19;
    $birth = "14 พฤษภาคม 2548";
    $usernum = "6606021620198";
    $faculty = "เทคโนโลยีและการจัดการอุตสาหกรรม";
    $branch = "เทคโนโลยีสารสนเทศ";
    $image = 'power.webp';

    echo "<p class='normal'>
    ชื่อ - นามสกุล : $name
    <br><br>ชื่อเล่น : $nickname
    <br><br> อายุ : $age
    <br><br>วันที่เกิด : $birth
    <br><br>รหัสนักศึกษา : $usernum
    <br><br>คณะ : $faculty
    <br><br>สาขา : $branch
</p><br>";

    echo "<img class='pic' src='$image' >";
    echo "<hr>"

    ?>

</body>

</html>