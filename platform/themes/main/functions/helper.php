<?php

use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Supports\SortItemsWithChildrenHelper;
use Platform\Blog\Repositories\Interfaces\CategoryInterface;
use Platform\Blog\Repositories\Interfaces\PostInterface;
use Platform\Blog\Repositories\Interfaces\TagInterface;
use Platform\Blog\Supports\PostFormat;
use Illuminate\Support\Arr;
use Platform\Kernel\Repositories\Interfaces\PostInterface as PostInterfaceCustom;

if (!function_exists('get_posts_type_by_category')) {
    /**
     * @param int $limit
     * @param array $excepts
     * @return \Illuminate\Support\Collection
     */
    function get_posts_type_by_category($categoryId, $paginate = 12, $format_type)
    {
        return app(PostInterfaceCustom::class)->getPostsTypeByCategory($categoryId, $paginate, $format_type);
    }
}

if (!function_exists('get_featured_posts')) {
    /**
     * @param int $limit
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_featured_posts($limit, array $with = [])
    {
        return app(PostInterface::class)->getFeatured($limit, $with);
    }
}

if (!function_exists('get_latest_posts')) {
    /**
     * @param int $limit
     * @param array $excepts
     * @return \Illuminate\Support\Collection
     */
    function get_latest_posts($limit, $excepts = [], array $with = [])
    {
        return app(PostInterface::class)->getListPostNonInList($excepts, $limit, $with);
    }
}

if (!function_exists('get_related_posts')) {
    /**
     * @param int $id
     * @param int $limit
     * @return \Illuminate\Support\Collection
     */
    function get_related_posts($id, $limit)
    {
        return app(PostInterface::class)->getRelated($id, $limit);
    }
}

if (!function_exists('get_posts_by_category')) {
    /**
     * @param int $categoryId
     * @param int $paginate
     * @param int $limit
     * @return \Illuminate\Support\Collection
     */
    function get_posts_by_category($categoryId, $paginate = 12, $limit = 0)
    {
        return app(PostInterface::class)->getByCategory($categoryId, $paginate, $limit);
    }
}

if (!function_exists('get_posts_by_tag')) {
    /**
     * @param string $slug
     * @param int $paginate
     * @return \Illuminate\Support\Collection
     */
    function get_posts_by_tag($slug, $paginate = 12)
    {
        return app(PostInterface::class)->getByTag($slug, $paginate);
    }
}

if (!function_exists('get_posts_by_user')) {
    /**
     * @param int $authorId
     * @param int $paginate
     * @return \Illuminate\Support\Collection
     */
    function get_posts_by_user($authorId, $paginate = 12)
    {
        return app(PostInterface::class)->getByUserId($authorId, $paginate);
    }
}

if (!function_exists('get_all_posts')) {
    /**
     * @param boolean $active
     * @param int $perPage
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_all_posts(
        $active = true,
        $perPage = 12,
        array $with = ['slugable', 'categories', 'categories.slugable', 'author']
    ) {
        return app(PostInterface::class)->getAllPosts($perPage, $active, $with);
    }
}

if (!function_exists('get_recent_posts')) {
    /**
     * @param int $limit
     * @return \Illuminate\Support\Collection
     */
    function get_recent_posts($limit)
    {
        return app(PostInterface::class)->getRecentPosts($limit);
    }
}

if (!function_exists('get_featured_categories')) {
    /**
     * @param int $limit
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_featured_categories($limit, array $with = [])
    {
        return app(CategoryInterface::class)->getFeaturedCategories($limit, $with);
    }
}


if (!function_exists('get_all_categories')) {
    /**
     * @param array $condition
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_all_categories(array $condition = [], $with = [])
    {
        return app(CategoryInterface::class)->getAllCategories($condition, $with);
    }
}

if (!function_exists('get_all_tags')) {
    /**
     * @param boolean $active
     * @return \Illuminate\Support\Collection
     */
    function get_all_tags($active = true)
    {
        return app(TagInterface::class)->getAllTags($active);
    }
}

if (!function_exists('get_popular_tags')) {
    /**
     * @param int $limit
     * @param array|string[] $with
     * @param array $withCount
     * @return \Illuminate\Support\Collection
     */
    function get_popular_tags($limit = 10, array $with = ['slugable'], array $withCount = ['posts'])
    {
        return app(TagInterface::class)->getPopularTags($limit, $with, $withCount);
    }
}

