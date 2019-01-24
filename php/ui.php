<?/**
   * Link UI Scripts & Styles
   */
  function LinkUiAssets(){

    $DIST = get_template_directory_uri() . "/dist";
    
    // wp_enqueue_style(  'UiStyles', "$DIST/filename.css"  );
    wp_enqueue_script( 'UiVendor', "$DIST/chunk-vendors.js", [], false, true );
    wp_enqueue_script( 'UiScript', "$DIST/app.js", [], false, true );
    
    wp_localize_script('UiScript','WP_API_Settings',[
      'endpoint' => esc_url_raw(rest_url()),
      'nonce' => wp_create_nonce('wp_rest')
      ]);
  
    }
  add_action( 'wp_enqueue_scripts', 'LinkUiAssets' );
  ?>