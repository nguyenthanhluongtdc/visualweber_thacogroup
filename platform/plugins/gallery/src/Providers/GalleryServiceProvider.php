<?php

namespace Platform\Gallery\Providers;

use Platform\Base\Supports\Helper;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Platform\Gallery\Facades\GalleryFacade;
use Platform\Gallery\Models\Gallery;
use Platform\Gallery\Models\GalleryMeta;
use Platform\Gallery\Repositories\Caches\GalleryCacheDecorator;
use Platform\Gallery\Repositories\Caches\GalleryMetaCacheDecorator;
use Platform\Gallery\Repositories\Eloquent\GalleryMetaRepository;
use Platform\Gallery\Repositories\Eloquent\GalleryRepository;
use Platform\Gallery\Repositories\Interfaces\GalleryInterface;
use Platform\Gallery\Repositories\Interfaces\GalleryMetaInterface;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Language;
use SeoHelper;
use SlugHelper;

class GalleryServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(GalleryInterface::class, function () {
            return new GalleryCacheDecorator(
                new GalleryRepository(new Gallery)
            );
        });

        $this->app->bind(GalleryMetaInterface::class, function () {
            return new GalleryMetaCacheDecorator(
                new GalleryMetaRepository(new GalleryMeta)
            );
        });

        Helper::autoload(__DIR__ . '/../../helpers');

        AliasLoader::getInstance()->alias('Gallery', GalleryFacade::class);

     
    }

    public function boot()
    {
        SlugHelper::registerModule(Gallery::class, 'Galleries');
        SlugHelper::setPrefix(Gallery::class, 'galleries');

        $this->setNamespace('plugins/gallery')
            ->loadAndPublishConfigurations(['general', 'permissions'])
            ->loadRoutes(['web'])
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->loadMigrations()
            ->publishAssets();

        $this->app->register(EventServiceProvider::class);

        Event::listen(RouteMatched::class, function () {
            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-gallery',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/gallery::gallery.menu_name',
                'icon'        => 'fa fa-camera',
                'url'         => route('galleries.index'),
                'permissions' => ['galleries.index'],
            ]);
        });

        $this->app->booted(function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                Language::registerModule([Gallery::class]);
            }

            SeoHelper::registerModule([Gallery::class]);

            $this->app->register(HookServiceProvider::class);
        });
    }
}
