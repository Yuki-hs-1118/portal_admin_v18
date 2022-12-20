<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

use Encore\Admin\Admin;
use Illuminate\Support\Facades\App;

Encore\Admin\Form::forget(['map', 'editor']);

switch (App::environment()) {
    case 'local':
    case 'staging':
        Admin::style(".content-wrapper {background-image: url('/vendor/laravel-admin/AdminLTE/dist/img/background-staging.png');}");
        break;
    case 'production':
        Admin::style(".content-wrapper {background-image: url('/vendor/laravel-admin/AdminLTE/dist/img/background.png');}");
        break;
    default:
        Admin::style(".content-wrapper {background-image: url('/vendor/laravel-admin/AdminLTE/dist/img/background.png');}");
}
