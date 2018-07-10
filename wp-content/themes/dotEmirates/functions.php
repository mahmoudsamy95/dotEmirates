<?php
/*
**wp_enqueue_style()
**
*/
require_once('wp_bootstrap_navwalker.php');
//Add featured images support
add_theme_support('post-thumbnails');
function KVRD2_resources_style()
{

    wp_enqueue_style('boilerplate', get_template_directory_uri() . '/assets/css/boilerplate.css');
    wp_enqueue_style('mygrid', get_template_directory_uri() . '/assets/css/mygrid.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    
    wp_register_script('respond', get_template_directory_uri() . '/assets/js/respond.min.js',array(), false, true);//register a new jQuery in footer
    wp_register_script('jQuery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);// true 3lshan y7ot l scripts fl akher msh fl header.
    wp_register_script('my-script', get_template_directory_uri() . '/assets/js/myscript.js', array(), false, true);
    wp_register_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array(), false, true);
   
    wp_enqueue_script('respond');
    wp_enqueue_script('jQuery');
    wp_enqueue_script('my-script');
    wp_enqueue_script('flexslider');
    

}
function dotemirates_admin_menu(){
    add_menu_page(
        'dotemirates theme optisons',
        'Theme Options',
        'edit_theme_options',
        'dotemirates_theme_opts',
        'dotemirates_theme_opts_page'
    );
}

function dotemirates_theme_opts_page(){
    $theme_opts = get_option('de_opts');
    ?>
    <div class="wrap">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h3 class="panel-title"><?php _e('DotEmirates Theme Settings','de') ?></h3>
            </div>
            <div class="panel-body">
               <?php if(isset($_GET['status']) && $_GET['status'] == 1){
        ?>
        <div class="alert alert-success">Success!!</div>
        <?php 
    } ?>
                <form method="post" action="admin-post.php">
                   <input type="hidden" name="action" value="de_save_options">
                   <?php wp_nonce_field('de_options_verify'); ?>
                    <div class="form-group">
                        <label><?php _e('Twitter','de');?></label>
                        <input type="text" class="form-control" name="de_inputTwitter" value="<?php echo $theme_opts['twitter']; ?>">
                    </div>
                     <div class="form-group">
                        <label><?php _e('Facebook','de');?></label>
                        <input type="text" class="form-control" name="de_inputFacebook" value="<?php echo $theme_opts['facebook']; ?>">
                    </div>
                     <div class="form-group">
                        <label><?php _e('Telegram','de');?></label>
                        <input type="text" class="form-control" name="de_inputTelegram" value="<?php echo $theme_opts['telegram']; ?>">

                    </div>
                    <div class="input-group"><div type="text" class="form-control" placeholder="Logo Image" name="de_inputLogoImg"></div>
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" id="de_uploadLogoImgBtn">Upload</button>
                        </span></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    
    
    <?php
}


function de_activate(){
    if(version_compare(get_bloginfo('version'),'4.2','<')){
        wp_die(__('you must have a minimum version of 4.2 to use this theme'));
    }
    $theme_opts  = get_options('de_opts');

    if(!$theme_opts){
        $opts  =  array(
                'facebook'  =>  '',
            'twitter'  =>  '',
            'logo_img'  =>  ''
        );
        add_options('de_opts' , $opts);
    }
}

function dotemirates_admin_init(){
    add_action('admin_enqueue_scripts', 'dotemirates_admin_enqueue');
    add_action('admin_post_de_save_options', 'de_save_options');
}

function dotemirates_admin_enqueue(){
    if(!isset($_GET['page'])||$_GET['page']!="dotemirates_theme_opts"){
        return;
    }
        wp_enqueue_style('de_bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
        wp_register_script('de_options', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
        wp_register_script('options', get_template_directory_uri() . '/js/options.js', array(), false, true);
        wp_enqueue_media();

        wp_enqueue_script('de_options');
        wp_enqueue_script('options');
}

function de_save_options(){
   if(!current_user_can('edit_theme_options')){
       wp_die(__('you are not allowed to use this page'));
   }
    check_admin_referer('de_options_verify');
    
    $opts  =  get_option('de_opts');
    $opts['twitter']  =  sanitize_text_field($_POST['de_inputTwitter']);
    $opts['facebook']  =  sanitize_text_field($_POST['de_inputFacebook']);
    $opts['telegram']  =  sanitize_text_field($_POST['de_inputTelegram']);

    update_option('de_opts', $opts);
    wp_redirect(admin_url('admin.php?page=dotemirates_theme_opts&status=1'));
}



/*
**Add custome menu
**
*/

function dotemirates_register_custom_menu(){
    register_nav_menus(array(
        'dotemirates-menu' => 'Navigation Bar',
        'footer-menu' => 'Footer Menu'
    ));
}
function dotEm_nav_menu(){
    wp_nav_menu(array(
        'menu_class'     => 'clearfix',
        'container'  => false,
        'walker'  => new WP_Bootstrap_Navwalker
    ));
}
/*wp_nav_menu();*/

add_action('wp_enqueue_scripts', 'KVRD2_resources_style');
add_action('admin_menu', 'dotemirates_admin_menu');
add_action('admin_init', 'dotemirates_admin_init');
add_action('after_switch_theme', 'de_activate');

//add_action('init', 'dotemirates_register_custom_menu');