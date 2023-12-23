<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header">
			<div class="row flex content">
				<div class="logo-holder">
					<a href="home" class="h-logo"><img src="public/images/content/logo.png" alt="Logo"></a>
				</div>

				<div class="h-content flex">
					<div class="left">
						<nav>
							<a href="#" id="pull"><strong>MENU</strong></a>
							<ul>
								<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a>
								</li>
								<li <?php $this->helpers->isActiveMenu("services"); ?>><a
										href="<?php echo URL ?>services#content">SERVICES</a></li>
								<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a
										href="<?php echo URL ?>testimonials#content">TESTIMONIALS</a></li>
								<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
										href="<?php echo URL ?>gallery#content">CUSTOM CASTLE GALLERY</a></li>
								<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
										href="<?php echo URL ?>contact#content">CONTACT US</a></li>
							</ul>
						</nav>
					</div>

					<div class="right contact-info">
						<div class="phone-holder">
							<a href="tel:<?php $this->info("phone"); ?>">
								<div class="icon">
									<img src="public/images/content/hd-phone.png" class="icon">
								</div>
								<div class="info">
									<div class="label">Call Us</div>
									<div class="phone">
										<?php $this->info("phone"); ?>
									</div>
								</div>
							</a>
						</div>

						<div class="email-holder">
							<a href="tel:<?php $this->info("email"); ?>">
								<div class="icon">
									<img src="public/images/content/hd-email.png" class="icon">
								</div>
								<div class="info">
									<div class="label">Email Us</div>
									<div class="email">
										<?php $this->info("email"); ?>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- <?php //if($view == "home"):?> -->
	<div id="banner">
		<div class="img-holder">
			<img src="<?php echo URL ?>public/images/content/banner.png" alt="banner">
		</div>
		<div class="content-holder">
			<div class="row">
				<div class="foreword">A QUALITY HOME</div>
				<div class="title-like">UNIQUELY <span class="title-w">CUSTOMIZED</span> FOR YOU</div>
			</div>
		</div>
	</div>
	<!-- <?php //endif; ?> -->