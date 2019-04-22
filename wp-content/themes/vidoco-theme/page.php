<?php
get_header(); 
$post_id=0;
$title="";
$permalink="";
$excerpt="";
$featured_img="";
if(have_posts()){
	while (have_posts()) {
		the_post();                     
		$post_id= get_the_id();        
		$title=get_the_title(@$post_id);   
		$permalink=get_the_permalink( @$post_id );                               
		$excerpt=get_field("single_page_excerpt",@$post_id);    
		$featured_img=get_the_post_thumbnail_url(@$post_id, 'full');	            
	}
	wp_reset_postdata();
}
include get_template_directory()."/block/block-breadcrumb.php";
?>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-category-menu-product.php";?>
		</div>
		<div class="col-lg-9"></div>
	</div>
</div>
<?php
get_footer(); 
?>