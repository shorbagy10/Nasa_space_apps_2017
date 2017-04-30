<?php
namespace Ari_Fancy_Lightbox;

use Ari\App\Installer as Ari_Installer;
use Ari_Fancy_Lightbox\Helpers\Settings as Settings;

class Installer extends Ari_Installer {
    function __construct( $options = array() ) {
        if ( ! isset( $options['installed_version'] ) ) {
            $installed_version = get_option( ARIFANCYLIGHTBOX_VERSION );

            if ( false !== $installed_version) {
                $options['installed_version'] = $installed_version;
            }
        }

        if ( ! isset( $options['version'] ) ) {
            $options['version'] = ARIFANCYLIGHTBOX_VERSION;
        }

        parent::__construct( $options );
    }

    private function init() {
    }

    public function run() {
        $this->init();
        $this->init_settings();

        if ( ! $this->run_versions_updates() ) {
            return false;
        }

        update_option( ARIFANCYLIGHTBOX_VERSION_OPTION, $this->options->version );

        return true;
    }

    private function init_settings() {
        if ( false !== get_option( ARIFANCYLIGHTBOX_SETTINGS_NAME ) )
            return ;

        add_option( ARIFANCYLIGHTBOX_SETTINGS_NAME, Settings::instance()->get_default_options() );
    }
}
