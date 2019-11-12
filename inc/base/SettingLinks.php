<?php

/**
 * Plugin Name: FireAuth Plugin
 * Plugin URI: http://www.dilan.me
 * Description: Plugin Firebase Authentication.
 * Author: Chatura Dilan
 * Author URI: http://www.dilan.me
 */

namespace Inc\Base;

class SettingLinks extends BaseController {

    public function register() {
        add_filter('plugin_action_links_'. $this->plugin_basename, array($this, 'settings_links'));
    }

    function settings_links($links) {
        array_push($links, '<a href="options-general.php?page=fireauth">Settings</a>');
        return $links;
    }
}