<?php

app()->booted(function () {
    theme_option()
        ->setField([
            'id'         => 'copyright',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Copyright'),
            'attributes' => [
                'name'    => 'copyright',
                'value'   => __('© :year Laravel Technologies. All right reserved.', ['year' => now()->format('Y')]),
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Change copyright'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Copyright on footer of site'),
        ])
        ->setField([
            'id'         => 'primary_font',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'googleFonts',
            'label'      => __('Primary font'),
            'attributes' => [
                'name'  => 'primary_font',
                'value' => 'Roboto',
            ],
        ])
        ->setField([
            'id'         => 'primary_color',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'customColor',
            'label'      => __('Primary color'),
            'attributes' => [
                'name'  => 'primary_color',
                'value' => '#ff2b4a',
            ],
        ])
        ->setSection(
            [ // Set section with no field
                'title' => __('Footer'),
                'desc' => __('Footer settings'),
                'id' => 'opt-text-subsection-footer',
                'subsection' => true,
                'icon' => 'fa fa-home',
            ]
        )
        ->setField(
            [
                'id' => 'logo-footer',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'mediaImage',
                'label' => __('Logo'),
                'attributes' => [
                    'name' => 'logo-footer',
                    'value' => '',
                    
                ],
            ]
        )
        ->setField(
            [
                'id' => 'company-name',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Tên công ty'),
                'attributes' => [
                    'name' => 'company-name',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập tên công ty   '),
                        'data-counter' => 250,
                    ]
                    
                ],
            ]
        )
        ->setField(
            [
                'id' => 'license',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Nhập bản quyền'),
                'attributes' => [
                    'name' => 'license',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập bản quyền ...'),
                        'data-counter' => 250,
                    ]
                    
                ],
            ]
        )
        ->setField(
            [
                'id' => 'office-name',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Tên văn phòng 1'),
                'attributes' => [
                    'name' => 'office-name',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Tên văn phòng'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'office-address',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Địa chỉ văn phòng 1'),
                'attributes' => [
                    'name' => 'office-address',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Địa chỉ văn phòng'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'office-phone',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Số điện thoại'),
                'attributes' => [
                    'name' => 'office-phone',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __(' Nhập số điện thoại'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(

            [
                'id' => 'office-global',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __(' Trang liên kết'),
                'attributes' => [
                    'name' => 'office-global',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập liên kết'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'office-name-two',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Tên văn phòng 2'),
                'attributes' => [
                    'name' => 'office-name-two',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Tên văn phòng'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'office-address-two',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Địa chỉ văn phòng 2'),
                'attributes' => [
                    'name' => 'office-address-two',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Địa chỉ văn phòng'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'office-phone-two',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Số điện thoại'),
                'attributes' => [
                    'name' => 'office-phone-two',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __(' Nhập số điện thoại'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(

            [
                'id' => 'office-global-two',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __(' Trang liên kết'),
                'attributes' => [
                    'name' => 'office-global-two',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập liên kết'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'office-name-three',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Tên văn phòng 3'),
                'attributes' => [
                    'name' => 'office-name-three',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Tên văn phòng'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'office-address-three',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Địa chỉ văn phòng 3'),
                'attributes' => [
                    'name' => 'office-address-three',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Địa chỉ văn phòng'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'office-phone-three',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Số điện thoại'),
                'attributes' => [
                    'name' => 'office-phone-three',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __(' Nhập số điện thoại'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(

            [
                'id' => 'office-global-three',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __(' Trang liên kết'),
                'attributes' => [
                    'name' => 'office-global-three',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập liên kết'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(

            [
                'id' => 'footer-facebook',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Link facebook'),
                'attributes' => [
                    'name' => 'footer-facebook',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập link facebook'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'footer-facebook-icon',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'mediaImage',
                'label' => __('Icon facebook'),
                'attributes' => [
                    'name' => 'footer-facebook-icon',
                    'value' => '',
                ],
            ]
        )
        ->setField(

            [
                'id' => 'footer-youtube',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Link youtube'),
                'attributes' => [
                    'name' => 'footer-youtube',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập link youtube'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'footer-youtube-icon',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'mediaImage',
                'label' => __('Icon youtube'),
                'attributes' => [
                    'name' => 'footer-youtube-icon',
                    'value' => '',
                ],
            ]
        )
        ->setField(

            [
                'id' => 'footer-phone',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Số điện thoại'),
                'attributes' => [
                    'name' => 'footer-phone',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập số điện thoại'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'footer-phone-icon',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'mediaImage',
                'label' => __('Icon phone'),
                'attributes' => [
                    'name' => 'footer-phone-icon',
                    'value' => '',
                ],
            ]
        )
        ->setField(

            [
                'id' => 'footer-linkedin',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Link linkedin '),
                'attributes' => [
                    'name' => 'footer-linkedin',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập link linkedin'),
                        'data-counter' => 250,
                    ]
                ],
            ]
        )
        ->setField(
            [
                'id' => 'footer-linkedin-icon',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'mediaImage',
                'label' => __('Icon linkedin'),
                'attributes' => [
                    'name' => 'footer-linkedin-icon',
                    'value' => '',
                ],
            ]
        )
        ->setField(

            [
                'id' => 'footer-email',
                'section_id' => 'opt-text-subsection-footer',
                'type' => 'text',
                'label' => __('Nhập email'),
                'attributes' => [
                    'name' => 'footer-email',
                    'value' => '',
                    'options' => [
                        'class' => 'form-control',
                        'placeholder' => __('Nhập email'),
                        'data-counter' => 250,
                    ]
                ],
            ]
            )
            ->setField(
                [
                    'id' => 'footer-email-icon',
                    'section_id' => 'opt-text-subsection-footer',
                    'type' => 'mediaImage',
                    'label' => __('Icon email'),
                    'attributes' => [
                        'name' => 'footer-email-icon',
                        'value' => '',
                    ],
                ]
                )
                ->setSection([ // Set section with no field
                    'title' => __('Popup'),
                    'desc' => __('Popup settings'),
                    'id' => 'opt-text-subsection-popup',
                    'subsection' => true,
                    'icon' => 'fa fa-home',
                ])
                ->setField([
                    'id' => 'image_popup',
                    'section_id' => 'opt-text-subsection-popup',
                    'type' => 'mediaImage',
                    'label' => __('Image popup'),
                    'attributes' => [
                        'name' => 'image_popup',
                        'value' => null,
        
                    ],
                ])
                ->setField([
                    'id' => 'link_popup',
                    'section_id' => 'opt-text-subsection-popup',
                    'type' => 'text', // text, password, email, number
                    'label' => __('Link popup'),
                    'attributes' => [
                        'name' => 'link_popup',
                        'value' => null, // default value
                        'options' => [
                            'class' => 'form-control',
                            'data-counter' => 200,
                        ]
                    ]
                ])
                ->setField([
                    'id' => 'enable_popup',
                    'section_id' => 'opt-text-subsection-popup',
                    'type' => 'onOff',
                    'label' => __('Enable popup'),
                    'attributes' => [
                        'name' => 'enable_popup',
                        'value' => 0,
                        'data' => [
                            0 => 'No',
                            1 => 'Yes',
                        ],
                        'options' => [], // Optional
                    ],
                    'helper' => __('Enable popup in home page'),
                ]);
});
