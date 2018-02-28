<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Webblue Media", // set false to total remove
            'description'  => 'Webblue Media bei Andreas Scholten steht für die Planung und Realisierung von Webprojekten sowie Web-Apps.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Webblue', 'Webdesign', 'Webentwicklung', 'Webblue Media', 'Andreas Scholten'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Webblue Media bei Andreas Scholten', // set false to total remove
            'description' => 'Webblue Media beo Andreas Scholten steht für die Planung und Realisierung von Webprojekten sowie Web-Apps.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
