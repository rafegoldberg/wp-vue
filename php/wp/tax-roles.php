<?register_taxonomy("roles", 'projects', [
  'description' => "Roles and positions.",
  'labels'      => [
    'name'          => "Roles",
    'singular_name' => "Role",
    'add_new_item'  => "New role",
    'all_items'     => "All roles",
  ],
  'public'             => true,
  'publicly_queryable' => true,
  'show_in_rest'       => true,
  // "meta_box_cb"        => false,
  // 'show_admin_column'  => false,
  // 'has_archive'        => false,
  'hierarchical'       => false,
  'show_in_quick_edit' => true,
])?>