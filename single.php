<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cian_cun
 */
/*
	здесь выводится страница с отелем

*/
get_header(); ?>

<?php $args = array(
	'post_parent' => $post->ID,
	'post_type' => 'attachment',
	'orderby' => 'menu_order', // сортировка, menu_order - по выставленному в админке порядку, можно также сортировать по имени или дате добавления 
	'order' => 'ASC',
	'numberposts' => 5, // количество выводимых изображений
	'post_mime_type' => 'image'
);?>
<!---хлебные крошки-->
<div class="breadcrumbs-content">
	 <div class="container">
	 			<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	 </div>
</div>
 <!---хлебные крошки-->
<div class="product-content">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                    	
<?php if ( $images = get_children( $args ) ) {
	// если никаких изображений в пост не добавлено, то не выводим вообще ничего
	$number = 3; 
	echo '<div class="slider-product open-slider">';
	// не забудьте указать свои значения ширины (640) и высоты (480)
			foreach( $images as $image ) {
				//echo '<pre>'.var_dump($image).'</pre>'; для отладки
				echo '<div class="slide"><a href="'.$image->guid.'">'.wp_get_attachment_image( $image->ID, 'trueslider' ).'</a></div>';
			}
	echo '</div>'; 
}?>
                     <div class="similar-products">
                            <div class="title">相关软件</div>
                            <div class="block-products">
                                

									<?php get_template_part( 'template-parts/content-similar', 'similar' );?>

							
                            </div>
                            <a href="/category/hotels" class="similar-btn"><i class="i-search"></i>查看更多类似</a>
                       </div>
</div>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		
		endwhile; // End of the loop.*/
		?>


<?php
get_footer();
