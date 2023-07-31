<!DOCTYPE html>
<html>
<head>
    <title>DIỆN TÍCH HÌNH CHỮ NHẬT</title>

</head>
<body>
    <style>
        table{
            width: 500px;
            margin: auto;
            background: #ffca97;
        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: #ffa500;
            color: #ffffff;
        }
        input{
            width: 300px;
        }
        button{
            background: #34a853;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        button:hover{
            cursor: pointer;
        }
    </style>

    <?php
    ini_set('display_errors',0);
    $width = $_POST['width'];
    $height = $_POST['height'];
    $acreage = $width*$height;
   ?>

    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    HÌNH CHỮ NHẬT
                </td>
            </tr>
            <tr>
                <td>
                    Chều rộng
                </td>
                <td>
                    <input type="text" name="width" value="<?php echo $width ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Chều cao
                </td>
                <td>
                    <input type="text" name="height" value="<?php echo $height ?>">
                </td>
            </tr>
            <tr>
            <td>
                Diện tích
            </td>
            <td>
             <input type="text" name="acreage" value="<?php echo $acreage ?>">
            </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                </td>
            </tr>
        </table>
    </form>
    <tr>
</tr>
</body>
</html>