<?php 
	require "baza.php";

	$buyruq=$pdo->prepare("SELECT * FROM my_table ORDER BY id DESC");
	$buyruq->execute();

	$img_olish=$buyruq->fetchAll();

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>BraveShop</title>
</head>
<body>
	<header class=" position-fixed w-100 fixed-top">
	<nav class="navbar">
		<div class="logo">
			<a href="index.php">
			<h1>BraveShop</h1>
			</a>
		</div>
			<ul class="menu">
				<li><a href="#main">Bosh sahifa</a></li>
				<li><a href="#mahsulot">Mahsulotlar</a></li>
				
				<li><a href="#about-me">Biz haqimizda</a></li>
				<li><a href="login.php" title="Kirish"><i class="fa fa-sign-in"></i></a></li>
			</ul>

			<div class="menu-btn">
				<i class="fa fa-bars"></i>
			</div>
	</nav>
	</header>

	<section class="content" id="main">
		<h1>Erkaklar uchun yangi ustunlik </h1>
		<p>Eng yaxshi erkak modasidagi imijingizga ega bo'ling</p>
		<a href="#mahsulot">
				<button>Harid qilish</button>		
		</a>
	
	</section>	

	<div class="container" id="mahsulot">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Eng so'ngi mahsulotlarimiz</h1>
			<p>Mahsulotlarimizni ko'ring,o'z tanlovingizni toping va sizga qulay tarzda xarid qiling yoki ijaraga oling</p>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach($img_olish as $olish): ?>
                        <div class="col" >
                            <div class="card shadow-sm">
                                <?php echo "<img  src='data:" . $olish['mime_type'] . ";base64," . base64_encode($olish['image_data']) . "' width=362 height=376>";?>
                                <div class="card-body">
									<h3 class="card-text"><?= $olish['name1'] ?></h3>
                                    <p class="card-text"><?= $olish['name2'] ?></p>
									<h4 class="card-text"><?= $olish['narx']?> $</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                           <a href="mahsulot.php?id=<?= $olish['id']?>">
											<button type="button" class="btn btn-sm btn-outline-secondary">Ko'rish</button>
										</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
        </div>
        <hr class="featurette-divider">
    </div> 
		<!-- ++++++ -->

	<footer id="about-me">
		<div class="footer-content">
			<h3>BraveShop</h3>
			<p> Ushbu Vebsayt Erkaklar uchun kastyum shim ijarasini onlayn ko'rinishi uchun ishlandi </p>
			<ul class="socials">
				<li><a href="#" title="FaceBook" target="_blank"> <i id="face" class="fab fa-facebook" ></i></a>  </li>
				<li><a href="#" title="GitHub" target="_blank"> <i id="github" class="fab fa-github"></i></a>     </li>
				<li><a href="#" title="Instagram" target="_blank"> <i id="insta" class="fab fa-instagram"></i></a>  </li>
				<li><a href="#" title="YouTube" target="_blank"> <i id="yutub" class="fab fa-youtube"></i></a>    </li>
				<li><a href="#" title="Telegram" target="_blank"> <i id="tg" class="fab fa-telegram"></i></a>   </li>
				
			</ul>
		</div>
		<div class="footer-bottom">
			<p>copyright &copy; 2023</p>
		</div>
	</footer>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>