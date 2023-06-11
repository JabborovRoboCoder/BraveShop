
<?php 
    $login=$_POST['login'] ?? null;
    $parol=$_POST['parol'] ?? null;      

    if($login == "anvar" && $parol == 12345){

        header("Location: admin_p.php");
    }
        // elseif(empty($login) && empty($parol)){
        //     echo "Iltimos login va parolni to'liq kiriting !";
        // } 
    // else{
    //     echo "Login yoki parol xato !";
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Sign in</title>
</head>
<body>
    <div class="bg">
        <div class="sign">
            <form method="post">
                <a href="">
                    <img src="images/logom.png">    
                </a>
                <h1>Ro'xatdan o'tish</h1>
                <input type="text" name="login" placeholder="Login" id="login">
                <input type="password" placeholder="Parol" name="parol" id="pass"><br>
                

                <input type="submit" value="Ro'yxatdan o'tish" name="submit" id="sub">
            </form>
        </div>
    </div> 
    
    

</body>
</html>