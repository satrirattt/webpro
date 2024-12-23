<html>

<head>
    <title>firstnameNickname</title>
</head>

<body>
    <center>
        <?php
        if (isset($_POST['submit'])) {
            $filename = $_POST['filename'];
            $text = file($filename);
            foreach ($text as $tr_data) {
                $col = 1;
                $array_word = explode(",", $tr_data);

                foreach ($array_word as $value) {
                    $value = trim($value);
                    if ($col == 1) {
                        echo $value;
                    } else {
                        if ($value == "Robert")
                            echo "Dick";
                        elseif ($value == "Dick")
                            echo "Robert";
                        if ($value == "William")
                            echo "Bill";
                        elseif ($value == "Bill")
                            echo "William";
                        if ($value == "James")
                            echo "Jim";
                        elseif ($value == "Jim")
                            echo "James";
                        if ($value == "John")
                            echo "Jack";
                        elseif ($value == "Jack")
                            echo "John";
                        if ($value == "Margaret")
                            echo "Peggy";
                        elseif ($value == "Peggy")
                            echo "Margaret";
                        if ($value == "Edward")
                            echo "Ed";
                        elseif ($value == "Ed")
                            echo "Edward";
                        if ($value == "Sarah")
                            echo "Sally";
                        elseif ($value == "Sally")
                            echo "Sarah";
                        if ($value == "Andrew")
                            echo "Andy";
                        elseif ($value == "Andy")
                            echo "Andrew";
                        if ($value == "Anthony")
                            echo "Tony";
                        elseif ($value == "Tony")
                            echo "Anthony";
                        if ($value == "Deborah")
                            echo "Debbie";
                        elseif ($value == "Debbie")
                            echo "Deborah";
                    }
                    $col++;
                }
            }
        } else {
        ?>
            <h3>firstnameNickname.php</h3>
            <form method="post" action="firstnameNickname.php">
                <table border="0" align="center" width="400">
                    <tr>
                        <td width="100">File name </td>
                        <td width="100" align="center"><input type="text" name="filename" size="40" value=""></td>
                    </tr>
                    <tr>
                    <tr></tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value=" SUBMIT " />&nbsp;
                        <input type="reset" name="reset" value=" RESET " />
                    </td>
                    </tr>
                </table>

            </form>


        <?php

        }
        ?>
    </center>
</body>

</html>