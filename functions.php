<?php 

    /* **********************************************************************\
             Template Name: functions.php
             Description: Adiciona funcionalidades ao Tema Wordpress     
    \************************************************************************/

    function fn_theme_style(){
        /******************************************\
                 Inclui os ficheiros de style    
        \******************************************/
        

        //google fonts
        wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Montserrat|Nunito|PT+Serif|Roboto&display=swap');


         //google material icons
         wp_enqueue_style('google_material_icons', '//fonts.googleapis.com/icon?family=Material+Icons');
        
        //google material symbols
         wp_enqueue_style('google_material_symbols', '//fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');

         //custom stylesheet
         wp_enqueue_style('custom-style',get_stylesheet_uri());

         // @media responsividade dos ficheiros css
         wp_register_style('media_responsive', get_template_directory_uri().'/assets/css/_media.css', array(), 1, 'all');
         wp_enqueue_style('media_responsive');

         //css do resto da página home
         wp_register_style('media_home', get_template_directory_uri().'/assets/css/_home.css', array(), 1, 'all');
         wp_enqueue_style('media_home');
        
         
         //css do resto da página home
         wp_register_style('promocao_css', get_template_directory_uri().'/assets/css/promocao.css', array(), 1, 'all');
         wp_enqueue_style('promocao_css');
        
         //css do resto da página sobre nós
         wp_register_style('sobrenos_css', get_template_directory_uri().'/assets/css/sobrenos.css', array(), 1, 'all');
         wp_enqueue_style('sobrenos_css');
        
         //css do resto da página contacte-nos
         wp_register_style('contactos_css', get_template_directory_uri().'/assets/css/contactos.css', array(), 1, 'all');
         wp_enqueue_style('contactos_css');
        
        //css do resto da página produto
         wp_register_style('produto_css', get_template_directory_uri().'/assets/css/produto.css', array(), 1, 'all');
         wp_enqueue_style('produto_css');
        
     }

    add_action('wp_enqueue_scripts', 'fn_theme_style');

    function fn_theme_scripts(){
         //home js 
         wp_register_script('home_js', get_template_directory_uri().'/assets/js/home.js', array(), 1, 1, 1); //get_theme_file_uri
         wp_enqueue_script('home_js');
        
        //home js 
         wp_register_script('produto_js', get_template_directory_uri().'/assets/js/product.js', array(), 1, 1, 1); //get_theme_file_uri
         wp_enqueue_script('produto_js');
        
         //default js
         wp_register_script('default_js', get_template_directory_uri().'/assets/js/default.js', array(), 1, 1, 1); //get_theme_file_uri
         wp_enqueue_script('default_js');
    }

    add_action('wp_enqueue_scripts', 'fn_theme_scripts');

    //adicionando novas funcionalidades ao tema do wordpress
    function fn_theme_supports(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array('search-form'));
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'fn_theme_supports');


    //register navigation menus
    /*function fn_nav_menu(){
        register_nav_menus(array(
            'top_menu'=>__('Top Menu', 'text_domain'),
            
        ));
    }

    add_action('init','fn_nav_menu');*/


    //custom images
    add_image_size('product_image_small', 300, 300, false);
    add_image_size('product_image_small', 700, 700, false);

    
    //Suporte de Menus
    add_theme_support('menus');

    //Registo de menus
    register_nav_menus(
        array(
            'top-menu' => __('Top Menu', 'theme'),
        )
    );

    function add_additional_class_on_li($classes, $item, $args){
        if(isset($args->add_li_class)){
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }

    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

    function add_link_atts($atts){
        $atts['class']='menu__btn';
        return $atts; 
    }

    add_filter('nav_menu_link_attributes', 'add_link_atts');
?>