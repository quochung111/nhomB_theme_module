<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nhomb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<section id="module_1">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact_bar_left">
                   <ul>
                       <li>
                            <a href="#">
                                <i class="fas fa-envelope"></i>support@himanshusofttech.com
                            </a>
                       </li>
                       <li>
                            <a href="#">
                            <i class="fas fa-phone-alt"></i>0123456789
                            </a>
                       </li>
                   </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_bar_right">
                    <ul class="sns-link">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-vimeo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
	<header id="masthead" class="site-header">
   <div class="site-branding">
      <div class="container">
         <div class="row">
            <div class="col-md-2">
               <?php
                  the_custom_logo();?>
            </div>
            <div class="col-md-8 text-center">
               <nav id="site-navigation" class="main-navigation">
                  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nhomb' ); ?></button>
                  <?php
                     wp_nav_menu(
                     	array(
                     		'theme_location' => 'menu-1',
                     		'menu_id'        => 'primary-menu',
                     	)
                     );
                     ?>
               </nav>
               <!-- #site-navigation -->
            </div>
            <div class="col-md-2">
               <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
            </div>
         </div>
      </div>
   </div>
   <!-- .site-branding -->
</header>
<!-- #masthead -->
	

	

	