<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php require_once('themeslug_walker_nav_menu.php');?>
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

  ?></title>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css" />


  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <script src="<?php bloginfo('template_url'); ?>/js/vendor/custom.modernizr.js"></script>

</head>
<body <?php body_class(); ?>>

  <div id="header-wrapper" class="row bezelled">
    <div id="header" class="inner-bezell small-13 columns">
      <div id="logo-wrapper" class="small-13 columns">
        <div id="logo" class=" small-9 small-centered small-centered large-7 large-offset-4 columns">
          <a href="">
            <?php
            if(is_front_page()){
              echo '<h1 class="heading-text">'.get_bloginfo('name').'</h1>';
            }else{
              echo '<h2 class="heading-text">'.get_bloginfo('name').'</h2>';
            }
            ?>
            <h2 class="subheading-text"><?php echo get_bloginfo('description'); ?></h2>
          </a>
        </div>
      </div>
      
      <div id="header-stuff" class="small-13 columns">
          <div id="header-menu" class="large-13 columns">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-header' ) ); ?>
          </div>
      </div>
    </div>
  </div>