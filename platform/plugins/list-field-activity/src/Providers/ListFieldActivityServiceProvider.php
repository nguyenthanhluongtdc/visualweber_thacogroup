<?php

namespace Platform\ListFieldActivity\Providers;

use Platform\ListFieldActivity\Models\ListFieldActivity;
use Illuminate\Support\ServiceProvider;
use Platform\ListFieldActivity\Repositories\Caches\ListFieldActivityCacheDecorator;
use Platform\ListFieldActivity\Repositories\Eloquent\ListFieldActivityRepository;
use Platform\ListFieldActivity\Repositories\Interfaces\ListFieldActivityInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class ListFieldActivityServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ListFieldActivityInterface::class, function () {
            return new ListFieldActivityCacheDecorator(new ListFieldActivityRepository(new ListFieldActivity));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }
    /**
     * Register sidebar options in menu
     * @throws Throwable
     */
    public function registerMenuOptions()
    {
        if (\Auth::user()->hasPermission('field-activities.index')) {
            \Menu::registerMenuOptions(ListFieldActivity::class, trans('Lĩnh vực hoạt động'));
        }
    }
    public function boot()
    {
          
    

        $this->setNamespace('plugins/list-field-activity')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);
 
        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
               \Language::registerModule([ListFieldActivity::class]);
            }
            if (defined('MENU_ACTION_SIDEBAR_OPTIONS')) {
                \Menu::addMenuOptionModel(ListFieldActivity::class);
                add_action(MENU_ACTION_SIDEBAR_OPTIONS, [$this, 'registerMenuOptions'], 10);
            }
            \Menu::addMenuLocation('field-activities', 'field-activities');
            dashboard_menu()
            ->registerItem([ 
                'id'          => 'cms-field-activities',
                'priority'    => 5,  
                'parent_id'   => null, 
                'name'        => 'Lĩnh vực hoạt động',
                'icon'        => 'fas fa-chart-line',
                'url'         => route('investor-relations.index'),
                'permissions' => ['investor-relations.index'],
            ])
            ->registerItem([
                'id'          => 'cms-plugins-list-field-activity',
                'priority'    => 5,
                'parent_id'   => 'cms-field-activities',
                'name'        => 'Danh sách các lĩnh vực',
                'url'         => route('list-field-activity.index'),
                'permissions' => ['list-field-activity.index'],
            ]);
        }); 
        // $this->app->register(HookServiceProvider::class);
         
       
        \SlugHelper::registerModule(ListFieldActivity::class);
        \SlugHelper::setPrefix(ListFieldActivity::class, 'linh-vuc-hoat-dong');
        \SeoHelper::registerModule(ListFieldActivity::class);

        $this->app->booted(function () {
            if (defined('CUSTOM_FIELD_MODULE_SCREEN_NAME')) {
                \CustomField::registerModule(ListFieldActivity::class)
                    ->expandRule('other', 'Model', 'model_name', function () {
                        return [
                            ListFieldActivity::class => __('Danh sách các lĩnh vực'),
                        ];
                    });
            }
        });
         
    }
}
