<?php

namespace Platform\PostActivityField\Forms;

use Platform\Base\Forms\FormAbstract;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\PostActivityField\Http\Requests\PostActivityFieldRequest;
use Platform\PostActivityField\Models\PostActivityField;
use Platform\PostActivityField\Forms\Fields\CategoryMultiField;

class PostActivityFieldForm extends FormAbstract
{

    /**  
     * {@inheritDoc}
     */
    public function buildForm() 
    {   
        $selectedCategories = []; 
        if ($this->getModel()) {
            $selectedCategories = $this->getModel()->categories()->pluck('list_field_activities_id')->all();
        }

        if (!$this->formHelper->hasCustomField('categoryMulti')) {
            $this->formHelper->addCustomField('categoryMulti', CategoryMultiField::class);
        }
        $this
            ->setupModel(new PostActivityField)
            ->setValidatorClass(PostActivityFieldRequest::class)
            ->withCustomFields()
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
                'label'         =>  __('Tin nổi bật'),
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
            ])
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'choices'    => BaseStatusEnum::labels(),
            ])
            ->add('categories[]', 'categoryMulti', [
                'label'      => trans('plugins/blog::posts.form.categories'),
                'label_attr' => ['class' => 'control-label required'],
                'choices'    => get_all_list_field_categories(),
                'value'      => old('categories', $selectedCategories), 
            ])
            ->add('image', 'mediaImage', [
                'label'      => trans('core/base::forms.image'),
                'label_attr' => ['class' => 'control-label'], 
            ])
           
            ->setBreakFieldPoint('status');
    }
}
