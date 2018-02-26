<?php
	/* Рубрика отели*/


?>
<?get_header();?>

<div class="content-products">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12">

                        <div class="title-products">流行服务</div>
                        <?php if ( have_posts() ) : ?>
                        <div class="block-products"> 
                        	<?php
                        	while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content-hotels', 'hotels' );
							endwhile;
							?>
                 		</div>
                 	<?php else:?>
                 		<p>Записей не найдено!</p>
                 	<?php endif;?>
           </div>
      </div>
  </div>
</div>
</div>
<?get_footer();?>
