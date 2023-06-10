




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<title>BraveShop</title>
</head>
<body>
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
				<li><a href="login.php" title="Kirish"><i class="fa fa-sign-in"></i></a></li>
			</ul>

			<div class="menu-btn">
				<i class="fa fa-bars"></i>
			</div>
	</nav>
	</header>

	<section class="content" id="main">
		<h1>New Arrival For Men </h1>
		<p>Get The Best Man Fashion Arrivals</p>
		<a href="#sec">
				<button>Harid qilish</button>		
		</a>
	
	</section>	

	<div class="container" id="namuna">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Eng so'ngi mahsulotlarimiz</h1>
            <p class="fs-5 text-body-secondary">Bizning eng yaxshi ishlaarimizdan namunalar</p>
            </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach($img_olish as $olish): ?>
                        <div class="col" >
                            <div class="card shadow-sm">
                                <?php echo "<img src='data:" . $olish['mime_type'] . ";base64," . base64_encode($olish['image_data']) . "' width=100% height=350>";?>
                                <div class="card-body">
                                    <p class="card-text"><?php echo $olish['malumot'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Bog'lanish</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
        </div>
        <hr class="featurette-divider">
    </div> <
		<!-- ++++++ -->
	</section>

	<footer id="about-me">
		<div class="footer-content">
			<h3>BraveShop</h3>
			<p> Ushbu Vebsayt Erkaklar uchun kastyum shim ijarasini onlayn ko'rinishi uchun ishlandi </p>
			<ul class="socials">
				<li><a href="https://facebook.com" title="FaceBook" target="_blank"> <i id="face" class="fab fa-facebook" ></i></a>  </li>
				<li><a href="https://github.com/AtabayevAnvar/footer-foer" title="GitHub" target="_blank"> <i id="github" class="fab fa-github"></i></a>     </li>
				<li><a href="https://www.instagram.com/anvarbekraxatovich/" title="Instagram" target="_blank"> <i id="insta" class="fab fa-instagram"></i></a>  </li>
				<li><a href="https://www.youtube.com/channel/UC6HzJX3DEHPRrExNZyXr7lQ" title="YouTube" target="_blank"> <i id="yutub" class="fab fa-youtube"></i></a>    </li>
				<li><a href="https://t.me/Anvar_Atabayev" title="Telegram" target="_blank"> <i id="tg" class="fab fa-telegram"></i></a>   </li>
				
			</ul>
		</div>
		<div class="footer-bottom">
			<p>copyright &copy; 2023 codePacity. designed by <span>Atabayev</span></p>
		</div>
	</footer>

	

</body>
</html>