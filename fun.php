<?php
	include 'config.php';
	function social(){
		global $conn;
		$query=mysqli_query($conn,"select * from social_media_master where is_active = 0 ")or die(mysqli_error($conn));
		return $query;
	}

	function services($id){
		global $conn;
		$query=mysqli_query($conn,"select * from news_master where is_active = 0 AND id = ".$id)or die(mysqli_error($conn));
		return mysqli_fetch_assoc($query);
	}
	
	function about_us($id){
		global $conn;
		$query=mysqli_query($conn,"select * from about_us_page where is_active = 0 AND id = ".$id);
		return mysqli_fetch_assoc($query);
	}

	function conact_us($id){
		global $conn;
		$query=mysqli_query($conn,"select * from contact_master where is_active = 0 AND id = ".$id)or die(mysqli_error($conn));
		return mysqli_fetch_assoc($query);
	}

	
	function parent_menu($id){
		global $conn;
		$query=mysqli_query($conn,"select * from menu_master where is_active = 0 AND id = ".$id)or die(mysqli_error($conn));
		return mysqli_fetch_assoc($query);
	}

	function menu($p_id = null){
		global $conn;
		if(empty($p_id)){
			$menu = mysqli_query($conn,"select * from menu_master where is_deleted = 0 AND is_active = 0 AND level = 1 "); 
		}else{
			$menu = mysqli_query($conn,"select * from menu_master where is_deleted = 0 AND is_active = 0 AND parent_id =".$p_id); 
		}
		return $menu;
	}

	function getcategory_id($slag)  {
		global $conn;
		$slag = mysqli_real_escape_string($conn, $slag);
		$categorys = mysqli_query($conn,"select * from menu_master where  is_deleted = 0 AND is_active = 0 AND slag LIKE '$slag' ");
		$cat_id = mysqli_fetch_assoc($categorys);
		return $cat_id['id'] ?? '';
	}
	
	function getcategory_slug($cat_id)  {
		global $conn;
		$cat_id = mysqli_real_escape_string($conn, $cat_id);
		$categorys = mysqli_query($conn,"select * from menu_master where  is_deleted = 0 AND is_active = 0 AND id = '$cat_id' ");
		$cats = mysqli_fetch_assoc($categorys);
		return $cats['slag'] ?? '';
	}

	function getParentCategoryBySlug($slag) {
		global $conn;

		$slag = mysqli_real_escape_string($conn, $slag);

		$query = mysqli_query($conn, "
			SELECT p.name, p.slag
			FROM menu_master c
			LEFT JOIN menu_master p ON c.parent_id = p.id
			WHERE c.slag = '$slag'
			AND c.is_deleted = 0
			AND c.is_active = 0
		");

		return mysqli_fetch_assoc($query) ?: null;
	}

	function slider(){
		global $conn;
		$query=mysqli_query($conn,"select * from slider_master where is_active = 0 ");
		return $query;
	}

	function welcome_note($id){
		global $conn;
		$query=mysqli_query($conn,"select * from welcome_note_master where is_active = 0 AND id =".$id);
		return mysqli_fetch_assoc($query);
	}
	
	function home_product(){
		global $conn;
		$query=mysqli_query($conn,"select * from project_master where is_active = 0 ORDER BY RAND()  LIMIT 3 ");
		return $query;
	}
	function activite(){
		global $conn;
		$query=mysqli_query($conn,"select * from menu_master where is_active = 0 AND level = 2 ORDER BY RAND()  LIMIT 6 ");
		return $query;
	}
	
	function products_category($cat_id){
		global $conn;
		if(!empty($cat_id)){
			$cat_id = mysqli_real_escape_string($conn, $cat_id);
			$query=mysqli_query($conn,"select * from project_master where is_active = 0 AND category =".$cat_id);
		}else{
			$query=mysqli_query($conn,"select * from project_master where is_active = 0  ");
		}
		return $query;
	}
	
	function products($slug){
		global $conn;
		if(!empty($slug)){
			$slug = mysqli_real_escape_string($conn, $slug);
			$query=mysqli_query($conn,"select * from project_master where is_active = 0 AND name LIKE '$slug' ");
		}else{
			$query=mysqli_query($conn,"select * from project_master where is_active = 0  ");
		}
		return $query;
	}

	function gallery(){
		global $conn;
		$query=mysqli_query($conn,"select * from project_img where is_active = 0  ");
		return $query;
	}

	function client_logo(){
		global $conn;
		$query=mysqli_query($conn,"select * from event_master where is_active = 0  ");
		return $query;
	}
	function staff(){
		global $conn;
		$query=mysqli_query($conn,"select * from staff_master where is_active = 0  ");
		return $query;
	}
	
	function news(){
		global $conn;
		$query=mysqli_query($conn,"select * from review_master where is_active = 0  ORDER BY RAND()  LIMIT 5 ");
		return $query;
	}

	function limitWords($string, $word_limit = 10) {
		$words = explode(' ', strip_tags($string));
		if (count($words) <= $word_limit) {
			return implode(' ', $words);
		}
		return implode(' ', array_slice($words, 0, $word_limit)) . '...';
	}
	
?>