<?php

return [
    [
        'name' => 'Trade and services',
        'flag' => 'trade-and-services.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'trade-and-services.create',
        'parent_flag' => 'trade-and-services.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'trade-and-services.edit',
        'parent_flag' => 'trade-and-services.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'trade-and-services.destroy',
        'parent_flag' => 'trade-and-services.index',
    ],
];
