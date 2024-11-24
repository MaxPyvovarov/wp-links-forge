<?php
/*
	Template Name: EN 404
*/
?>

<?php get_header();?>
		<main>
			<section class="not-found">
				<div class="container relative fade-in">
					<img
						class="not-found-img"
						src="<?php bloginfo('template_url');?>/assets/images/404.svg"
						alt="404 not found"
					/>
						<a href="<?php echo home_url('/')?>" class="return-home btn-primary">
							Go to home page
						</a>
					<img
						class="link-bg first"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>
					<img
						class="link-bg second"
						src="<?php bloginfo('template_url');?>/assets/icons/link-bg.svg"
						alt="background link"
					/>
				</div>
			</section>
		</main>
<?php get_footer();?>
