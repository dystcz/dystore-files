<?php

namespace Modules\DystoreFiles\Domain\Files\Http\Routing;

use Dystcz\LunarApi\Routing\Contracts\RouteGroup as RouteGroupContract;
use Dystcz\LunarApi\Routing\RouteGroup;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use Modules\DystoreFiles\Domain\Files\Contracts\FilesController;

class FileRouteGroup extends RouteGroup implements RouteGroupContract
{
    /**
     * Register routes.
     */
    public function routes(): void
    {
        JsonApiRoute::server('v1')
            ->prefix('v1')
            ->resources(function ($server) {
                $server->resource($this->getPrefix(), FilesController::class)
                    ->only('')
                    ->actions('-actions', function ($actions) {
                        $actions->post('upload-file');
                        $actions->delete('delete-file');
                    });
            });
    }
}
