<?php

namespace Platform\PostInvestor\Forms\Fields;

use Kris\LaravelFormBuilder\Fields\FormField;

class CategoryMultiField extends FormField
{

    /**
     * {@inheritDoc}
     */
    protected function getTemplate()
    {
        return 'plugins/investor-relations::investor-relations-multi';
    } 
}
 