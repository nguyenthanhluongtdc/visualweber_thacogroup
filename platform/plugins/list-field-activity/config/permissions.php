<?php

return [
    [
        'name' => 'List field activities',
        'flag' => 'list-field-activity.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'list-field-activity.create',
        'parent_flag' => 'list-field-activity.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'list-field-activity.edit',
        'parent_flag' => 'list-field-activity.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'list-field-activity.destroy',
        'parent_flag' => 'list-field-activity.index',
    ],
];
