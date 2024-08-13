<?php
    session_start();
    if (!isset($_SESSION['id'])){
        header("Location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
   
    <?php


        echo "<form> <a href='index1.php' style='float: right;'>กลับไปหน้าหลัก</a><table>
        <tr>    
                <td>ชื่อ :</td>
                <td>$_SESSION[usename]</td>
        </tr>
        <tr>    
                <td>หมวดหมู่ :</td>
                <td> <select name='category'>
                <option value='all'>ทั้งหมด</option>
                <option value='general'>เรื่องทั่วไป</option>
                <option value='study'>เรื่องเรียน</option>
            </select></td>
        </tr>
        <tr>    
                <td>หัวข้อ :</td>
                <td><input type='text' name='login' size='30'></td>
        </tr>
        <tr>    
                <td>เนื้อหา :</td>
                <td><textarea name='' id='' cols='31' rows='3'></textarea></td>
        </tr>
        <tr>    
                <td></td>
                <td><input type='submit' value='บันทึกข้อความ'></td>
        </tr>
    </table>
   
     </form>";
    ?>
    
</body>

</html>