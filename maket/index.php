<?php
$link = "http://" . $_SERVER['HTTP_HOST'] . "/maket/";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ANTONIO BIAGGI</title>
	<meta charset="utf-8">
	<meta id="myViewport" charset="utf-8" http-equiv="Content-Type"  name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,700italic,400italic,300italic&subset=latin,cyrillic-ext,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?=$link?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=$link?>css/slider.css">
	<link rel="stylesheet" type="text/css" href="<?=$link?>plugins/jquery.scrollbar/jquery.scrollbar.css">

	<script type="text/javascript" src="<?=$link?>js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?=$link?>js/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="<?=$link?>js/jquery-effect.js"></script>
	<script type="text/javascript" src="<?=$link?>js/plugins/jquery.scrollbar/jquery.scrollbar.min.js"></script>
	<script type="text/javascript" src="<?=$link?>js/slider_main.js"></script>
	<script type="text/javascript" src="<?=$link?>js/engine.js"></script>
	<script>
		setViewport();
		window.onload = function () {
			setViewport();
		};
		window.onresize = function(event) {
			setViewport();
		};
		function setViewport(){
			var mvp;
			if(screen.width <= 360) {
				mvp = document.getElementById('myViewport');
				mvp.setAttribute('content', 'width=360, user-scalable=no');
			}else{
				mvp = document.getElementById('myViewport');
				mvp.setAttribute('content', 'width=device-width, user-scalable=no, initial-scale=1');
			}
		}
	</script>
