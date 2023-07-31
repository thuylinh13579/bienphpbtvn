<!DOCTYPE html>
<html>
    <head>
        <title>KẾT QUẢ HỌC TẬP </title>
    </head>
    <body>
       <style>
        table{
            width: 500px;
            margin: auto;
            background: #FF69B4;
        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: #C71585;
            color: #ffffff;
        }
        input{
            width: 300px;
        }
        button{
            background: #808080;
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
    $HK1 = $_POST['HK1'];
    $HK2 = $_POST['HK2'];
    $dtb = ($HK1+$HK2)/2;

    if ($dtb < 5){
        echo $kq="được lên lớp";
    }
    else if ($dtb >= 5 && $dtb < 6.5){
        echo $kq="hoàn thành";
    }
    else if ($dtb >= 6.5 && $dtb < 7){
        echo $kq="hoàn thành tốt";
       
    }
    else {
        echo $kq="hoàn thành xuất xắc";
    }
    
    
        if ($dtb < 5){
            echo $xlhl="Xếp loại yếu";
        }
        else if ($dtb >= 5 && $dtb < 6.5){
            echo $xlhl="Xếp loại trung bình";
        }
        else if ($dtb >= 6.5 && $dtb < 7){
            echo $xlhl="Xếp loại khá";
        }
        else {
            echo $xlhl="Xếp loại giỏi";
        }
   ?>

    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    KẾT QUẢ HỌC TẬP 
                </td>
            </tr>
            <tr>
                <td>
                    HK1
                </td>
                <td>
                    <input type="text" name="HK1" value="<?php echo $HK1 ?>">
                </td>
            </tr>
            <tr>
                <td>
                    HK2
                </td>
                <td>
                    <input type="text" name="HK2" value="<?php echo $HK2 ?>">
                </td>
            </tr>
            <tr>
                <td>
                     Điểm trung bình
                </td>
                <td>
                <input type="text" name="dtb" value="<?php echo $dtb ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Kết quả
                </td>
                <td>
                    <input type="text" name="kq"value="<?php echo $kq ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Xếp Loại Học Lực
                </td>
                <td>
                    <input type="text" name="xlhl"value="<?php echo $xlhl ?>">
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">XEM KẾT QUẢ</button>
                </td>
            </tr>
        </table>
    </form>
    <tr>
</tr>
    </body>
</html>