<?php 
    require "baza.php"; 

    if (isset($_POST['submit'])) {
        $allowedMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png");
        if (!in_array($_FILES['image']['type'], $allowedMimeTypes)) {
            die("Error: Only images are allowed");
        }
        $name1 =$_POST['name1'];
        $name2 =$_POST['name2'];
        $narx=$_POST['narx'];
        $narx2=$_POST['narx2'];
        $imageData = file_get_contents($_FILES['image']['tmp_name']);
        $imageName = $_FILES['image']['name'];
        $mimeType = $_FILES['image']['type'];

        $stmt = $pdo->prepare("INSERT INTO 'add' (name1,name2,narx,narx2, image_name, mime_type, image_data) VALUES (?,?,?,?,?,?,?)");
        $stmt->execute([$name1,$name2,$narx,$narx2,$imageName, $mimeType, $imageData]);
           

    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style_login.css">

</head>
<body>
    <br><br>
    <div>
    <h1>MENING ADMIN PANELIM</h1>
    </div>
    <BR></BR>
    <div class="sign1">
        <form  method="post" action="" enctype="multipart/form-data">
            <input type="text" name="name1" placeholder="Mahsulot nomi" id="login"><br>
            <input type="text" name="name2" placeholder="Mahsulot Brendi" id="login"><br>
            <input type="number" min="0" name="narx" placeholder="Mahsulot narxi" id="login"><br>
            <input  name="image" type="file" id="login">      
            <input type="number" min="0" name="narx2" placeholder="Ijara narxi"  id="login"><br>         
            <input class="btn btn-primary" type="submit" name="submit">
        </form>
    </div>    
    <!-- ++++++++++++++++ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>


