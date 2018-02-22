<?php 
$categories = get_the_category($post->ID);
					if ($categories) {
					 $category_ids = array();
					 foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
					 $args=array(
					 'category__in' => $category_ids, // Сортировка производится по категориям
					 'orderby'=>'rand', // Условие сортировки рандом
					 'post__not_in' => array($post->ID),
					 'showposts'=>3, //Количество выводимых записей
					 'ignore_sticky_posts' => 1); // Запрещаем повторение ссылок
					 $my_query = new wp_query($args);
					 
					 
					if( $my_query->have_posts() ) {
					        while ($my_query->have_posts()) {
					            $my_query->the_post();
					            
					            
					            $meta = new stdClass;
					            
                                foreach( (array) get_post_meta( $post->ID ) as $k => $v ) $meta->$k = $v[0];
					        ?>
					  <div class="item-product similar-product">      
					       <a href="<?=the_permalink()?>" class="item-link">
                                     <div class="item-img">
                                           <?=get_the_post_thumbnail($post->ID,'thumbnail');?>
                                      </div>
                                        <div class="item-content">
                                            <div class="item-name"><?php the_title(); ?></div>
                                            <div class="stars-rating">
                                   <?php stars_hotel($meta->raiting_hostel,'<i class="i-star"></i>','<i class="i-star not-active"></i>');?>
                                            </div>
                                            <div class="item-btn">定下</div>
                                            <div class="likes-rating"><i class="i-like"></i>549</div>
                                       </div>
					        </a>
					    </div>
					        <?php
					       
					        }
					    }
					    
	wp_reset_query();
}