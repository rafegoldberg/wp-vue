<?#=API Config
  #
  include "php/api/cors.php";
  /** 
   * @todo fix this to make initial, SSR-based API requests
   */// include "php/api/request.php";
  ?>
<?#=Types & Terms
  #
  include "php/type/project.php";
  include "php/term/tools.php";
  include "php/term/roles.php";
  ?>
<?#=Scripts & Styles
  #
  include "php/link-vue.php"
  ?>

<? 
/**
 * @abstract link stylesheets to whitelabel the WP admin 
 *//*
 * function wp_admin_styles(){
 *   $root = get_template_directory_uri();
 *   $file = 'admin.css';
 *   wp_register_style('ws_wp_css', "$root/$file", false, '1.0.0');
 *   wp_enqueue_style( 'ws_wp_css' );
 * }  
 * add_action('admin_enqueue_scripts', 'wp_admin_styles');
 */

/**
 * @abstract convert WP links from URLs to relative paths
 *//*
 * function relativizeLinks( $URL ){
 *   $root = parse_url( home_url() )['path'];
 *   $path = wp_make_link_relative($URL);
 *   $path = str_replace($root,'',$path);
 *   return $path;
 * }
 * add_filter( 'post_link',       'relativizeLinks' ); // Post links
 * add_filter( 'post_type_link',  'relativizeLinks' ); // Custom post links
 * add_filter( 'page_link',       'relativizeLinks' ); // Page links
 * add_filter( 'attachment_link', 'relativizeLinks' ); // Attachment links
 * add_filter( 'get_shortlink',   'relativizeLinks' ); // Shortlinks
 */
?>