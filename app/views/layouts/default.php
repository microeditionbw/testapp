<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<?php Assets::load("css,cdn"); ?>
</head>
<body class="is-preload">

<header class="header-area">
            <div class="header-bottom transparent-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                            <div class="logo pt-39">
                                <a href="index.html"><img alt="" src="assets/img/logo/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul>
									<li><a href="http://testapp/">Главная</a></li>
                                        <li><a href="http://testapp/product/index/1">Товар</a></li>
                                        <li><a href="http://testapp/cart/">Корзина</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
									<li><a href="http://testapp/">Главная</a></li>
                                        <li><a href="http://testapp/product/index/1">Товар</a></li>
                                        <li><a href="http://testapp/cart/">Корзина</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
				<?php echo $content; ?>
				<footer class="footer-area">

<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="border-top-1 pt-17 pb-15">
					<div class="copyright text-center">
						<p>Copyright © All Right Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</footer>



		<!-- Scripts -->
		<?php Assets::load('js'); ?>

	</body>
</html>