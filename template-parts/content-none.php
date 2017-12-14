<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Brak wyników', 'wp-bezpieczny-vat' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Gotowy aby opublikować pierwszy post? <a href="%1$s">Zacznij tutaj</a>.', 'wp-bezpieczny-vat' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Przepraszamy, niestety nic nie pasuje do kryteriów wyszukiwania. Spróbuj ponownie z innymi kryteriami.', 'wp-bezpieczny-vat' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'Wygląda na to, że nie możemy znaleźc tego czego szukasz. Skorzystaj z wyszukiwarki.', 'wp-bezpieczny-vat' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
