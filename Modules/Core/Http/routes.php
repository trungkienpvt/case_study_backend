<?php

$lang = null;

if (App::environment() == 'local') {
    $lang = 'fr';
}
LaravelLocalization::setLocale($lang);
