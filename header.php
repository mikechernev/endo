<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="description" content="Endoscopic services">
<meta name="keywords" content="Ендоскопи, Ремонт на Ендоскопи, Endoscope, Medical Endoscope, Endoscopy, Endoskopie, Hysteroscope, Hysteroskop, Arthroskop, Arthroscope, Cystoscope, Cystoskop, Sinuskop, Sinoscope, Sinuscope, Laparoscope, Laparoskop, medical endoscope, medizinische endoskop, endoskopreparatur, endoscope service,  HNO-Endoskope, ENT Endoscope, Laparoscopy, Laparoskopie, Urologie, Gynecology, Gyn?kologie, Endoscope Service, ressektoskop, resektoskop, resectoscope, arthroscope sheath, Hysteroscope Sheath, Hysteroskopschaft, Instrumenten reparatur, repair of optical instruments, etn, ear nose and throat, Otoscope, Otoskop,  mini Arthroskop, mini Arthroscope, Bariatric endoscope, Magenbanding Endoskope, lange laparoskop, Laparoscope 450mm, MSI, Sch?elly, Karl Storz, Rischard Wolf, Xion medical, MGB, ASAP, Hipp , Olympus, Sorpo-comeg, Neomed, Rudolf medical, BAHO, Blajewsky, Endolook, distal end, dichtigkeistpr?fung, Spine Endoscope, contact Hysteroscope, Optic, Scope, telescope optic, OP endoscope,  OP laparoscope, wide angle endoscope, Larinx endoscope, Laringoscope, Laringoskop, Tiefensch?rfe, urology, optical instruments,  Kontakt Hysteroskop, Veterinary endoscopes, Vet scopes, endoskschaft, Hysteroskopie,   Laryngoscopy, Laryngoscopie, Urethrotomie, Urethrotomy, OP Endoskop, Surgery, Minimal Invasiv Surgery, Minimal Invasive Chirugie, MIS , mis, light guides, Ocular, Sapphire Windows, OEM Endoscope, Medizintechnikn, Minimale Chirurgie, Trkare , trocars, Seahth, Schaft, repairs, Alexander Goncharenko">
<meta name="author" content="Mike Chernev" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );
	
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/myscript.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css"><link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slider.css" type="text/css"><link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30567018-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description">Endoscopic services</h2>
			</hgroup>

			<nav id="access" role="navigation">
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array('sort_column' => 'ID') ); ?>
			</nav><!-- #access -->
			<div id="langs">
			<?php 
//				_e("<!--:en-->english text<!--:--><!--:bg-->german text<!--:-->"); 
				_e(qtrans_generateLanguageSelectCode("image"));
			?>
			</div>
	</header><!-- #branding -->


	<div id="main">
