<?php

return [
    [
        'name' => 'Investor relations',
        'flag' => 'investor-relations.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'investor-relations.create',
        'parent_flag' => 'investor-relations.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'investor-relations.edit',
        'parent_flag' => 'investor-relations.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'investor-relations.destroy',
        'parent_flag' => 'investor-relations.index',
    ],
];
