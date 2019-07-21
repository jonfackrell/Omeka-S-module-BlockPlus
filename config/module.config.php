<?php
namespace BlockPlus;

return [
    'view_manager' => [
        'template_path_stack' => [
            dirname(__DIR__) . '/view',
        ],
    ],
    'block_layouts' => [
        'invokables' => [
            'browsePreview' => Site\BlockLayout\BrowsePreview::class,
            // TODO Omeka core use "itemShowCase" instead of "itemShowcase".
            'itemShowCase' => Site\BlockLayout\ItemShowcase::class,
            'searchForm' => Site\BlockLayout\SearchForm::class,
        ],
        'factories' => [
            'assets' => Service\BlockLayout\AssetsFactory::class,
            'embedText' => Service\BlockLayout\EmbedTextFactory::class,
            'mediaText' => Service\BlockLayout\MediaTextFactory::class,
            'simplePage' => Service\BlockLayout\SimplePageFactory::class,
        ],
    ],
    'form_elements' => [
        'invokables' => [
            Form\AssetsFieldset::class => Form\AssetsFieldset::class,
            Form\BrowsePreviewFieldset::class => Form\BrowsePreviewFieldset::class,
            Form\EmbedTextFieldset::class => Form\EmbedTextFieldset::class,
            Form\ItemShowcaseFieldset::class => Form\ItemShowcaseFieldset::class,
            Form\MediaTextFieldset::class => Form\MediaTextFieldset::class,
            Form\SearchFormFieldset::class => Form\SearchFormFieldset::class,
            Form\SimplePageBlockFieldset::class => Form\SimplePageBlockFieldset::class,
        ],
        'factories' => [
            Form\Element\PartialSelect::class => Service\Form\Element\PartialSelectFactory::class,
            Form\Element\SitesPageSelect::class => Service\Form\Element\SitesPageSelectFactory::class,
            Form\Element\ThumbnailTypeSelect::class => Service\Form\Element\ThumbnailTypeSelectFactory::class,
        ],
    ],
    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => dirname(__DIR__) . '/language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
    'blockplus' => [
        'block_settings' => [
            'assets' => [
                'heading' => '',
                'assets' => [
                    [
                        'asset' => null,
                        'title' => '',
                        'caption' => '',
                        'url' => '',
                        'class' => '',
                    ],
                ],
                'partial' => null,
            ],
            'browsePreview' => [
                'resource_type' => 'items',
                'query' => '',
                'limit' => 12,
                'heading' => '',
                'link-text' => 'Browse all', // @translate
                'partial' => '',
            ],
            'embedText' => [
                'heading' => '',
                'embeds' => [],
                'html' => '',
                'alignment' => 'left',
                'show_title_option' => 'title',
                'caption_position' => 'center',
                'link_text' => 'Know more', // @translate
                'link_url' => '#',
                'partial' => '',
            ],
            'itemShowcase' => [
                'attachments' => [],
                'thumbnail_type' => 'square',
                'show_title_option' => 'item_title',
                'heading' => '',
                'partial' => '',
            ],
            'mediaText' => [
                'heading' => '',
                'attachments' => [],
                'html' => '',
                'thumbnail_type' => 'square',
                'alignment' => 'left',
                'show_title_option' => 'item_title',
                // This option is mainly for compability with Omeka Classic exhibits.
                'caption_position' => 'center',
                'partial' => '',
            ],
            'searchForm' => [
                'heading' => '',
            ],
            'simplePage' => [
                'page' => null,
            ],
        ],
    ],
];
