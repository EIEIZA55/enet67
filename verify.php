<?php
    session_start();
    if (isset($_SESSION['id'])){
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
    <div style="text-align: center;">
    <?php
    $u = $_POST['login'];
    $p = $_POST['pwd'];
    if($_POST ["login"] == "admin" && $_POST["pwd"] == "ad1234"){
        $_SESSION['usename'] = 'admin';
        $_SESSION['role'] = 'a';
        $_SESSION['id'] = session_id();
        echo"ยินดีต้อนรับคุณ ADMIN<br>";
    }
    elseif($_POST ["login"] == "member" && $_POST["pwd"] == "mem1234"){
        $_SESSION['usename'] = 'member';
        $_SESSION['role'] = 'm';
        $_SESSION['id'] = session_id();
        echo"ยินดีต้อนรับคุณ MEMBER<br>";
    }
    else{
        echo"ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง<br>";
    }
    ?>
    <a href="index.php">กลับไปยังหน้าหลัก</a>
        
    </div>
  
</body>

</html>
