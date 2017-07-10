<?php

/*
 * define all the premium layouts
 *
 */

if ( ! defined( 'ABSPATH' ) ) { exit; } # exit if accessed directly

class Ppremium_Layout extends Playouts_Admin_Layout {

    function init() {

        $this->id = 'bw_premium_layout';
        $this->name = esc_html__( 'Premium Element', 'peenapo-layouts-txd' );
        $this->layout_view = 'row';
        $this->category = array( 'premium' => __( 'Premium', 'peenapo-layouts-txd' ) );
        $this->image = PPREMIUM_URL . 'assets/images/dummy.png';

    }

    static function output() {
        return '[bw_row row_layout="full" background="color" bg_color="#111111" overlay_bg_second="#f5f5f5" overlay_direction="top right" overlay_opacity="50" vertical_alignment="center" enable_static_height="1" static_height="100"][bw_column overlay_bg_second="#f5f5f5" overlay_opacity="50"][bw_image_slider slide_width="50" spacing="25" thumbnail_size="large" adaptive_height="1" free="1" group_slides="2" autoplay="4000" stop_autoplay_hover="1" pagination_enable="1" infinite="1" invert_color="1" attraction="0.025" friction="0.28"][bw_image_slider_item image="%PLAYOUTS_PATH_ASSETS%images/placeholder-1920_1080-white.png"][/bw_image_slider_item][bw_image_slider_item image="%PLAYOUTS_PATH_ASSETS%images/placeholder-1920_1080-white.png"][/bw_image_slider_item][bw_image_slider_item image="%PLAYOUTS_PATH_ASSETS%images/placeholder-1920_1080-white.png"][/bw_image_slider_item][/bw_image_slider][/bw_column][/bw_row]';
    }
}
new Ppremium_Layout;
