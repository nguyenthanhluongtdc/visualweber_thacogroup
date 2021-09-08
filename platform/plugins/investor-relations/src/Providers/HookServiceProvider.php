<?php

namespace Platform\InvestorRelations\Providers;

use Platform\InvestorRelations\Models\InvestorRelations;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Menu;

class HookServiceProvider extends ServiceProvider
{
    public function boot()
    {

        if (defined('MENU_ACTION_SIDEBAR_OPTIONS')) {
            Menu::addMenuOptionModel(Category::class);
            Menu::addMenuOptionModel(Tag::class);
            add_action(MENU_ACTION_SIDEBAR_OPTIONS, [$this, 'registerMenuOptions'], 2);
        }

    }

     /**
     * Register sidebar options in menu
     * @throws Throwable
     */
    public function registerMenuOptions()
    {
        if (Auth::user()->hasPermission('categories.index')) {
            Menu::registerMenuOptions(InvestorRelations::class, trans('plugins/blog::categories.menu')."Custom");
        }
    }
}
