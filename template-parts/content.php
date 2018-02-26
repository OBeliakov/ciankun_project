<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cian_cun
 */
$meta = new stdClass;
foreach( (array) get_post_meta( $post->ID ) as $k => $v ) $meta->$k = $v[0];
/* 
  *function stars_hotel
  *@param str_mata_data принимает объект доп. поля
*/
?>
 <!--dynamic--> 
    <div class="col-7">
       <div class="main-info-product">
           <div class="info-product-top">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="main-title title">', '</h1>' );
		else :
			the_title( '<h2 class="main-title title"><a href="' .esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
        
	<div class="block-rating">
		<div class="stars-rating">
				<?php stars_hotel($meta->raiting_hostel,'<i class="i-star"></i>','<i class="i-star not-active"></i>');?>
		</div>
		<div class="likes-rating"><i class="i-like"></i><?=the_ratings_results($post->ID);?></div>
		</div>	
	<div class="address-product"><i class="i-map-point"></i><?=$meta->address;?></div>

		<div class="info-product-bottom">
			<div class="preface-text">
				<?php 
				//подсчитывает число строк
				$result = mb_strwidth($post->post_content) /2;?>
					<?if ($result<=0 || $result<=100 ):?>
							 <div class="text">
							 		<?=$post->post_content;?>
							 </div>
					<?endif?>
				    <?php
						//обрезает контент по байтово, тоесть с переносом, не ломает слова
						echo mb_strcut($post->post_content,0,$result);
				 	?>
			</div>
	 	 <div class="text">
		   <?php
		   		//выводит контент с того места где он был прерван:
		   		echo mb_strcut($post->post_content, $result);
			?>
		  </div>
	</div>
	
<!---форма обратной связи-->
                            <div class="product-btn">
                                <button type="button" class="feedback-btn" data-toggle="modal" data-target="#modalFeedback"><i class="i-feedback"></i>反馈</button>
                                <div class="likes-rating"><i class="i-like"></i>我喜欢它！</div>
                            </div>
                            <div class="modal fade" id="modalFeedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                	<div class = "modal-content">
                                    <?php echo do_shortcode( '[contact-form-7 id="39" title="Контактная форма 1"]' ); ?>
                                    </div>
                                </div>
                            </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




