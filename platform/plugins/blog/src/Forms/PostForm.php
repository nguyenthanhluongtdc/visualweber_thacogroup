<?php

namespace Platform\Blog\Forms;

use Illuminate\Support\Facades\Auth;
use Platform\ACL\Repositories\Interfaces\UserInterface;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Forms\Fields\TagField;
use Platform\Base\Forms\FormAbstract;
use Platform\Blog\Forms\Fields\CategoryMultiField;
use Platform\Blog\Http\Requests\PostRequest;
use Platform\Blog\Models\Post;
use Platform\Blog\Repositories\Interfaces\CategoryInterface;

class PostForm extends FormAbstract
{

    /**
     * @var string
     */
    protected $template = 'core/base::forms.form-tabs';

    /**
     * {@inheritDoc}
     * @throws \Exception
     */
    public function buildForm()
    {
        $selectedCategories = [];
        if ($this->getModel()) {
            $selectedCategories = $this->getModel()->categories()->pluck('category_id')->all();
        }

        if (empty($selectedCategories)) {
            $selectedCategories = app(CategoryInterface::class)
                ->getModel()
                ->where('is_default', 1)
                ->pluck('id')
                ->all();
        }
 
        $tags = null;

        if ($this->getModel()) {
            $tags = $this->getModel()->tags()->pluck('name')->all();
            $tags = implode(',', $tags);
        }

        if (!$this->formHelper->hasCustomField('categoryMulti')) {
            $this->formHelper->addCustomField('categoryMulti', CategoryMultiField::class);
        }
        $field_activity = ['0' =>  __("Chọn lĩnh vực")] + get_field_activity()
        ->pluck('name', 'id')->toArray() ?? [];;
    


        $statusBase = BaseStatusEnum::labels(); 

        if((!Auth::user()->hasPermission('posts.current'))&&(!Auth::user()->hasPermission('posts.approve'))) {
            $statusBase = array_filter($statusBase, function($key) {
                return $key == 'pending';
            }, ARRAY_FILTER_USE_KEY);
        }

        $this
            ->setupModel(new Post)
            ->setValidatorClass(PostRequest::class)
            ->withCustomFields()
            ->addCustomField('tags', TagField::class)
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ], 
            ])
            ->add('author_name', 'text', [
                'label'         => __('Tên người viết'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ], 
            ])
            ->add('description', 'textarea', [
                'label'      => trans('core/base::forms.description'),
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'rows'         => 4,
                    'placeholder'  => trans('core/base::forms.description_placeholder'),
                    'data-counter' => 400,
                ],
            ])
            ->add('is_featured', 'onOff', [
                'label'         =>  __('Tin nổi bật các trang truyền thông'),
                'label_attr'    => ['class' => 'control-label'],
                'default_value' => false,
            ])
            ->add('show_slider_news', 'onOff', [
                'label'         => __('Tin nổi bật Banner trang chủ'),
                'label_attr'    => ['class' => 'control-label'],
                'default_value' => false,
            ])
            ->add('show_home_news', 'onOff', [
                'label'         => __('Tin nổi bật trang chủ'),
                'label_attr'    => ['class' => 'control-label'],
                'default_value' => false,
            ])
            ->add('show_post_field', 'onOff', [
                'label'         => __('Tin nổi bật ở lĩnh vực hoạt động'),
                'label_attr'    => ['class' => 'control-label'],
                'default_value' => false,
            ])
            ->add('content', 'editor', [ 
                'label'      => trans('core/base::forms.content'), 
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'rows'            => 4,
                    'placeholder'     => trans('core/base::forms.description_placeholder'),
                    'with-short-code' => true,
                    
                ],
            ]);

        // if(!Auth::user()->hasPermission('posts.current')) {
        //     $this->add('author_id', 'customSelect', [
        //         'label'      => trans('Người đăng'),
        //         'label_attr' => ['class' => 'control-label required'],
        //         'choices'    => app(UserInterface::class)->getModel()->all()->pluck('username', 'id'),
        //         'attr' => [
        //             'class' => 'form-control select-full-search',
        //         ]
        //     ]);
        // }

        $this->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'choices'    => $statusBase,
            ])
            ->add('categories[]', 'categoryMulti', [
                'label'      => trans('plugins/blog::posts.form.categories'),
                'label_attr' => ['class' => 'control-label required'],
                'choices'    => get_categories_with_children(),
                'value'      => old('categories', $selectedCategories),
            ])
            ->add('field_activity', 'customSelect', [
                'label'      => __('Lĩnh vực hoạt động'),
                'label_attr' => ['class' => 'control-label required'],
                'choices' => $field_activity,
                'attr'       => [
                    'class' => 'form-control select-search-full',
                ]
            ])

            ->add('image', 'mediaImage', [
                'label'      => trans('core/base::forms.image'),
                'label_attr' => ['class' => 'control-label'], 
            ])
            // ->add('image_banner', 'mediaImage', [
            //     'label'      => trans('Ảnh banner'),
            //     'label_attr' => ['class' => 'control-label'],
            // ])
            ->add('tag', 'tags', [
                'label'      => trans('plugins/blog::posts.form.tags'),
                'label_attr' => ['class' => 'control-label'],
                'value'      => $tags,
                'attr'       => [
                    'placeholder' => trans('plugins/blog::base.write_some_tags'),
                    'data-url'    => route('tags.all'),
                ],
            ])
            ->setBreakFieldPoint('status');

        $postFormats = get_post_formats(true); 

        if (count($postFormats) > 1) {
            $this->addAfter('status', 'format_type', 'customRadio', [
                'label'      => trans('plugins/blog::posts.form.format_type'),
                'label_attr' => ['class' => 'control-label'],
                'choices'    => get_post_formats(true),
            ]);
        }
    }
}


// trans('core/base::forms.is_featured'),