</head>
<body>
<div id="header">
	<div class="header-wrapp">
		<div class="content-header">
			<div class="lang"><span><a href="#"><i class="globe"></i>POLAND(PLN)<i class="fa fa-angle-down"></i></a></span></div>
			<div class="block">
				<ul>
					<li class="wish-list"><span><a href="#"><i class="icon icon-star"></i>WISH LIST</a></span></li>
					<li class="bascet"><span><a href="#"><i class="icon icon-bascet"></i></i>BASKET</a></span></li>
					<li class="login"><span><a href="#"> <i class="icon icon-user"></i>LOGIN</a></span></li>
				</ul>
			</div>
			<div class="logo"><a href="#"><img src="<?=$link?>images/foto/images/logo.png"></a></div>
		</div>
		<!-- NAV -->
		<div class="header-navigation clearfix">
			<div class="wrapp-head-menu">
				<ul class="primary">
					<li class="activ-info-catalog"><span><a href="#">WOMEN<i class="fa fa-angle-down"></i></a></span>
						<!-- SUBMENU (START) -->
						<div class="subholder">
							<ul class="sub clearfix">
								<li class="shoes">
									<div class="wrapp-cont-sub">
										<div class="foto-sub-menu"><img src="<?=$link?>images/foto/images/foto_sub_menu3.jpg"></div>
										<div class="info-sub">
											<p class="goods-name">Shoes</p>
											<span class="item-goods">57 ITEMS</span>
										</div>
									</div>
								</li>
								<li>
									<div class="wrapp-cont-sub">
										<div class="foto-sub-menu"><img src="<?=$link?>images/foto/images/foto_sub_menu3.jpg"></div>
										<div class="info-sub">
											<p class="goods-name">Sandals</p>
											<span class="item-goods">25 ITEMS</span>
										</div>
									</div>
								</li>
								<li>
									<div class="wrapp-cont-sub">
										<div class="foto-sub-menu"><img src="<?=$link?>images/foto/images/foto_sub_menu3.jpg"></div>
										<div class="info-sub">
											<p class="goods-name">Sneakers</p>
											<span class="item-goods">9 ITEMS</span>
										</div>
									</div>
								</li>
								<li>
									<table>
										<tr>
											<td class="col-left">Boots</td>
											<td class="col-right">21 ITEMS</td>
										</tr>
										<tr>
											<td class="col-left">Ankle Boots</td>
											<td class="col-right">19</td>
										</tr>
										<tr>
											<td class="col-left">High Boots</td>
											<td class="col-right">38</td>
										</tr>
										<tr>
											<td class="col-left">Ballet Shoes</td>
											<td class="col-right">6</td>
										</tr>
										<tr>
											<td class="col-left">Moccasins</td>
											<td class="col-right">22</td>
										</tr>
									</table>
									<div class="more-catalogue">
										<a href="#">AND LOST MORE<br>IN OUR CATALOGUE
											<i class="icon-n fa fa-arrow-circle-right"></i>
										</a>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li><span><a href="#">MEN<i class="fa fa-angle-down"></i></a></span>
						<div class="subholder">
							<ul class="sub clearfix">
								<li class="shoes">
									<div class="wrapp-cont-sub">
										<div class="foto-sub-menu"><img src="<?=$link?>images/foto/images/foto_sub_menu3.jpg"></div>
										<div class="info-sub">
											<p class="goods-name">Shoes</p>
											<span class="item-goods">57 ITEMS</span>
										</div>
									</div>
								</li>
								<li>
									<div class="wrapp-cont-sub">
										<div class="foto-sub-menu"><img src="<?=$link?>images/foto/images/foto_sub_menu3.jpg"></div>
										<div class="info-sub">
											<p class="goods-name">Shoes</p>
											<span class="item-goods">57 ITEMS</span>
										</div>
									</div>
								</li>
								<li>
									<div class="wrapp-cont-sub">
										<div class="foto-sub-menu"><img src="<?=$link?>images/foto/images/foto_sub_menu3.jpg"></div>
										<div class="info-sub">
											<p class="goods-name">Shoes</p>
											<span class="item-goods">57 ITEMS</span>
										</div>
									</div>
								</li>
								<li>
									<table>
										<tr>
											<td class="col-left">Boots</td>
											<td class="col-right">21 ITEMS</td>
										</tr>
										<tr>
											<td class="col-left">Ankle Boots</td>
											<td class="col-right">19</td>
										</tr>
										<tr>
											<td class="col-left">High Boots</td>
											<td class="col-right">38</td>
										</tr>
										<tr>
											<td class="col-left">Ballet Shoes</td>
											<td class="col-right">6</td>
										</tr>
										<tr>
											<td class="col-left">Moccasins</td>
											<td class="col-right">22</td>
										</tr>
									</table>
									<div class="more-catalogue">
										<a href="#">LOST MORE<br>IN OUR CATALOGUE
											<i class="icon-n fa fa-arrow-circle-right"></i>
										</a>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li><span><a href="about.html">BAGS </a></span>
					<li><span><a href="#">ACCESSORIES</a></span>
					<li class="yellow-line yellow-line0"><span><a href="#">ANTONIO BIAGGI WORLD</a></span></li>
					<li class="yellow-line yellow-line1"><span><a href="#"> STORES</a></span></li>
					<li class="yellow-line yellow-line2"><span><a href="#"> SALE</a></span></li>
				</ul>
				<div class="search">
					<form method="post">
						<fieldset>
							<input class="text-search" placeholder="SEARCH" type="text">
							<button type="submit" class="btn btn-search"></button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<!-- NAV (end)	 -->

		<!-- mb NAV (START)-->
		<div class="mobile-navigation-menu-back"></div>
		<div class="mobile-navigation-menu">
			<div class="wrapp-mob-menu">
				<div class="close-menu">
					<a href="#"></a>
				</div>
				<div class="mob-lang">
					<a href="#"><i class="globe"></i>POLAND(PLN)<i class="fa fa-angle-down"></i></a>
				</div>
				<ul>
					<li>
						<a href="#">WOMEN</a>
					</li>
					<li>
						<a href="#">MEN</a>
					</li>
					<li>
						<a href="#">BAGS</a>
					</li>
					<li class="visual-border">
						<a href="#">ACCESSORIES</a>
					</li>
					<li>
						<a href="#">ANTONIO BIAGGI WORLD</a>
					</li>
					<li>
						<a href="#">STORES</a>
					</li>
					<li>
						<a href="#">SALE</a>
					</li>
				</ul>
				<div class="wish-list"><span><a href="#"><i class="icon-star"></i>WISH LIST</a></span></div>
				<div class="login"><span><a href="#"> <i class="icon-user"></i>LOGIN</a></span></div>
			</div>
		</div>
		<div class="mobile-navigation">
			<div class="wrapper-mobile-navigation">
				<div class="open-menu"><a href="#"></a></div>
				<div class="logo"><a href="#"><img src="<?=$link?>images/foto/images/logo_text.png"></a></div>
				<div class="search"><a type="submit" class="btn btn-search"></a></div>
				<div class="bascet"><span><a href="#"><i class=""></i></a></span></div>
			</div>
		</div>
		<!-- mb NAV (END)-->
	</div>
