<?php

/*
    Plugin Name: Wpt Variation Addon
    Description: New feature for product table     
    Plugin URI: hannan.me
    Author: Hannan
    Author URI: hannan.me
    Version: 1.0
    Text Domain: wptvariation
    
*/




/* Add new column type here */
if( !function_exists('display_variation_column')){
    function display_variation_column($new_column_type){
       // var_dump($new_column_type);
       $new_column_type["each_variation"] = __("Each Variation","wptvariation");
       return $new_column_type;
    }
}
add_filter('wpto_addnew_col_arr','display_variation_column',666,1);

/* add each file for each variation column*/
if( !function_exists('add_each_variation_item')){
    function add_each_variation_item($v_file){
        $v_file = __DIR__ .'/items/each-variation-item.php'; 
        return $v_file;
    }
}
add_filter('wpto_template_loc_type_each_variation','add_each_variation_item',999,1);