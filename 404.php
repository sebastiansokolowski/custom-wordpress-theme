<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Strona nie została znaleziona.', 'wp-bootstrap-starter' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Wygląda na to, że nie znaleziono nic w podanej lokalizacji. Spróbuj użyć wyszukiwarki.', 'wp-bootstrap-starter' ); ?></p>

					<?php
						get_search_form();


					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
