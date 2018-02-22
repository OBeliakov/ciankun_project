<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cian_cun
 */

?>
<?php
//функция формирует информационный блок:
function print_view_info_home($id){

	$post = get_post($id);

	return $post->post_content;
}
the_content(); // выводит контент страницы 

// параметры выборки отелей:
// todo: параметр вывести на главную
$args = [
	'catagory_id'=>6,
	'showposts'=>8,
];


//запрос на выборку:
$query = new WP_Query;
$hotels = $query->query($args);

?>
<div class="content-products">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-products">流行服务</div>
                        <div class="block-products">
                        <?foreach($hotels as $item):?>
	                        	<div class="item-product">
	                                <a href="<?=$item->guid?>" class="item-link a-fix">
	                                    <div class="item-img">
	                                        <?=get_the_post_thumbnail($item->ID,'thumbnail');?>
	                                    </div>
	                                    <div class="item-content">
	                                        <div class="item-name"><?=$item->post_title?></div>
	                                             <div class="stars-rating">
		                                             <?php stars_hotel($item->raiting_hostel,'<i class="i-star"></i>','<i class="i-star not-active"></i>');?>
                                        		</div>
	                                    	 <div class="item-btn">定下</div>
                                            <div class="likes-rating"><i class="i-like"></i>549</div>
	                                    </div>
	                                </a>
	                                <a href="<?=$item->guid?>" class="item-category a-fix">公寓式酒店</a>
	                           </div>
                        <?endforeach;?>
                        </div>
                        <div class="catalog-link">
                            <a href="category/hotels" class="a-fix"><i class="i-services"></i>基础设施</a>
                        </div>

                        </div>
                        </div>
                        </div>
                        </div>
<?php
echo print_view_info_home(22); // вывод блока о компании
?>
