<?php

namespace feliuTheme;

class Navigation {

    public static function nav_menus(): array {
        return [
            'main_menu'     => __( 'Main Menu', 'feliu-starter-theme' ),
            'sub_menu'      => __( 'Sub Menu', 'feliu-starter-theme' ),
            'footer_menu'   => __( 'Footer Menu', 'feliu-starter-theme' ),
        ];
    }

}
