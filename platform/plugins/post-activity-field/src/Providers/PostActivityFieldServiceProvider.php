<?php

namespace Platform\PostActivityField\Providers;

use Platform\PostActivityField\Models\PostActivityField;
use Illuminate\Support\ServiceProvider;
use Platform\PostActivityField\Repositories\Caches\PostActivityFieldCacheDecorator;
use Platform\PostActivityField\Repositories\Eloquent\PostActivityFieldRepository;
use Platform\PostActivityField\Repositories\Interfaces\PostActivityFieldInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class PostActivityFieldServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(PostActivityFieldInterface::class, function () {
            return new PostActivityFieldCacheDecorator(new PostActivityFieldRepository(new PostActivityField));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/post-activity-field')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']); 

        Event::listen(RouteMatched::class, function () {
            // if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
            //    \Language::registerModule([PostActivityField::class]);
            // }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-post-activity-field',
                'priority'    => 5,
                'parent_id'   => 'cms-field-activities', 
                'name'        => 'Bài viết lĩnh vực hoạt động',
                'url'         => route('post-activity-field.index'),
                'permissions' => ['post-activity-field.index'],
            ]);
        });
        $this->app->booted(function () {
            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(PostActivityField::class)
                    ->expandRule('other', 'Model', 'model_name', function () {
                        return [
                            PostActivityField::class => __('Bài viết lĩnh vực hoạt động'),
                        ];
                    });
            }
        }); 
    }
}
