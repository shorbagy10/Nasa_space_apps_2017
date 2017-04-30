<?php
namespace Ari_Fancy_Lightbox\Helpers;

use Ari\Wordpress\Settings as Settings_Base;
use Ari\Utils\Array_Helper as Array_Helper;
use Ari\Wordpress\Nextgen as Nextgen_Helper;

class Settings extends Settings_Base {
    protected $settings_group = ARIFANCYLIGHTBOX_SETTINGS_GROUP;

    protected $settings_name = ARIFANCYLIGHTBOX_SETTINGS_NAME;

    protected $default_settings = array(
        'convert' => array(
            'wp_gallery' => array(
                'convert' => true,

                'grouping' => true,
            ),

            'images' => array(
                'convert' => false,

                'post_grouping' => false,

                'titleFromExif' => false,

                'filenameToTitle' => false,

                'convertNameSmart' => false,
            ),

            'woocommerce' => array(
                'convert' => false,
            ),

            'nextgen' => array(
                'convert' => false,
            ),

            'youtube' => array(
                'convert' => false,
            ),

            'vimeo' => array(
                'convert' => false,
            ),

            'metacafe' => array(
                'convert' => false,
            ),

            'dailymotion' => array(
                'convert' => false,
            ),

            'vine' => array(
                'convert' => false,
            ),

            'instagram' => array(
                'convert' => false,
            ),

            'google_maps' => array(
                'convert' => false,

                'showMarker' => false,
            ),

            'links' => array(
                'convert' => false,
            ),

            'pdf' => array(
                'convert' => false,

                'internal' => array(
                    'convert' => true,

                    'viewer' => 'pdfjs',
                ),

                'external' => array(
                    'convert' => false,

                    'viewer' => 'iframe',
                ),
            ),
        ),

        'lightbox' => array(
            'speed' => 330,

            'loop' => true,

            //'opacity' => 'auto',

            'gutter' => 30,

            'infobar' => true,

            'buttons' => true,

            'slideShow' => true,

            'fullScreen' => true,

            'thumbs' => true,

            'closeBtn' => true,

            //'smallBtn' => 'auto',

            'image' => array(
                'protect' => false,
            ),

            'touch' => true,

            'keyboard' => true,

            'focus' => true,

            'closeClickOutside' => true,
        ),

        'style' => array(
            'custom' => '',

            'zIndex' => 200000,

            'overlay_opacity' => 0.87,

            'overlay_bgcolor' => '#0f0f11',

            'thumbs_bgcolor' => '#ffffff',
        ),

        'advanced' => array(
            'deregister_3rd_plugins' => false,
        )
    );

    protected function __construct() {
        $this->default_settings = apply_filters( 'ari-fancybox-default-settings', $this->default_settings );

        parent::__construct();
    }

    public function sanitize( $input, $defaults = false ) {
        $default_settings = $this->get_default_options();

        $defaults = Array_Helper::to_flat_array( $default_settings );
        $input = Array_Helper::to_complex_array( parent::sanitize( $input, $defaults ) );

        return $input;
    }

    public function get_client_settings( $unique = true ) {
        $settings = null;
        $default_settings = $this->get_default_options();

        if ( $unique ) {
            $settings = array(
                'lightbox' => (object) Array_Helper::get_unique_override_parameters( $default_settings['lightbox'], $this->get_option( 'lightbox' ) ),

                'convert' => (object) Array_Helper::get_unique_override_parameters( $default_settings['convert'], $this->get_option( 'convert' ) ),
            );
        } else {
            $settings = array(
                'lightbox' => $this->get_option( 'lightbox' ),

                'convert' => $this->get_option( 'convert' ),
            );
        }

        $settings['viewers'] = array(
            'pdfjs' => array(
                'url' => ARIFANCYLIGHTBOX_URL . 'assets/pdfjs/web/viewer.html',
            )
        );

        if ( Nextgen_Helper::is_installed_v2() ) {
            if ( ! isset( $settings['convert']->nextgen ) )
                $settings['convert']->nextgen = new \stdClass();

            $settings['convert']->nextgen->convert = true;
        }

        $settings['messages'] = array(
            'prev' => __( 'Previous', 'ari-fancy-lightbox' ),

            'next' => __( 'Next', 'ari-fancy-lightbox' ),

            'slideshow' => __( 'Slideshow (P)', 'ari-fancy-lightbox' ),

            'fullscreen' => __( 'Full screen (F)', 'ari-fancy-lightbox' ),

            'thumbs' => __( 'Thumbnails (G)', 'ari-fancy-lightbox' ),

            'close' => __( 'Close (Esc)', 'ari-fancy-lightbox' ),
        );

        return $settings;
    }

    public function get_custom_styles() {
        $styles = '';

        $custom_style = trim( $this->get_option( 'style.custom', '' ) );

        if ( $custom_style )
            $styles .= $custom_style;

        $zIndex = intval( $this->get_option( 'style.zIndex' ), 10 );
        $styles .= 'BODY .fancybox-container{z-index:' . $zIndex . '}';

        $overlay_opacity = floatval( $this->get_option( 'style.overlay_opacity' ) );
        $styles .= 'BODY .fancybox-container--ready .fancybox-bg{opacity:' . $overlay_opacity . '}';

        $overlay_bgcolor = $this->get_option( 'style.overlay_bgcolor' );
        if ( empty( $overlay_bgcolor ) )
            $overlay_bgcolor = 'transparent';

        $styles .= 'BODY .fancybox-bg {background-color:' . $overlay_bgcolor . '}';

        $thumbs_bgcolor = $this->get_option( 'style.thumbs_bgcolor' );
        if ( empty( $thumbs_bgcolor ) )
            $thumbs_bgcolor = 'transparent';

        $styles .= 'BODY .fancybox-thumbs {background-color:' . $thumbs_bgcolor . '}';

        return $styles;
    }
}
