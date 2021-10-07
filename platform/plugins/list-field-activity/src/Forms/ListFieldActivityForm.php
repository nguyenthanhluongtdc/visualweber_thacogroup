<?php

namespace Platform\ListFieldActivity\Forms;

use Platform\Base\Forms\FormAbstract;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\ListFieldActivity\Http\Requests\ListFieldActivityRequest;
use Platform\ListFieldActivity\Models\ListFieldActivity;

class ListFieldActivityForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $templates = [
            'field-of-activity' => __('Field-of-activity'),
          
        ];
        $this
            ->setupModel(new ListFieldActivity)
            ->setValidatorClass(ListFieldActivityRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
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
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
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
