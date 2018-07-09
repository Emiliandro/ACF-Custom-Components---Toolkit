
<!-- CHAMADA CSS -->
	<!-- CSS SLICK -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>

	<!-- CSS SLIDE -->
	<style type="text/css">
		/* SLIDESHOW */

			#slide {
				cursor: grab;
			}

			#slideshows .slick-dots {
				margin-top: -4rem;
				display: flex;
				justify-content: center;
				margin-bottom: 0rem;
				z-index: 999;
			}

			#slideshows li {
				z-index: 999;
				margin-bottom: 0rem;
			}

			#slideshows .slick-active button {
				background-color: grey;
				opacity: .5;
			}

			#slideshows .slick-dots li {
				list-style: none;
				margin-bottom: 0rem;
			}

			#slideshows .slick-dots button {
				color: transparent;
				max-width: 10px;
				max-height: 10px;
				overflow: hidden;
				font-size: 0;
				padding: 5px;
				border-radius: 50%;
				margin-left: 10px;
				margin-bottom: 0rem;
			}

	</style>

<!-- JQUERIES -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- SLICK CAROUSEL -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

<!-- CHAMADA WORDPRESS -->

	<?php $slideshow = new WP_Query(array('post_type'=>'slideshow'));
	if ($slideshow->have_posts()){?>

	<div id="slideshows">

	<?php 
		while($slideshow->have_posts()){
		$slideshow->the_post();  
	?>

		<div id="slide" style="background-image: url(<?php the_field('imagem_para_responsivo'); ?>)">
				<a href=" <?php the_field('link_do_slide') ?>	"> <img src="<?php the_field('imagem_para_desktop'); ?>"> </a>
		</div>
		
	<?php } ?>
		</div>
	<?php } wp_reset_postdata(); ?>

<!-- CHAMADA DO SLICK -->
	<script type="text/javascript">
		$('#slideshows').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			arrows: false,
		});
	</script>