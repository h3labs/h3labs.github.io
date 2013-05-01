<!DOCTYPE html>
<html lang="en">
  <head>
    <title>H3 Laboratories | El Paso, Texas - Makerspace/Hackerspace</title>
    <meta name="description" content="We are a makerspace located in El Paso, Texas. We offer space and tools for members to work on anything they want, from electronics to Chemistry." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="google-site-verification" content="pedrIXa-MlK_fA110zJj51xgm4VrjXOeBiuQMYTESHQ" />
    <!-- <meta name="viewport" content="width=590"> -->
    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/page-style.css">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Isotope Library -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/isotopecss.css">
    <!--Jotform -->
    <link href="https://secure.jotform.us/min/g=formCss?3.1.1592" rel="stylesheet" type="text/css" />
	<!--<link type="text/css" rel="stylesheet" href="https://secure.jotform.us/css/styles/nova.css?3.1.1592" />-->
  </head>
  <body>
  	<?php include_once("analyticstracking.php") ?>
  	<div class="container" id="header-container">
  		<div id="masthead">
  		<div id="introduction"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-retina.png" width="247px" height="52px" alt="H3 Laboratories"></div>
  		<div class="navbar hidden-phone" id="navigation-menu">
				<div class="navbar-inner" id="responsive-navbar">
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      				</a>
					<?php wp_nav_menu( array('menu' => 'Header Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-collapse hidden-phone' )); ?>
				</div>
		</div>
		<!-- Phone visible HTML -->
					<div class="navbar visible-phone" id="navigation-menu-phone">
  					<div class="navbar-inner">
  						<div class="container">
  							<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  								<span class="icon-bar"></span>
  								<span class="icon-bar"></span>
  								<span class="icon-bar"></span>
  							</a>
  							<!-- Be sure to leave the brand out there if you want it shown -->
  							<a class="brand" href="http://h3laboratories.com"><b><i>Main Menu</i></b></a>
  							<!-- Everything you want hidden at 940px or less, place within here -->
  							<div class="nav-collapse collapse">
  								<?php wp_nav_menu( array('menu' => 'Header Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-collapse' )); ?>
  							</div>
  						</div>
  					</div>
  					</div>
		<!-- ------------------ -->
		</div>
		</div>


<div class="container">
  		<div id="activities-descr">
  			<div id="descr-title"><h1>El Paso's Makerspace</h1></div>
  			<div id="descr-text"><h3>What interests you?</h3></div>
  			<div class="container" id="mailing-list-header">
  				<h3>Sign up to our mailing list!</h3>
  				<?php get_template_part( 'list-part' ); ?>
  			</div>
  			<div id="filters">
  				<!--<div id="filter-title">Filters</div>-->
  				<ul id="filter-elements" class="inline">
  					<li><a href="#" data-filter=".electronics"><i class="icon-tag"></i> Electronics</a></li>
  					<li><a href="#" data-filter=".outdoor"><i class="icon-tag"></i> Outdoors</a></li>
  					<li><a href="#" data-filter=".ham"><i class="icon-tag"></i> Radio</a></li>
  					<li><a href="#" data-filter=".chemistry"><i class="icon-tag"></i> Chemistry</a></li>
  					<li><a href="#" data-filter="*"><i class="icon-tag"></i> Show All</a></li>
  				</ul>
  			</div>
  		</div>
  		<div class="container" style="padding-top: 10px; padding-bottom: 10px;"><span class="alert alert-error">The Hackerspace will be closed today.</span></div>
  		<div id="main-body-wrapper" class="cf">
  			<div id="tile-wrapper" class="cf">
  				<?php query_posts(array('showposts' => 20, 'orderby' => 'desc', 'category_name' => 'interests')); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
				<?php $video_thumb = get_post_meta($post->ID, "Video_section", true); ?>
				<div class="tile cf <?php echo $card_id; ?>" id="element-<?php get_the_ID(); ?>">
				<?php if ($video_thumb) { ?>
				<div><a href="<?php the_permalink(); ?>"><?php echo $video_thumb; ?></a></div>
				<?php } else { ?>
  					<div><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a></div>
						<?php } ?>
  					<div class="tile-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  					<div class="tile-description"><?php the_excerpt(); ?></div>
  					<?php edit_post_link('Edit'); ?>
  				</div>
  				<?php endwhile; else: ?>
				<?php endif; ?>
  			</div>
  		</div>
  		<div><div class="navigation"><p><?php posts_nav_link(); ?></p></div></div>
</div>
<?php get_footer(); ?>
