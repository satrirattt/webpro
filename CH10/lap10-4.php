<html>

<head>
    <title>แสดงการฟังก์ชั่น fopen และ fpets</title>
</head>

<body>
    <?php
    $link[] = "http://www.kapook.com";
    $link[] = "http://www.yahoo.com";
    $link[] = "http://www.hotmail.com";
    $fp = fopen("link.html", "w");
    for ($i = 0; $link[$i] != "" ; $i++) 
    {
        fputs($fp, "<a href = '$link[$i]'>" . $link[$i] . "</a><br>\n");
    }
    echo "<h3>Write File Finish...</h><br>";
    echo "<a href='link.html'> test file </a>";
    fclose($fp);
    ?>
</body>

</html