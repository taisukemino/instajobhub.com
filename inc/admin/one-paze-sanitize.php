<?php
    /**
     * SANITIZATION
     */
     
    function one_paze_sanitize_text($input){
        return esc_html($input);
    }
    
    function one_paze_sanitize_textarea($input){
        return wp_kses_post( force_balance_tags( $input ) );
    }
    
    function one_paze_sanitize_url($input){
        return esc_url($input);
    }
    
    function one_paze_sanitize_checkbox($input){
        if($input == 1){
            return 1;
        }else{
            return '';
        }
    }
    
    function one_paze_sanitize_page_select($input){
        $one_paze_page_lists = one_paze_page_lists();
        if(array_key_exists($input,$one_paze_page_lists)){
            return $input;
        }else{
            return '';
        }
    }
    
    function one_paze_sanitize_category_select($input){
        $one_paze_category_lists = one_paze_category_lists();
        if(array_key_exists($input,$one_paze_category_lists)){
            return $input;
        }else{
            return '';
        }
    }
    
    function one_paze_sanitize_bg_repeat($input){
        $bg_repeat = array(
            'no-repeat'  => __('No Repeat', 'one-paze'),
            'repeat'     => __('Tile', 'one-paze'),
            'repeat-x'   => __('Tile Horizontally', 'one-paze'),
            'repeat-y'   => __('Tile Vertically', 'one-paze'),
        );
        
        if(array_key_exists($input,$bg_repeat)){
            return $input;
        }else{
            return '';
        }
    }
    
    function one_paze_sanitize_bg_position($input){
        $bg_position = array(
            'left'       => __('Left', 'one-paze'),
            'center'     => __('Center', 'one-paze'),
            'right'      => __('Right', 'one-paze'),
        );
        
        if(array_key_exists($input,$bg_position)){
            return $input;
        }else{
            return '';
        }
    }
    
    function one_paze_sanitize_bg_attachment($input){
        $bg_attachment = array(
            'fixed'      => __('Fixed', 'one-paze'),
            'scroll'     => __('Scroll', 'one-paze'),
        );
        
        if(array_key_exists($input,$bg_attachment)){
            return $input;
        }else{
            return '';
        }
    }

    function one_paze_sanitize_bg_size($input) {
        $bg_size = array(
            'auto' => __('Auto', 'one-paze'),
            'cover' => __('Cover', 'one-paze'),
            'contain' => __('Contain', 'one-paze'),
        );

        if(array_key_exists($input, $bg_size)){
            return $input;
        }else{
            return '';
        }
    }
    
    function one_paze_sanitize_color_value($input) {
        return esc_html($input);
    }
    
    function one_paze_sanitize_overlay_direction($input) {
        $overlay = array(
            'top' => __('Top', 'one-paze'),
            'below' => __('Below', 'one-paze')
        );
        
        if(array_key_exists($input,$overlay)){
            return $input;
        }else{
            return '';
        }
    }
?>