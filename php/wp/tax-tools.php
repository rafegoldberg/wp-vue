<?register_taxonomy("tools", 'projects', [
  'description' => "Tools and tech.",
  'labels'      => [
    'name'          => "Tools",
    'singular_name' => "Tool",
    'add_new_item'  => "New tool",
    'all_items'     => "All tools",
  ],
  'public'             => true,
  'publicly_queryable' => true,
  'show_in_rest'       => true,
  // "meta_box_cb"        => false,
  // 'show_admin_column'  => false,
  // 'has_archive'        => false,
  'hierarchical'       => true,
  'show_in_quick_edit' => true,
])?>