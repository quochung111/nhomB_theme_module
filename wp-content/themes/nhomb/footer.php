<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nhomb
 */

?>

<section id="module_12">
    <footer>
        Copyright | All rights reserved
    </footer>
</section>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <script
        src='https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007714979/custom/page/hack-a-thon-3/masonry.min.min.js'>
    </script>
    <script
        src='https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007849180/custom/page/hack-a-thon-3/isotope.min.js'>
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js">
    </script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        dots: false,
        autoWidth: false,
        nav: true,
        autoplay: true,
        smartSpeed: 3000,
        autoplayTimeout: 7000,
        autoWidth: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
</body>
</html>
