<?php
namespace Ari\Wordpress;

class Woocommerce {
    static public function is_installed() {
        return class_exists( 'Woocommerce' );
    }
}
