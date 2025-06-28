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
				'ВЕСТХІМ', 'ВЕСТХІМ', 'прессмаш', 'ПРЕССМАШ', 'Івано-Франківськ', 'Ивано-Франковськ', 'Автоливмашівська',
				'Автоливмашевская', '76495', 'presmash', 'pressmash', 'PRESMASH', 'PRESSMASH', 'ghtcvfi', 'ghtccvfi',
				'GHTCVFI', 'GHTCCVFI', 'прес', 'ПРЕС', 'пресс', 'ПРЕСС', 'ВЕСТХІМ Івано-Франківськ', 'ПРЕССМАШ Івано-Франківськ',
				'ВЕСТХІМ Ивано-Франковськ', 'ПРЕССМАШ Ивано-Франковськ', 'presmash.if', 'PRESMASH.IF', 'presmash.if.ua',
				'PRESMASH.IF.UA', 'преса', 'ПРЕССА', 'виготовлення', 'ВИГОТОВЛЕННЯ', 'ремонт', 'РЕМОНТ', 'брикетувальних машин',
				'БРИКЕТУВАЛЬНИХ МАШИН', 'изготовление', 'ИЗГОТОВЛЕНИЕ', 'ремонт', 'РЕМОНТ', 'брикетировочных машин',
				'БРИКЕТИРОВОЧНЫХ МАШИН', 'виробництво брикетів', 'производство брикетов', 'ремонт прессов', 'ремонт пресів',
				'КС3036', 'КС3537', 'КС2124', 'КC2126', 'КC2128', 'КC2132', 'КC2130', 'КC2134', 'КC3135', 'КT2124', 'КT2126',
				'КT2130', 'КТ8336', 'КТ8340', 'КГ5530', 'КГ2134', 'КГ2132', 'КГ9534', 'КГ254', 'КГ9536', 'КУ3535', 'КУ3537',
				'КИ2534', 'КВ0038', 'КВ0036', 'КВ0034', 'КВ2532', 'КВ2539', 'КВ2538', 'КВ2536', 'КВ2534', 'В-80', 'В80',
				'УВТ-200', 'УВТ200', 'ПОВОРОТНІ СОНЯЧНІ БАТАРЕЇ ТА КАРКАСИ', 'ПОВОРОТНЫЕ СОЛНЕЧНЫЕ БАТАРЕИ И КАРКАСЫ',
				'СОНЯЧНІ БАТАРЕЇ', 'СОЛНЕЧНЫЕ БАТАРЕИ', 'КАРКАСИ, КАРКАСЫ', 'KS3036', 'KS3537', 'KS2124', 'KS2126', 'KS2128',
				'KS2132', 'KS2130', 'KS2134', 'KS3135', 'KT2124', 'KT2126', 'KT2130', 'KT8336', 'KT8340', 'KG5530', 'KG2134',
				'KG2132', 'KG9534', 'KG254', 'KG9536', 'KY3535', 'KY3537', 'KU2534', 'KV0038', 'KV0036', 'KV0034', 'KV2532',
				'KV2539', 'KV2538', 'KV2536', 'KV2534', 'B-80', 'B80', 'UVT-200', 'UVT200', 'виготовлення запчастин',
				'изготовление запчастей', 'запуск механічних пресів', 'запуск механических прессов',
			],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
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
            'url'         => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
