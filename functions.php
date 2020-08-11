<?php

function fmx_custom_menu() {
  register_nav_menu('fmx-custom-menu',__( 'FM Express Custom Menu' ));
}
add_action( 'init', 'fmx_custom_menu' );