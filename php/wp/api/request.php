<?
  /** 
   * make API requests internally
   */
function api_request( $path=false, $json=true ){
  # instantiate a request object
  $req = WP_REST_Request::from_url(api_get_path());
  
  # modify the request object:
  // $req->set_query_params([ 'per_page' => 12 ]);

  # make the request
  $res = rest_do_request($req);
  $ssr = rest_get_server();

  # render the requests response
  $data = $ssr->response_to_data($res, false);
  
  if( $json )
    return wp_json_encode($data);

  return $data;
}

function api_get_path( $path, $prefix='wp/v2' ){
  if( isArray($path) )
    $path = implode('/', $path);
    
  return rest_url($prefix, .$path);
}
?>