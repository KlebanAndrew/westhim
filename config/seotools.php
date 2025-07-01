<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Виготовлення і ремонт механічних пресів Івано-Франківськ, Україна — ВЕСТХІМ", // set false to total remove
            'titleBefore'  => true, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'ВЕСТХІМ спеціалізується на проектуванні, виготовленні і ремонті механічних пресів зусиллям від 250 до 4000 кН відкритого і закритого типів, простої і подвійної дії', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
				'ВЕСТХІМ', 'ВЕСТХІМ', 'Івано-Франківськ', 'Ивано-Франковськ', 'Автоливмашівська',
				'Автоливмашевская', '76495', 'presmash', 'pressmash', 'PRESMASH', 'PRESSMASH', 'ghtcvfi', 'ghtccvfi',
				'GHTCVFI', 'GHTCCVFI', 'прес', 'ПРЕС', 'пресс', 'ПРЕСС', 'ВЕСТХІМ Івано-Франківськ', 'ПРЕССМАШ Івано-Франківськ',
				'ВЕСТХІМ Ивано-Франковськ', 'ПРЕССМАШ Ивано-Франковськ', 'presmash.if', 'PRESMASH.IF', 'presmash.if.ua',
				'PRESMASH.IF.UA', 'преса', 'ПРЕССА', 'виготовлення', 'ВИГОТОВЛЕННЯ', 'ремонт', 'РЕМОНТ', 'брикетувальних машин',
				'БРИКЕТУВАЛЬНИХ МАШИН', 'изготовление', 'ИЗГОТОВЛЕНИЕ', 'ремонт', 'РЕМОНТ', 'брикетировочных машин',
				'БРИКЕТИРОВОЧНЫХ МАШИН', 'виробництво брикетів', 'производство брикетов', 'ремонт прессов', 'ремонт пресів',
				'проектування механічних пресів',
				'виготовлення механічних пресів',
				'ремонт механічних пресів',
				'виготовлення брикетувальних машин',
				'виготовлення каркасів',
				'виготовлення запчастин',
				'изготовление запчастей', 'запуск механічних пресів', 'запуск механических прессов',
			],
            'canonical'    => 'full', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
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
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Виготовлення і ремонт механічних пресів Івано-Франківськ, Україна — ВЕСТХІМ', // set false to total remove
            'description' => 'ВЕСТХІМ спеціалізується на проектуванні, виготовленні і ремонті механічних пресів зусиллям від 250 до 4000 кН відкритого і закритого типів, простої і подвійної дії', // set false to total remove
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
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Виготовлення і ремонт механічних пресів Івано-Франківськ, Україна — ВЕСТХІМ', // set false to total remove
            'description' => 'ВЕСТХІМ спеціалізується на проектуванні, виготовленні і ремонті механічних пресів зусиллям від 250 до 4000 кН відкритого і закритого типів, простої і подвійної дії', // set false to total remove
            'url'         => 'full', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
