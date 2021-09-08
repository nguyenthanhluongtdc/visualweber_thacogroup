<?php

namespace Platform\InvestorRelations\Providers;

use Platform\InvestorRelations\Models\InvestorRelations;
use Illuminate\Support\ServiceProvider;
use Platform\InvestorRelations\Repositories\Caches\InvestorRelationsCacheDecorator;
use Platform\InvestorRelations\Repositories\Eloquent\InvestorRelationsRepository;
use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class InvestorRelationsServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(InvestorRelationsInterface::class, function () {
            return new InvestorRelationsCacheDecorator(new InvestorRelationsRepository(new InvestorRelations));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/investor-relations')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            // if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
            //    \Language::registerModule([InvestorRelations::class]);
            // }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-investor-relations',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/investor-relations::investor-relations.name',
                'icon'        => 'fa fa-list',
                'url'         => route('investor-relations.index'),
                'permissions' => ['investor-relations.index'],
            ]);
        });
        
        $this->app->register(HookServiceProvider::class);
        \SlugHelper::registerModule(InvestorRelations::class);
        
    }
}
