<?php

get_header();
?>

<main class="error">
	<section class="decor">
		<div class="decor-top"></div>
	</section>
	<section class="error-404">
		<div class="container">
			<div class="error-404__content">
				<div class="error-404__content__header">
					<h1 class="header-title title-h2"><?php the_field('error_title', 'option'); ?></h1>
				</div>
				<div class="error-404__content__text">
					<p><?php the_field('error_text', 'option'); ?></p>
				</div>
				<?php 
				$link = get_field('button_link', 'option');
				if( $link ): 
					$link_url = $link['url'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a 
						class="primary-button button-text" 
						href="<?php echo esc_url( $link_url ); ?>" 
						target="<?php echo esc_attr( $link_target ); ?>">
						<?php the_field('button_text', 'option'); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</section>

</main> 

<?php
get_footer();
