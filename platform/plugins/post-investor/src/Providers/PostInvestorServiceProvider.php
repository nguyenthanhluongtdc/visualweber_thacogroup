<?php

namespace Platform\PostInvestor\Providers;

use Platform\PostInvestor\Models\PostInvestor;
use Illuminate\Support\ServiceProvider;
use Platform\PostInvestor\Repositories\Caches\PostInvestorCacheDecorator;
use Platform\PostInvestor\Repositories\Eloquent\PostInvestorRepository;
use Platform\PostInvestor\Repositories\Interfaces\PostInvestorInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class PostInvestorServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(PostInvestorInterface::class, function () {
            return new PostInvestorCacheDecorator(new PostInvestorRepository(new PostInvestor));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/post-investor')
            ->loadAndPublishConfigurations(['permissions']) 
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
               \Language::registerModule([PostInvestor::class]);
            }

            dashboard_menu()
            ->registerItem([ 
                'id'          => 'cms-plugins-post-investor',
                'priority'    => 5,
                'parent_id'   => 'cms-plugins-investor-relations',
                'name'        => 'plugins/post-investor::post-investor.name',
                'icon'        => '',
                'url'         => route('post-investor.index'),
                'permissions' => ['post-investor.index'],
            ]);
        });


        $this->app->booted(function () {
            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(PostInvestor::class)
                    // ->registerRule('basic', __('Quan hệ cổ đông'), PostInvestor::class, function () {
                    //     return $this->app->make(PostInvestorInterface::class)->pluck('name', 'id');
                    // })
                    ->expandRule('other', 'Model', 'model_name', function () {
                        return [
                            PostInvestor::class => __('Bài viết quan hệ cổ đông'),
                        ];
                    });
            }
        });
         
    }
}
