<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nhomb
 */

get_header();
?>

	<main id="primary" class="site-main container">

		<section class="error-404 not-found">
			

			<div class="page-content">
				

					

<div class="module-404 ">
    <div class="content">
        <div class="m404">
		<header class="page-header">
				<h3 class="title404"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nhomb' ); ?></h1>
			</header><!-- .page-header -->
            <hr>
            <p>Sorry, but nothing matched your search terms. Please try again with some different keywords. </p>
            <div class="search">
                <div class="hr"> </div>

                <div class="search-ip">
				<?php
					get_search_form();

					
					?>
                </div>
            </div>
        </div>
    </div>
</div>		

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
