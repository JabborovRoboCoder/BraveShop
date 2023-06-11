<?php 
	require "baza.php";

    $id=$_GET['id'];

	$buyruq=$pdo->prepare("SELECT * FROM my_table WHERE id= ?");
	$buyruq->execute([$id]);

	$img_olish=$buyruq->fetchAll();

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DU Shop</title>
</head>

<body>
    <div>
	<header>
	<nav class="navbar">
		<div class="logo">
			<a href="index.php">
			<h1>BraveShop</h1>
			</a>
		</div>
			<ul class="menu">
				<li><a href="#main" class="active">Bosh sahifa</a></li>
				<li><a href="#sec">Mahsulotlar</a></li>
				
				<li><a href="#about-me">Biz haqimizda</a></li>
				<li><a href="Sign_In/log-in.php"><i class="fa fa-sign-in"></i></a></li>
			</ul>

			<div class="menu-btn">
				<i class="fa fa-bars"></i>
			</div>
	</nav>
	</header>
    </div><BR><BR><BR><br></BR></BR></BR>
    <div class="container">
        <div class="row featurette">
            <?php foreach($img_olish as $olish): ?>
                <div class="col-md-7">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Mahsulot tasnifi</h4>
                    </div>
                    <div class="card-body">
                        
                        <ul class="list-unstyled mt-3 mb-4 text-center">
                        <li><h3>Mahsulot nomi: <b><?= $olish['name1'] ?></b></h3></li><br>
                        <li><h3>Mahsulot Brendi: <b><?= $olish['name2'] ?></b></h3></li><br>
                        <li><h3>Mahsulot narxi: <b><?= $olish['narx']?></b>  $</h3></li><br>
                        <li><h3>Mahsulot ijara narxi: <b><?= $olish['narx2']?></b>  $/oyiga</h3></li><br>
                        
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sotib olish</button>
                    </div>
                    
                    
                    
                    <!-- <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p> -->
                </div>
                <div class="col-md-5">
                <?php echo "<img src='data:" . $olish['mime_type'] . ";base64," . base64_encode($olish['image_data']) . "' width=500 height=500>";?>
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->

                </div>
            <?php endforeach; ?>
        
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>