if (!function_exists('get_popular_posts')) {
    /**
     * @param integer $limit
     * @param array $args
     * @return \Illuminate\Support\Collection
     */
    function get_popular_posts($limit = 10, array $args = [])
    {
        return app(PostInterface::class)->getPopularPosts($limit, $args);
    }
}

if (!function_exists('get_popular_categories')) {
    /**
     * @param integer $limit
     * @param array $with
     * @param array $withCount
     * @return \Illuminate\Support\Collection
     */
    function get_popular_categories($limit = 10, array $with = ['slugable'], array $withCount = ['posts'])
    {
        return app(CategoryInterface::class)->getPopularCategories($limit, $with, $withCount);
    }
}

if (!function_exists('get_category_by_id')) {
    /**
     * @param integer $id
     * @return \Platform\Base\Models\BaseModel
     */
    function get_category_by_id($id)
    {
        return app(CategoryInterface::class)->getCategoryById($id);
    }
}

if (!function_exists('get_categories')) {
    /**
     * @param array $args
     * @return \Illuminate\Support\Collection|mixed
     */
    function get_categories(array $args = [])
    {
        $indent = Arr::get($args, 'indent', '——');

        $repo = app(CategoryInterface::class);

        $categories = $repo->getCategories(Arr::get($args, 'select', ['*']), [
            'created_at' => 'DESC',
            'is_default' => 'DESC',
            'order'      => 'ASC',
        ]);

        $categories = sort_item_with_children($categories);

        foreach ($categories as $category) {
            $indentText = '';
            $depth = (int)$category->depth;
            for ($index = 0; $index < $depth; $index++) {
                $indentText .= $indent;
            }
            $category->indent_text = $indentText;
        }

        return $categories;
    }
}

if (!function_exists('get_categories_with_children')) {
    /**
     * @return \Illuminate\Support\Collection
     * @throws Exception
     */
    function get_categories_with_children()
    {
        $categories = app(CategoryInterface::class)
            ->getAllCategoriesWithChildren(['status' => BaseStatusEnum::PUBLISHED], [], ['id', 'name', 'parent_id']);

        return app(SortItemsWithChildrenHelper::class)
            ->setChildrenProperty('child_cats')
            ->setItems($categories)
            ->sort();
    }
}

if (!function_exists('register_post_format')) {
    /**
     * @param array $formats
     * @return void
     */
    function register_post_format(array $formats)
    {
        PostFormat::registerPostFormat($formats);
    }
}

if (!function_exists('get_post_formats')) {
    /**
     * @param bool $convertToList
     * @return array
     */
    function get_post_formats($convertToList = false)
    {
        return PostFormat::getPostFormats($convertToList);
    }
}
if (!function_exists('get_file_name')) {
    function get_file_name($reference)
    {
        $file = new SplFileInfo($reference);

        return $file->getFilename();
    }
}

if (!function_exists('get_file_size')) {
    function get_file_size($path)
    {
        $bytes = sprintf('%u', filesize('storage/' . $path));

        if ($bytes > 0) {
            $unit = intval(log($bytes, 1024));
            $units = array('B', 'KB', 'MB', 'GB');

            if (array_key_exists($unit, $units) === true) {
                return sprintf('%d %s', $bytes / pow(1024, $unit), $units[$unit]);
            }
        }

        return $bytes;
    }
}
if (!function_exists('get_slug_by_template')) {
    /**
     * @param $template
     * @return mixed
     *
     */
    function get_slug_by_template($template)
    {
        return app(PageInterface::class)->getByTemplate($template);
    }
}

// if (!function_exists('get_image_width')) {
//     /**
//      * @param bool $convertToList
//      * @return array
//      */
//     function get_image_width($path)
//     {
//         $data = getimagesize($path); 
//         return $data[0];
//     }
// }
// if (!function_exists('get_image_height')) {
//     /**
//      * @param bool $convertToList
//      * @return array
//      */
//     function get_image_height($path)
//     {
//         $data = getimagesize($path);
//         dd($data[1]);
//         return $data[1];
//     }
// }