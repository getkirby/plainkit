<?php

Kirby::plugin('your-project/faq-block', [
    'blueprints' => [
        'blocks/faq'      => __DIR__ . '/blueprints/blocks/faq.yml',
        'blocks/faqItem'  => __DIR__ . '/blueprints/blocks/faqItem.yml'
    ],
    'snippets'   => [
        'blocks/faq'      => __DIR__ . '/snippets/blocks/faq.php',
        'blocks/faqItem'  => __DIR__ . '/snippets/blocks/faqItem.php'
    ]
]);
