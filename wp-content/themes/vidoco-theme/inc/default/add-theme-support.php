<?php
// -------------------------------
//  Load support
// -------------------------------
add_action('init','p_load_support');
function p_load_support(){
    register_nav_menus(
        array(
            "primary"    => __( "Primay Menu"),   
            "ve_chung_toi"    => __( "Về chúng tôi"),
            "thiet_ke_website"    => __( "Thiết kế website"),                  
            "seo_marketing"    => __( "SEO marketing"),
            "dich_vu"    => __( "Dịch vụ"),                                    
            "hop_tac"    => __( "Hợp tác"),
            "tro_giup"    => __( "Trợ giúp"),          
            "category_product"    => __( "Danh mục sản phẩm"),                                    
        )
    );

}
