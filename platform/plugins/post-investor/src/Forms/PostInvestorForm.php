<?php

namespace Platform\PostInvestor\Forms;

use Platform\Base\Forms\FormAbstract; 
use Platform\Base\Enums\BaseStatusEnum;
use Platform\PostInvestor\Http\Requests\PostInvestorRequest;
use Platform\PostInvestor\Models\PostInvestor;
use Platform\PostInvestor\Forms\Fields\CategoryMultiField;
use Illuminate\Support\Facades\Auth;

class PostInvestorForm extends FormAbstract
{
 
    /**
     * {@inheritDoc} 
     */
    public function buildForm()  
    { 
        $selectedCategories = []; 
        if ($this->getModel()) {
            $selectedCategories = $this->getModel()->categories()->pluck('investor_relation_id')->all();
        }

        if (!$this->formHelper->hasCustomField('categoryMulti')) {
            $this->formHelper->addCustomField('categoryMulti', CategoryMultiField::class);
        }
        $statusBase = BaseStatusEnum::labels(); 
        if(!Auth::user()->hasPermission('post-investor.approve')||!Auth::user()->hasPermission('post-investor.current')) {
            $statusBase = array_filter($statusBase, function($key) {
                return $key == 'pending';
            }, ARRAY_FILTER_USE_KEY);
        }

        $this
            ->setupModel(new PostInvestor)
            ->setValidatorClass(PostInvestorRequest::class) 
            ->withCustomFields()
            // ->add('name', 'editor', [
            //     'label'      => trans('core/base::forms.name'),
            //     'label_attr' => ['class' => 'control-label required'],
            //     'attr'       => [
            //         'rows'         => 2,
            //         'placeholder'  => trans('core/base::forms.name_placeholder'),
            //         'data-counter' => 120,
            //     ],
            // ])
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ]
            ]) 
            ->add('status', 'customSelect', [ 
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => $statusBase,
            ])
            ->add('categories[]', 'categoryMulti', [
                'label'      => trans('plugins/blog::posts.form.categories'),
                'label_attr' => ['class' => 'control-label required'],
                'choices'    => get_all_investor_categories(),
                'value'      => old('categories', $selectedCategories),
            ])
            ->add('image', 'mediaImage', [ 
                'label'      => trans('core/base::forms.image'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->setBreakFieldPoint('status');
    }
}
