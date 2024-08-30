<?php


return [
    /*
    |--------------------------------------------------------------------------
    | Profiles
    |--------------------------------------------------------------------------
    |
    | You can add as many as you want of profiles to use it in your application.
    |
    */

    'profiles' => [

        'default' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
            'toolbar' => 'undo redo removeformat | formatselect fontsizeselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
            'upload_directory' => null,
        ],


        'simple' => [
            'plugins' => 'autoresize directionality emoticons link wordcount',
            'toolbar' => 'removeformat | bold italic | rtl ltr | link emoticons',
            'upload_directory' => null,
        ],

        'template' => [
            'plugins' => 'autoresize template',
            'toolbar' => 'template',
            'upload_directory' => null,
        ],
        /*
        |--------------------------------------------------------------------------
        | Custom Configs
        |--------------------------------------------------------------------------
        |
        | If you want to add custom configurations to directly tinymce
        | You can use custom_configs key as an array
        |
        */

        /*
          'default' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
            'toolbar' => 'undo redo removeformat | formatselect fontsizeselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
            'custom_configs' => [
                'allow_html_in_named_anchor' => true,
                'link_default_target' => '_blank',
                'codesample_global_prismjs' => true,
                'image_advtab' => true,
                'image_class_list' => [
                  [
                    'title' => 'None',
                    'value' => '',
                  ],
                  [
                    'title' => 'Fluid',
                    'value' => 'img-fluid',
                  ],
              ],
            ]
        ],
        */

        'titre' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
            'toolbar' => ' formatselect fontsizeselect | bold italic | forecolor backcolor ',
            'custom_configs' => [
                'allow_html_in_named_anchor' => true,
                'link_default_target' => '_blank',
                'codesample_global_prismjs' => true,
                'image_advtab' => true,
                'image_class_list' => [
                  [
                    'title' => 'None',
                    'value' => '',
                  ],
                  [
                    'title' => 'Fluid',
                    'value' => 'img-fluid',
                  ],
              ],
            ],
        ],

        'corps' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
            'toolbar' => 'undo redo removeformat | formatselect fontselect fontsizeselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table hr | link emoticons | wordcount fullscreen',
            'custom_configs' => [
              'font_family_formats' => 
              'Arial=arial,helvetica,sans-serif;' .
                'Arial Black=arial black,avant garde;' .
                'Calibri=calibri,sans-serif;' .
                'Cambria=cambria,serif;' .
                'Candara=candara,sans-serif;' .
                'Comic Sans MS=comic sans ms,sans-serif;' .
                'Consolas=consolas,monospace;' .
                'Courier New=courier new,courier,monospace;' .
                'Georgia=georgia,palatino,serif;' .
                'Helvetica=helvetica,sans-serif;' .
                'Impact=impact,sans-serif;' .
                'Lucida Sans Unicode=lucida sans unicode,lucida grande,sans-serif;' .
                'Palatino Linotype=palatino linotype,book antiqua,palatino,serif;' .
                'Segoe UI=segoe ui,sans-serif;' .
                'Tahoma=tahoma,arial,helvetica,sans-serif;' .
                'Times New Roman=times new roman,times,serif;' .
                'Trebuchet MS=trebuchet ms,geneva,sans-serif;' .
                'Verdana=verdana,geneva,sans-serif;',

                'allow_html_in_named_anchor' => true,
                'link_default_target' => '_blank',
                'codesample_global_prismjs' => true,
                'image_advtab' => true,
                'image_class_list' => [
                  [
                    'title' => 'None',
                    'value' => '',
                  ],
                  [
                    'title' => 'Fluid',
                    'value' => 'img-fluid',
                 //   'font_family' => 'Arial=arial,helvetica,sans-serif; Courier New=courier new,courier,monospace; Georgia=georgia,palatino; Tahoma=tahoma,arial,helvetica,sans-serif; Times New Roman=times new roman,times; Verdana=verdana,geneva,sans-serif',
                  ],
              ],
            ],

           
           
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    | You can add as many as you want of templates to use it in your application.
    |
    | https://www.tiny.cloud/docs/plugins/opensource/template/#templates
    |
    | ex: TinyEditor::make('content')->profiles('template')->template('example')
    */

    'templates' => [

        'example' => [
            // content
            ['title' => 'Some title 1', 'description' => 'Some desc 1', 'content' => 'My content'],
            // url
            ['title' => 'Some title 2', 'description' => 'Some desc 2', 'url' => 'http://localhost'],
        ],

    ],
];
