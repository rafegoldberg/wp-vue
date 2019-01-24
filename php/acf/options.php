<?
/**configure ACF
 * options pages
 */
if( function_exists('acf_add_options_page') ){
  $pages = [
    [ "page_title" => 'Options',
      "menu_slug" => 'vue-options',
      "menu_title" => 'Site',
      "icon_url" => 'dashicons-admin-site',
      "update_button" => 'Update Site',
      "update_message" => 'Site settings saved!',
      "capability" => 'edit_posts',
      "position" => -1,
      "redirect" => false,
    ],
  ]; 
  array_map('acf_add_options_page', $pages);
}
?>