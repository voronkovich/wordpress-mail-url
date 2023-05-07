<?php

/**
 * Plugin Name: Mailer DSN
 * Plugin URI:  https://github.com/PopArtDesign/wordpress-mailer-dsn
 * Description: Configure wp_mail() via environment variables (e.g. MAILER_DSN)
 * Version:     0.0.9
 * License:     MIT
 * License URI: https://github.com/PopArtDesign/wordpress-mailer-dsn/blob/main/LICENSE
 * Author:      Oleg Voronkovich <oleg-voronkovich@yandex.ru>
 * Author URI:  https://github.com/voronkovich
 */

defined('ABSPATH') || exit;

use PopArtDesign\WordPressMailerDSN\PHPMailerConfigurator;

add_action('phpmailer_init', function ($mailer) {
    static $configurator = null;

    $configurator = $configurator ?? new PHPMailerConfigurator();

    $configurator->configure($mailer);
});
