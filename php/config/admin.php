<?
function wp_admin_styles(){
  $root = get_template_directory_uri();
  $file = 'admin.css';
  wp_register_style('ws_wp_css', "$root/$file", false, '1.0.0');
  wp_enqueue_style( 'ws_wp_css' );
}  
add_action('admin_enqueue_scripts', 'wp_admin_styles');
?>