<?php
/*
  выводится все города каторые относятся к родительской рубрики - ГОРОДА

*/
$categories = get_categories( array( 'parent' => 17, 'hide_empty' => 0 ) );

//Для отладки:
/*
	echo '<pre>';
		var_dump($categories);
	echo '</pre>';
*/


	//Вывести города и ссылки, названия


//$posts = get_posts( $args );

//var_dump($posts);

/*
foreach($posts as $post){ setup_postdata($post);
    // формат вывода
}

*/


foreach($categories as $cat_item){
	
	echo "<div><a href='".$cat_item->slug."'>".$cat_item->name.'</a></div>';
	
/*	$posts = array(
		'numberposts' => 3,
		'category'    => $cat_item->ID,
	//	'orderby'     => 'date',
		'order'       => 'DESC',
		'include'     => array(),
		'exclude'     => array(),
		'meta_key'    => '',
		'meta_value'  =>'',
		'post_type'   => 'post',
		'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
		);
		//global $post;
		
		//$myposts = get_posts($search);
		if($posts){
			foreach($posts as $post){
					setup_postdata($post);
					echo '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
			}
			
		}
		wp_reset_postdata();*/
}




