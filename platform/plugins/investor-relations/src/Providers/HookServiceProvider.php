<?php

namespace Platform\InvestorRelations\Providers;

use Platform\InvestorRelations\Models\InvestorRelations;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;
use Platform\PostInvestor\Repositories\Interfaces\PostInvestorInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Menu;
use Eloquent;

class HookServiceProvider extends ServiceProvider
{
    public function boot()
    {

        if (defined('MENU_ACTION_SIDEBAR_OPTIONS')) {
            Menu::addMenuOptionModel(Category::class);
            Menu::addMenuOptionModel(Tag::class);
            add_action(MENU_ACTION_SIDEBAR_OPTIONS, [$this, 'registerMenuOptions'], 2);
            add_filter(BASE_FILTER_PUBLIC_SINGLE_DATA, [$this, 'handleSingleView'], 1);
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

    public function handleSingleView($slug)
    {
        if (!$slug instanceof Eloquent) {
            return $slug;
        }

        $condition = [
            'id'     => $slug->reference_id,
            'status' => BaseStatusEnum::PUBLISHED,
        ];

        $data = [];

        if($slug->reference_type == InvestorRelations::class) {
            $category = app(InvestorRelationsInterface::class)
            ->getFirstBy($condition, ['*'], ['slugable']);

            $data = app(PostInvestorInterface::class)->getByCategory($category->id, 6);
            
            return [
                'view'         => $category->template??'default',
                'default_view' => 'plugins/blog::themes.category',
                'data'         => compact('category', 'data'),
                'slug'         => $category->slug,
            ];
        }

        return $slug;
    }
}