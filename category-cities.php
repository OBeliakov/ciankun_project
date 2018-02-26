<?get_header();?>
<?php if ( have_posts() ) : ?>
       
<?=get_template_part( 'template-parts/content-cities', 'cities' );?>
                 		</div>
                 	<?php else:?>
                 		<p>Записей не найдено!</p>
                 	<?php endif;?>
<?get_footer();?>