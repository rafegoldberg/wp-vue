<?#=link Vue scripts & styles
  function link_vue(){
    $dist = "http://localhost:8080/";
    
    wp_enqueue_script( 'UiScript', "$dist/app.js", [], false, true );
    wp_localize_script('UiScript','WP_API_Settings',[
      'endpoint'=> esc_url_raw(rest_url()),
      'nonce'=> wp_create_nonce('wp_rest')
    ]);
  }
  add_action( 'wp_enqueue_scripts', 'link_vue' );
  ?>