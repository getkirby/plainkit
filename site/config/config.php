<?php

return [
  'blocks' => [
    'fieldsets' => [
      'custom' => [
        'label' => 'Custom blocks',
        'type' => 'group',
        'fieldsets' => [
          'faq'
        ]
      ],
      'kirby' => [
        'label' => 'Kirby blocks',
        'type' => 'group',
        'fieldsets' => [
          'heading',
          'text',
          'list',
          'quote',
          'image',
          'video',
          'code',
          'markdown'
        ]
      ]
    ]
  ]
];
