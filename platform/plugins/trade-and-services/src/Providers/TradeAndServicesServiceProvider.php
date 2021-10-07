<?php

namespace Platform\TradeAndServices\Providers;

use Platform\TradeAndServices\Models\TradeAndServices;
use Illuminate\Support\ServiceProvider;
use Platform\TradeAndServices\Repositories\Caches\TradeAndServicesCacheDecorator;
use Platform\TradeAndServices\Repositories\Eloquent\TradeAndServicesRepository;
use Platform\TradeAndServices\Repositories\Interfaces\TradeAndServicesInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class TradeAndServicesServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(TradeAndServicesInterface::class, function () {
            return new TradeAndServicesCacheDecorator(new TradeAndServicesRepository(new TradeAndServices));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/trade-and-services')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
               \Language::registerModule([TradeAndServices::class]);
            }

            dashboard_menu()
            ->registerItem([
                'id'          => 'cms-field-activities',
                'priority'    => 3,
                'parent_id'   => null, 
                'name'        => 'Lĩnh vực hoạt động',
                'icon'        => 'fas fa-chart-line',
            ])
            ->registerItem([
                'id'          => 'cms-plugins-trade-and-services',
                'priority'    => 5,
                'parent_id'   => 'cms-field-activities',
                'name'        => 'Thương mại và Dịch vụ',
                'url'         => route('trade-and-services.index'),
                'permissions' => ['trade-and-services.index'],
            ]);
        });

        $this->app->booted(function () {
            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(TradeAndServices::class)
                    ->registerRule('basic', __('Thương mại và dịch vụ'), TradeAndServices::class, function () {
                        return $this->app->make(TradeAndServicesInterface::class)->pluck('name', 'id');
                    })
                    ->expandRule('other', 'Model', 'model_name', function () {
                        return [
                            TradeAndServices::class => __('Thương mại và dịch vụ'),
                        ];
                    });
            }
        });
    }
}
