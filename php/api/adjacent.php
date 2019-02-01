<?
// Add filter to respond with next and previous post in post response.
function api_field_adjacent(){
  register_rest_field('post','adjacent',[
    'get_callback'=> function($post){
      global $post;

      $next = get_adjacent_post( true, '', false );
      $prev = get_adjacent_post( true, '', true  );
      $adj  = [];
  
      $adj['next'] = is_a($next,'WP_Post')
        ? [ "id"   => $next->ID,
            "slug" => $next->post_name ]
        : null;

      $adj['prev'] = is_a($prev,'WP_Post')
        ? [ "id"   => $prev->ID,
            "slug" => $prev->post_name ]
        : null;

      return $adj;
    },
    'schema'=> null,
  ]);
}
add_action( 'rest_api_init', 'api_field_adjacent' );
?>