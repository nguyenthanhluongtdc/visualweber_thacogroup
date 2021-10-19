<?php

namespace Platform\PostActivityField\Forms\Fields;

use Kris\LaravelFormBuilder\Fields\FormField;

class CategoryMultiField extends FormField
{
 
    /** 
     * {@inheritDoc} 
     */
    protected function getTemplate()
    {
        return 'plugins/list-field-activity::list-field-activity-multi';
    } 
}
