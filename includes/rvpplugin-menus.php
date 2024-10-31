<?php

function rvpplugin_settings_page_markup()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  include( RVPPLUGIN_DIR . 'templates/admin/settings-page.php');
}

function rvpplugin_settings_pages()
{
  add_menu_page(
    __( 'Recently Viewed Products Plugin', 'rvpplugin' ),   //page title
    __( 'Recently Viewed Products', 'rvpplugin' ), //menu title
    'manage_options',
    'rvpplugin',
    'rvpplugin_settings_page_markup',
    'dashicons-visibility',
    100
  );

}
add_action( 'admin_menu', 'rvpplugin_settings_pages' );
