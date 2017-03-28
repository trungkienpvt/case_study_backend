<?php

return [
    /*
    |--------------------------------------------------------------------------
    | The prefix that'll be used for the administration
    |--------------------------------------------------------------------------
    */
    'admin-prefix' => 'backend',

    /*
    |--------------------------------------------------------------------------
    | Location where your themes are located
    |--------------------------------------------------------------------------
    */
    'themes_path' => base_path() . '/Themes',

    /*
    |--------------------------------------------------------------------------
    | Which administration theme to use for the back end interface
    |--------------------------------------------------------------------------
    */
    'admin-theme' => 'Admin',
    'front-theme' => 'Frontend',

    /*
    |--------------------------------------------------------------------------
    | AdminLTE skin
    |--------------------------------------------------------------------------
    | You can customize the AdminLTE colors with this setting. The following
    | colors are available for you to use: skin-blue, skin-green,
    | skin-black, skin-purple, skin-red and skin-yellow.
    */
    'skin' => 'skin-blue',

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    | You can customise the Middleware that should be loaded.
    | The localizationRedirect middleware is automatically loaded for both
    | Backend and Frontend routes.
    */
    'middleware' => [
        'backend' => [
            'auth.admin',
            'permissions',
        ],
        'frontend' => [
        ],
        'api' => [
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Define which assets will be available through the asset manager
    |--------------------------------------------------------------------------
    | These assets are registered on the asset manager
    */
    'admin-assets' => [
        // Css
        'bootstrap.css' => ['theme' => 'assets/vendor/bootstrap/dist/css/bootstrap.min.css'],
        'font-awesome.css' => ['theme' => 'assets/vendor/font-awesome/css/font-awesome.min.css'],
        'alertify.core.css' => ['theme' => 'assets/css/vendor/alertify/alertify.core.css'],
        'alertify.default.css' => ['theme' => 'assets/css/vendor/alertify/alertify.default.css'],
        'dataTables.bootstrap.css' => ['theme' => 'assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css'],
        'icheck.blue.css' => ['theme' => 'assets/vendor/iCheck/skins/flat/blue.css'],
        'AdminLTE.css' => ['theme' => 'assets/vendor/admin-lte/dist/css/AdminLTE.css'],
        'AdminLTE.all.skins.css' => ['theme' => 'assets/vendor/admin-lte/dist/css/skins/_all-skins.min.css'],
        'asgard.css' => ['theme' => 'assets/css/asgard.css'],
        //'gridstack.css' => ['module' => 'dashboard:vendor/gridstack/dist/gridstack.min.css'],
        'gridstack.css' => ['module' => 'dashboard:gridstack/gridstack.min.css'],
        'daterangepicker.css' => ['theme' => 'assets/vendor/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css'],
        'selectize.css' => ['module' => 'core:vendor/selectize/dist/css/selectize.css'],
        'selectize-default.css' => ['module' => 'core:vendor/selectize/dist/css/selectize.default.css'],
        'animate.css' => ['theme' => 'assets/vendor/animate.css/animate.min.css'],
        'pace.css' => ['theme' => 'assets/vendor/admin-lte/plugins/pace/pace.min.css'],
        // Javascript
        'bootstrap.js' => ['theme' => 'assets/vendor/bootstrap/dist/js/bootstrap.min.js'],
        'mousetrap.js' => ['theme' => 'assets/js/vendor/mousetrap.min.js'],
        'alertify.js' => ['theme' => 'assets/js/vendor/alertify/alertify.js'],
        'icheck.js' => ['theme' => 'assets/vendor/iCheck/icheck.min.js'],
        'jquery.dataTables.js' => ['theme' => 'assets/vendor/datatables.net/js/jquery.dataTables.min.js'],
        'dataTables.bootstrap.js' => ['theme' => 'assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js'],
        'jquery.slug.js' => ['theme' => 'assets/js/vendor/jquery.slug.js'],
        'app.js' => ['theme' => 'assets/vendor/admin-lte/dist/js/app.js'],
        'keypressAction.js' => ['module' => 'core:assets/js/keypressAction.js'],
        'ckeditor.js' => ['theme' => 'assets/js/vendor/ckeditor/ckeditor.js'],
        'lodash.js' => ['module' => 'dashboard:vendor/lodash/lodash.min.js'],
        'jquery-ui-core.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/core.min.js'],
        'jquery-ui-widget.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/widget.min.js'],
        'jquery-ui-mouse.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/mouse.min.js'],
        'jquery-ui-draggable.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/draggable.min.js'],
        'jquery-ui-resizable.js' => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/resizable.min.js'],
        //'gridstack.js' => ['module' => 'dashboard:vendor/gridstack/dist/gridstack.min.js'],
        'gridstack.js' => ['module' => 'dashboard:gridstack/gridstack.min.js'],
        'daterangepicker.js' => ['theme' => 'assets/vendor/admin-lte/plugins/daterangepicker/daterangepicker.js'],
        'selectize.js' => ['module' => 'core:vendor/selectize/dist/js/standalone/selectize.min.js'],
        'sisyphus.js' => ['theme' => 'assets/vendor/sisyphus/sisyphus.min.js'],
        'main.js' => ['theme' => 'assets/js/main.js'],
        'chart.js' => ['theme' => 'assets/vendor/admin-lte/plugins/chartjs/Chart.js'],
        'pace.js' => ['theme' => 'assets/vendor/admin-lte/plugins/pace/pace.min.js'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Define which default assets will always be included in your pages
    | through the asset pipeline
    |--------------------------------------------------------------------------
    */
    'admin-required-assets' => [
        'css' => [
            'bootstrap.css',
            'font-awesome.css',
            'alertify.core.css',
            'alertify.default.css',
            'dataTables.bootstrap.css',
            'icheck.blue.css',
            'AdminLTE.css',
            'AdminLTE.all.skins.css',
            'animate.css',
            'pace.css',
            'asgard.css',
        ],
        'js' => [
            'bootstrap.js',
            'mousetrap.js',
            'alertify.js',
            'icheck.js',
            'jquery.dataTables.js',
            'dataTables.bootstrap.js',
            'jquery.slug.js',
            'keypressAction.js',
            'app.js',
            'pace.js',
            'main.js',
            'sisyphus.js',
        ],
    ],
];
