<?php

namespace AXP\FileParser;

use Illuminate\Support\ServiceProvider;

/***
 * Class FileParserServiceProvider
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser
 */
class FileParserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('FileParser', function() {
            return new FileParser;
        });
    }
}