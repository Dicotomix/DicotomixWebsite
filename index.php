<?php
$labels = [
	"en" => "English",
	"fr" => "Français",
	"es" => "Español",
	"pl" => "Polski",
	"de" => "Deutsch"];

	
$curr_lang = "en"; //put "en" by default

//if we selected a new language
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $labels))
{
	$curr_lang = htmlspecialchars($_GET['lang']);
	setcookie('lang', $curr_lang, time() + 365*24*3600, null, null, false, true);
}
//else if we already have a language in preferences we load it
else if(isset($_COOKIE['lang']) && array_key_exists($_COOKIE['lang'], $labels))
{
	$curr_lang = htmlspecialchars($_COOKIE['lang']);
}




$curr_lang_lab = $labels[$curr_lang];
require_once('lang/lang_'.$curr_lang.'.php');

$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$url = substr($uri_parts[0], 0, -1);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $dict['title_browser'] ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Dicotomix</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#project"><?= $dict['project'] ?></a>
                    </li>
					
					<li>
                        <a class="page-scroll" href="#gallery"><?= $dict['gallery'] ?></a>
                    </li>
					
                    <li>
                        <a class="page-scroll" href="#team"><?= $dict['team'] ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><?= $dict['contact'] ?></a>
                    </li>
					
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <img  src=<?php echo '"img/flags/flag_'.$curr_lang.'.png"'?> alt="<?= $curr_lang_lab ?>" /><span class="caret"></span></a>
					  <ul class="dropdown-menu">
					  <?php foreach($labels as $lang => $lab): ?>
						<li><a href= <?php echo '"'.$url.'?lang='.$lang.'"'; ?>><img  src= <?php echo '"img/flags/flag_'.$lang.'.png" alt="'.$lab.'"' ?> /></a></li>
					  <?php endforeach; ?>
					  </ul>
					</li>
					
                    <!--<li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?= $dict['header_title'] ?></h1>
                <hr>
                <p><?= $dict['header_subtitle'] ?></p>
                <a href="#project" class="btn btn-primary btn-xl page-scroll"><?= $dict['header_button'] ?></a>
            </div>
        </div>
    </header>

	<!-- PROJECT -->
	
    <section class="bg-lavender" id="project">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?= $dict['whatisdicotomix_title'] ?></h2>
                    <hr class="light">
                    <p><?= $dict['whatisdicotomix_content'] ?></p>
                    
					<!--<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>-->
                </div>
            </div>
        </div>
    </section>
	
	
	

	
	<!--
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

	end services -->
	
	 
	
    <section class="bg-lavender no-padding" id="gallery">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
               <!--<div class="col-lg-12 text-center">
                    <h2 class="section-heading">Gallery</h2>
                    <hr class="primary">
                </div>
				-->
				<div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                    </a>
                </div>
				
				<div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                    </a>
                </div>
				<div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                    </a>
                </div>
				
				<!--
				<div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
				-->
				
				
            </div>
        </div>
    </section>

	
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2><?= $dict['github_content'] ?></h2>
                <a href="http://github.com/Dicotomix" class="btn btn-default btn-xl sr-button"><?= $dict['github_button'] ?></a>
            </div>
        </div>
    </aside>

	
	<!-- Team -->
	
    <section class="bg-lavender" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?= $dict['team_title'] ?></h2>
                    <hr class="primary">
                    <p><?= $dict['team_content'] ?> <a href="http://www.ens-lyon.fr/">ENS de Lyon</a>.</p>
					
					
                    
					<!--<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>-->
                </div>
				
				<div class="col-lg-6 col-lg-offset-4">

					<ul>
						<li>Tristan Stérin</li>
						<li>Rémi Pellerin</li>
						<li>Fabrice Lécuyer</li>
						<li>Emile Hazard</li>
						<li>Emma Kerinec</li>
						<li>Nicolas Pinson</li>
						<li>Alexandre Martin</li>
						<li>Agniezska Slowik</li>
						<li>Paul Mangold</li>
						<li>Martin Guy</li>
					<ul>
                    
					<!--<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>-->
                </div>
				
            </div>
        </div>
    </section>
	
    <section class="bg-lavender" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?= $dict['contact_title'] ?></h2>
                    <hr class="primary">
                    <p><?= $dict['contact_content'] ?></p>
                </div>
                <!--
				<div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                -->
				<div class="col-lg-4 col-lg-offset-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:dicotomix@ens-lyon.fr">dicotomix@ens-lyon.fr</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
