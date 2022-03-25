<?php
/**
 * Plugin Hello Kubdev 
 *
 * @package           PluginPackage
 * @author            Rogerio dos Santos Silva
 * @copyright         2022 Rogerio dos Santos Silva
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Hello Kubdev 
 * Description:       Plugin de exemplo
 * Version:           1.0.0
 * Author:            Rogerio dos Santos Silva
 * License:           GPL v2 or later
*/

add_shortcode('kubdev_logo', 'kubdev_logo_shortcode');
function kubdev_logo_shortcode( $atts = [], $content = null) {
    // do something to $content
    // always return
    return '<div><img src="" alt="" title=""/>01</div>';
}
