<div class="item-product">
	                   <a href="<?=$hotel->guid?>" class="item-link a-fix">
	                                  <div class="item-img">
	                                        <?=get_the_post_thumbnail($hotel->ID,'thumbnail');?>
	                                    </div>
	                                    <div class="item-content">
	                                        <div class="item-name"><?=$hotel->post_title?></div>
	                                             <div class="stars-rating">
		                                             <?php stars_hotel($meta->raiting_hostel,'<i class="i-star"></i>','<i class="i-star not-active"></i>');?>
                                        		</div>
	                                        <div class="item-btn">定下</div>
	                                        <div class="item-likes"><i class="i-like"></i>549</div>
	                                    </div>
	                                </a>
	                   <a href="<?=$hotel->guid?>" class="item-category a-fix">公寓式酒店</a>
 </div>
          