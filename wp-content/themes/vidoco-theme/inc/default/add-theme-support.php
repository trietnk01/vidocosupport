<?php
// -------------------------------
//  Load support
// -------------------------------
add_action('init','p_load_support');
function p_load_support(){
    register_nav_menus(
        array(
            "primary"    => __( "Primay Menu"),
            "danh_muc_menu" => __("Danh mục"), 
            "lien_ket_nhanh_menu" => __("Liên kết nhanh"),  
            "category_product" => __("Danh mục sản phẩm"),                   
        )
    );

}