</div>
<div id="wrapper">


	<div class="top-slider">
		<div class="wrapp-slider">
			<ul class="slider-home">
				<li class="slide-home-img">
					<div>
						<a href="#" class="foto-slide"><img src="<?=$link?>images/foto/images/pic0.jpg" style="width: 100%"></a>
					</div>
				</li>
				<li class="slide-home-img">
					<div>
						<a href="#" class="foto-slide"><img src="<?=$link?>images/foto/images/pic1.jpg" style="width: 100%"></a>
					</div>
				</li>
				<li class="slide-home-img">
					<div>
						<a href="#" class="foto-slide"><img src="<?=$link?>images/foto/images/pic2.jpg" style="width: 100%"></a>
					</div>
				</li>
				<li class="slide-home-img">
					<div>
						<a href="#" class="foto-slide"><img src="<?=$link?>images/foto/images/pic3.jpg" style="width: 100%"></a>
					</div>
				</li>
			</ul>
			<ul class="switch">
				<li class="slider-home-point active"></li>
				<li class="slider-home-point"></li>
				<li class="slider-home-point"></li>
				<li class="slider-home-point"></li>
			</ul>
			<div class="slider-left-arrow"></div>
			<div class="slider-right-arrow"></div>
		</div>
	</div>
	<div class="catalog-info-container clearfix">
		<div class="wrap-leftcont">
			<div class=" buy-now">
				<a href=""><img src="<?=$link?>images/foto/images/promo_foto1.png"></a>
			</div>
			<div class="fashion">
				<a href=""><img src="<?=$link?>images/foto/images/bg_promo1.gif"></a>
			</div>

			<div class="ferst-choise">
				<a href=""><img src="<?=$link?>images/foto/images/promo_foto3.png"></a>
			</div>
		</div>
		<div class="lookbook">
			<a href=""><img src="<?=$link?>images/foto/images/promo_foto2.png"></a>
		</div>

	</div>
	<div class="popular-product-items-container">
		<h3 class="name-line"><a href="#" class="active">FOR HIM</a>Popular Items<a href="#" class="no-active">FOR HER</a></h3>
		<div class="popular-product-items clearfix">
			<div class="item ">
				<a href="#"><img src="<?=$link?>images/foto/images/schoose_woomen1.png"></a>
				<div class="wrapp-price">
					<p>Women Leather Shoes</p>
					<p class="price"><span class="cat-old-price">$560</span> <strong>$480</strong></p>
				</div>

			</div>
			<div class="item ">
				<a href="#"><img src="<?=$link?>images/foto/images/schoose_woomen1.png"></a>
				<div class="wrapp-price">
					<p>Women Leather Shoes</p>
					<p class="price"><strong>$480</strong></p>
				</div>
			</div>
			<div class="item ">
				<a href="#"><img src="<?=$link?>images/foto/images/foto-shoose3.jpg"></a>
				<div class="wrapp-price">
					<p>Women Leather Shoes</p>
					<p class="price"><strong>$480</strong></p>
				</div>
			</div>
			<div class="item ">
				<a href="#"><img src="<?=$link?>images/foto/images/foto-shoose2.jpg"></a>
				<div class="wrapp-price">
					<p>Women Leather Shoes</p>
					<p class="price"><strong>$480</strong></p>
				</div>
			</div>
			<div class="item ">
				<a href="#"><img src="<?=$link?>images/foto/images/schoose_woomen1.png"></a>
				<div class="wrapp-price">
					<p>Women Leather Shoes</p>
					<p class="price"><strong>$480</strong></p>
				</div>
			</div>
			<div class="item ">
				<a href="#"><img src="<?=$link?>images/foto/images/schoose_woomen1.png"></a>
				<div class="wrapp-price">
					<p>Women Leather Shoes</p>
					<p class="price"><strong>$480</strong></p>
				</div>
			</div>
			<div class="item ">
				<a href="#"><img src="<?=$link?>images/foto/images/schoose_woomen1.png"></a>
				<div class="wrapp-price">
					<p>Women Leather Shoes</p>
					<p class="price"><strong>$480</strong></p>
				</div>
			</div>
			<div class="item ">
				<a href="#"><img src="<?=$link?>images/foto/images/schoose_woomen1.png"></a>
				<div class="wrapp-price">
					<p>Women Leather Shoes</p>
					<p class="price"><strong>$480</strong></p>
				</div>
			</div>
		</div>
		<a  class="more-btn" href="#">see more</a>
	</div>

	<div class="model-foto-style">
		<div class="wrapp-model-foto-style clearfix">
			<div class="item-model frolova">
				<div class="foto-model ">
					<a href="#"><img src="<?=$link?>images/foto/images/face_woomen.jpg"></a>
				</div>
				<div class="name-model">
					<a href="#">How to Dress Well</a>
				</div>
			</div>
			<div class="item-model center-marg">
				<div class="foto-model">
					<a href="#"><img src="<?=$link?>images/foto/images/face_mean.jpg"></a>
				</div>
				<div class="name-model">
					<a href="#">Spring Glasses</a>
				</div>
			</div>
			<div class="item-model to-appear">
				<div class="foto-model">
					<a href="#"><img src="<?=$link?>images/foto/images/sport_gerl.png"></a>
				</div>
				<div class="name-model">
					<a href="#">Amazing Places<br>you must visit</a>
				</div>
			</div>
			<div class="takes-her">
				<div class="foto-model">
					<a href="#"><img src="<?=$link?>images/foto/images/foto_two_gerl.jpg"></a>
				</div>
				<div class="text-takes ">
					<p>Zoey Deutch takes her place in her family's hollywood legacy</p>
				</div>
			</div>
			<div class="item-model position-centr for-adapt">
				<div class="foto-model">
					<a href="#"><img src="<?=$link?>images/foto/images/sport_gerl.png"></a>
				</div>
				<div class="name-model">
					<a href="#">Amazing Places<br>you must visit</a>
				</div>
			</div>
		</div>
	</div>

	<div class="block-info">
		<div class="block-info-wrapp">
			<div class="block-info-left">
				<form method="post" class="block-serch">
					<label for="txt-serch">NEWSLETTER <span class="sleep-text">SUBSCRIPTION</span></label>
					<input type="email" id="txt-serch" placeholder="ENTER YOUR E-MAIL" class="text-serch">
					<input type="submit" class="btn-serch" value="SUBSCRIBE">
					<input type="submit" class="btn-serch sleep-btn" value="OK">
				</form>
			</div>
			<div class="block-social">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-instagram"></a>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<div class="content-footer">
		<div class="menu-futer">
			<ul class="futer-nav">
				<li class="activ-info-catalog"><span><a href="#">WOMEN</a></span></li>
				<li><span><a href="#">MEN</a></span></li>
				<li><span><a href="#">BAGS </a></span></li>
				<li><span><a href="#">ACCESSORIES</a></span></li>
				<li><span><a href="#">ANTONIO BIAGGI WORLD</a></span></li>
				<li><span><a href="#"> STORES</a></span></li>
				<li><span><a href="#"> SALE</a></span></li>
			</ul>
		</div>
		<div class="footer-content-wrapp">
			<div class="left-futer-content">
				<p class="title-head">Antonio Biaggi. О компании</p>
				<p class="cont-left-futer">European brand of footwear and accessories, who had since its inception in 2006, to win a strong position in the footwear market. Retail network includes more than 50 company stores, which operate successfully in Europe and Asia.</p>
			</div>
			<div class="right-futer-content clearfix">
				<div class="customer">
					<ul>
						<li class="title-list">ПОМОЩЬ ПОКУПАТЕЛЯМ</li>
						<li><a href="#">Описание работы с сайтом</a></li>
						<li><a href="#">Определить размер</a></li>
						<li><a href="#">Правила эксплуатации обуви</a></li>
						<li><a href="#">Доставка и  оплата</a></li>
						<li><a href="#">Гарантия, обмен, возврат</a></li>
						<li><a href="#">Пользовательское соглашение</a></li>
						<li><a href="#">Lookbooks</a></li>
					</ul>
				</div>
				<div class="contacts">
					<ul>
						<li class="title-list">КОНТАКТЫ</li></li>
						<li class="bottspace"><a href="#">Обслуживание Покупателей - Связаться с нами</a></li>
						<li class="foottel"><img src="<?=$link?>images/g_pages/Shape-295.png"> Горячая линия <a href="tel:0800301041">0 (800) 301-041</a></li>
						<li>Email <a href="mailto:shop@antoniobiaggi.com">shop@antoniobiaggi.com</a></li>
					</ul>
				</div>
				<div class="franching">
					<ul>
						<li class="title-list">ФРАНЧАЙЗИНГ</li>
						<li><a href="#">Лицензия</a></li>
						<li><a href="#">Наше предложение</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
