<?php

namespace Platform\InvestorRelations\Forms;

use Platform\Base\Forms\FormAbstract;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\InvestorRelations\Http\Requests\InvestorRelationsRequest;
use Platform\InvestorRelations\Models\InvestorRelations;

class InvestorRelationsForm extends FormAbstract
{

    /** 
     * {@inheritDoc}
     */ 
    public function buildForm() 
    { 
        $list = sort_item_with_children(get_all_investor_categories());

        $categories = [];
        foreach ($list as $row) {
            if ($this->getModel() && ($this->model->id === $row->id || $this->model->id === $row->parent_id)) {
                continue;
            }

            $categories[$row->id] = $row->indent_text . ' ' . $row->name;
        }
        $categories = [0 => trans('plugins/blog::categories.none')] + $categories;

        //dd(get_page_templates());
        
        $templates = [
            'rules-regulation' => __('Giao diện 1'),
            'annual-report' => __('Giao diện 2'),
        ];
 
        $this
            ->setupModel(new InvestorRelations)
            ->setValidatorClass(InvestorRelationsRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('parent_id', 'customSelect', [
                'label'      => trans('core/base::forms.parent'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'select-search-full',
                ],
                'choices'    => $categories,
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
            // ->add('is_default', 'onOff', [
            //     'label'         => trans('core/base::forms.is_default'),
            //     'label_attr'    => ['class' => 'control-label'],
            //     'default_value' => false,
            // ])
            // ->add('order', 'number', [
            //     'label'         => trans('core/base::forms.order'),
            //     'label_attr'    => ['class' => 'control-label'],
            //     'attr'          => [
            //         'placeholder' => trans('core/base::forms.order_by_placeholder'),
            //     ],
            //     'default_value' => 0,
            // ])
            // ->add('is_featured', 'onOff', [
            //     'label'         => trans('core/base::forms.is_featured'),
            //     'label_attr'    => ['class' => 'control-label'],
            //     'default_value' => false,
            // ])
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'choices'    => BaseStatusEnum::labels(),
            ])
            ->add('template', 'customSelect', [
                'label'      => trans('core/base::forms.template'),
                'label_attr' => ['class' => 'control-label required'],
                'choices'    => $templates,
            ])
            ->setBreakFieldPoint('status');
    }
}
