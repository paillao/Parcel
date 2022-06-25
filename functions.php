<?php
/**
 * Enqueue scripts and styles.
 */

function parcel_scripts()
{
  wp_enqueue_style("style", get_template_directory_uri() . "/prod/scripts.css");

  wp_enqueue_script(
    "script",
    get_template_directory_uri() . "/prod/scripts.js",
    [],
    "1.0.0",
    true
  );
}
add_action("wp_enqueue_scripts", "parcel_scripts");
