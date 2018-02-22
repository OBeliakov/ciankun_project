<?php
///вынести отдельно в функцию в файл с functions.php:
	//Создание объекта мета_полей(доп полей для записей "Отели"):
$meta = new stdClass;
foreach( (array) get_post_meta( $post->ID ) as $k => $v ) $meta->$k = $v[0];

?>
	                        <div class="item-product">
                                <a href="<?=$post->guid?>" class="item-link">
                                    <div class="item-img">
                                         <?=get_the_post_thumbnail($post->ID,'thumbnail');?>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-name"><?=$post->post_title?></div>
                                        <div class="stars-rating">
                                           <?php stars_hotel($meta->raiting_hostel,'<i class="i-star"></i>','<i class="i-star not-active"></i>');?>
                                        </div>
                                        <div class="item-btn">定下</div>
                                        <div class="likes-rating"><i class="i-like"></i>549</div>
                                    </div>
                                </a>
                                <a href="<?=$post->guid?>" class="item-category">公寓式酒店</a>
                            </div>

							