<?php

namespace Azuriom\Plugin\McIcons\Providers;

use Azuriom\Extensions\Plugin\BaseRouteServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Factory;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function loadRoutes()
    {
        Route::prefix($this->plugin->id)
            ->middleware('web')
            ->name($this->plugin->id.'.')
            ->group(plugin_path($this->plugin->id.'/routes/web.php'));

        /**
         * @var Factory $view
         */
        $view = $this->app->get('view');
        $view->startPush('styles', sprintf("<link href='%s' rel='stylesheet'> \n", url('mc-icons/mc-icons.css')));
    }
}
