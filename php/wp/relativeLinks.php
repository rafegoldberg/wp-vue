<?
function relativizeLinks( $URL ){
  $root = parse_url( home_url() )['path'];
  $path = wp_make_link_relative($URL);
  $path = str_replace($root,'',$path);
  return $path;
}

add_filter( 'post_link',       'relativizeLinks' ); // Post links
add_filter( 'post_type_link',  'relativizeLinks' ); // Custom post links
add_filter( 'page_link',       'relativizeLinks' ); // Page links
add_filter( 'attachment_link', 'relativizeLinks' ); // Attachment links
add_filter( 'get_shortlink',   'relativizeLinks' ); // Shortlinks

?>