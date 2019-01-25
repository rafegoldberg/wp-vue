<?#=Wordpress configuration
  #
  include "php/api/cors.php";
  include "php/wp/type-project.php";
  include "php/wp/tax-tools.php";
  include "php/wp/tax-roles.php";
  ?>

<?#=UI scripts & styles
  #
  function vue(){
    $DIST = "http://localhost:8080/";
    
    wp_enqueue_script( 'UiScript', "$DIST/app.js", [], false, true );
    wp_localize_script('UiScript','WP_API_Settings',[
      'endpoint' => esc_url_raw(rest_url()),
      'nonce' => wp_create_nonce('wp_rest')
    ]);
  }
  add_action( 'wp_enqueue_scripts', 'vue' );
  ?>