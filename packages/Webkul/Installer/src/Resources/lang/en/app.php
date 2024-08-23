<?php

return [
    'seeders' => [
        'attributes' => [
            'leads' => [
                'description'         => 'Description',
                'expected-close-date' => 'Expected Close Date',
                'lead-value'          => 'Lead Value',
                'sales-owner'         => 'Sales Owner',
                'source'              => 'Source',
                'title'               => 'Title',
                'type'                => 'Type',
                'pipeline'            => 'Pipeline',
                'stage'               => 'Stage',
            ],

            'persons' => [
                'contact-numbers' => 'Contact Numbers',
                'emails'          => 'Emails',
                'job-title'       => 'Job Title',
                'name'            => 'Name',
                'organization'    => 'Organization',
                'sales-owner'     => 'Sales Owner',
            ],

            'organizations' => [
                'address'     => 'Address',
                'name'        => 'Name',
                'sales-owner' => 'Sales Owner',
            ],

            'products' => [
                'description' => 'Description',
                'name'        => 'Name',
                'price'       => 'Price',
                'quantity'    => 'Quantity',
                'sku'         => 'SKU',
            ],

            'quotes' => [
                'adjustment-amount' => 'Adjustment Amount',
                'billing-address'   => 'Billing Address',
                'description'       => 'Description',
                'discount-amount'   => 'Discount Amount',
                'discount-percent'  => 'Discount Percent',
                'expired-at'        => 'Expired At',
                'grand-total'       => 'Grand Total',
                'person'            => 'Person',
                'sales-owner'       => 'Sales Owner',
                'shipping-address'  => 'Shipping Address',
                'sub-total'         => 'Sub Total',
                'subject'           => 'Subject',
                'tax-amount'        => 'Tax Amount',
            ],

            'warehouses' => [
                'contact-address' => 'Contact Address',
                'contact-emails'  => 'Contact Emails',
                'contact-name'    => 'Contact Name',
                'contact-numbers' => 'Contact Numbers',
                'description'     => 'Description',
                'name'            => 'Name',
            ],
        ],

        'email' => [
            'activity-created'      => 'Activity created',
            'activity-modified'     => 'Activity modified',
            'date'                  => 'Date',
            'new-activity'          => 'You have a new activity, please find the details bellow',
            'new-activity-modified' => 'You have a new activity modified, please find the details bellow',
            'participants'          => 'Participants',
            'title'                 => 'Title',
            'type'                  => 'Type',
        ],

        'lead' => [
            'pipeline' => [
                'default' => 'Default Pipeline',

                'pipeline-stages' => [
                    'follow-up'   => 'Follow Up',
                    'lost'        => 'Lost',
                    'negotiation' => 'Negotiation',
                    'new'         => 'New',
                    'prospect'    => 'Prospect',
                    'won'         => 'Won',
                ],
            ],

            'source' => [
                'direct'   => 'Direct',
                'email'    => 'Email',
                'phone'    => 'Phone',
                'web'      => 'Web',
                'web-form' => 'Web Form',
            ],

            'type' => [
                'existing-business' => 'Existing Business',
                'new-business'      => 'New Business',
            ],
        ],

        'user' => [
            'role' => [
                'administrator-role' => 'Administrator Role',
                'administrator'      => 'Administrator',
            ],
        ],

        'workflow' => [
            'email-to-participants-after-activity-updation' => 'Emails to participants after activity updation',
            'email-to-participants-after-activity-creation' => 'Emails to participants after activity creation',
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Admin',
                'krayin'           => 'Krayin',
                'confirm-password' => 'Confirm Password',
                'email'            => 'Email',
                'email-address'    => 'admin@example.com',
                'password'         => 'Password',
                'title'            => 'Create Administrator',
            ],

            'environment-configuration' => [
                'algerian-dinar'              => 'Algerian Dinar (DZD)',
                'allowed-currencies'          => 'Allowed Currencies',
                'allowed-locales'             => 'Allowed Locales',
                'application-name'            => 'Application Name',
                'argentine-peso'              => 'Argentine Peso (ARS)',
                'australian-dollar'           => 'Australian Dollar (AUD)',
                'krayin'                      => 'Krayin',
                'bangladeshi-taka'            => 'Bangladeshi Taka (BDT)',
                'brazilian-real'              => 'Brazilian Real (BRL)',
                'british-pound-sterling'      => 'British Pound Sterling (GBP)',
                'canadian-dollar'             => 'Canadian Dollar (CAD)',
                'cfa-franc-bceao'             => 'CFA Franc BCEAO (XOF)',
                'cfa-franc-beac'              => 'CFA Franc BEAC (XAF)',
                'chilean-peso'                => 'Chilean Peso (CLP)',
                'chinese-yuan'                => 'Chinese Yuan (CNY)',
                'colombian-peso'              => 'Colombian Peso (COP)',
                'czech-koruna'                => 'Czech Koruna (CZK)',
                'danish-krone'                => 'Danish Krone (DKK)',
                'database-connection'         => 'Database Connection',
                'database-hostname'           => 'Database Hostname',
                'database-name'               => 'Database Name',
                'database-password'           => 'Database Password',
                'database-port'               => 'Database Port',
                'database-prefix'             => 'Database Prefix',
                'database-username'           => 'Database Username',
                'default-currency'            => 'Default Currency',
                'default-locale'              => 'Default Locale',
                'default-timezone'            => 'Default Timezone',
                'default-url'                 => 'Default URL',
                'default-url-link'            => 'https://localhost',
                'egyptian-pound'              => 'Egyptian Pound (EGP)',
                'euro'                        => 'Euro (EUR)',
                'fijian-dollar'               => 'Fijian Dollar (FJD)',
                'hong-kong-dollar'            => 'Hong Kong Dollar (HKD)',
                'hungarian-forint'            => 'Hungarian Forint (HUF)',
                'indian-rupee'                => 'Indian Rupee (INR)',
                'indonesian-rupiah'           => 'Indonesian Rupiah (IDR)',
                'israeli-new-shekel'          => 'Israeli New Shekel (ILS)',
                'japanese-yen'                => 'Japanese Yen (JPY)',
                'jordanian-dinar'             => 'Jordanian Dinar (JOD)',
                'kazakhstani-tenge'           => 'Kazakhstani Tenge (KZT)',
                'kuwaiti-dinar'               => 'Kuwaiti Dinar (KWD)',
                'lebanese-pound'              => 'Lebanese Pound (LBP)',
                'libyan-dinar'                => 'Libyan Dinar (LYD)',
                'malaysian-ringgit'           => 'Malaysian Ringgit (MYR)',
                'mauritian-rupee'             => 'Mauritian Rupee (MUR)',
                'mexican-peso'                => 'Mexican Peso (MXN)',
                'moroccan-dirham'             => 'Moroccan Dirham (MAD)',
                'mysql'                       => 'Mysql',
                'nepalese-rupee'              => 'Nepalese Rupee (NPR)',
                'new-taiwan-dollar'           => 'New Taiwan Dollar (TWD)',
                'new-zealand-dollar'          => 'New Zealand Dollar (NZD)',
                'nigerian-naira'              => 'Nigerian Naira (NGN)',
                'norwegian-krone'             => 'Norwegian Krone (NOK)',
                'omani-rial'                  => 'Omani Rial (OMR)',
                'pakistani-rupee'             => 'Pakistani Rupee (PKR)',
                'panamanian-balboa'           => 'Panamanian Balboa (PAB)',
                'paraguayan-guarani'          => 'Paraguayan Guarani (PYG)',
                'peruvian-nuevo-sol'          => 'Peruvian Nuevo Sol (PEN)',
                'pgsql'                       => 'pgSQL',
                'philippine-peso'             => 'Philippine Peso (PHP)',
                'polish-zloty'                => 'Polish Zloty (PLN)',
                'qatari-rial'                 => 'Qatari Rial (QAR)',
                'romanian-leu'                => 'Romanian Leu (RON)',
                'russian-ruble'               => 'Russian Ruble (RUB)',
                'saudi-riyal'                 => 'Saudi Riyal (SAR)',
                'select-timezone'             => 'Select Timezone',
                'singapore-dollar'            => 'Singapore Dollar (SGD)',
                'south-african-rand'          => 'South African Rand (ZAR)',
                'south-korean-won'            => 'South Korean Won (KRW)',
                'sqlsrv'                      => 'SQLSRV',
                'sri-lankan-rupee'            => 'Sri Lankan Rupee (LKR)',
                'swedish-krona'               => 'Swedish Krona (SEK)',
                'swiss-franc'                 => 'Swiss Franc (CHF)',
                'thai-baht'                   => 'Thai Baht (THB)',
                'title'                       => 'Store Configuration',
                'tunisian-dinar'              => 'Tunisian Dinar (TND)',
                'turkish-lira'                => 'Turkish Lira (TRY)',
                'ukrainian-hryvnia'           => 'Ukrainian Hryvnia (UAH)',
                'united-arab-emirates-dirham' => 'United Arab Emirates Dirham (AED)',
                'united-states-dollar'        => 'United States Dollar (USD)',
                'uzbekistani-som'             => 'Uzbekistani Som (UZS)',
                'venezuelan-bolívar'          => 'Venezuelan Bolívar (VEF)',
                'vietnamese-dong'             => 'Vietnamese Dong (VND)',
                'warning-message'             => 'Beware! The settings for your default system language and default currency are permanent and cannot be changed once set.',
                'zambian-kwacha'              => 'Zambian Kwacha (ZMW)',
            ],

            'installation-processing' => [
                'krayin'       => 'Installation Krayin',
                'krayin-info'  => 'Creating the database tables, this can take a few moments',
                'title'        => 'Installation',
            ],

            'installation-completed' => [
                'admin-panel'                => 'Admin Panel',
                'krayin-forums'              => 'Krayin Forum',
                'customer-panel'             => 'Customer Panel',
                'explore-krayin-extensions'  => 'Explore Krayin Extension',
                'title'                      => 'Installation Completed',
                'title-info'                 => 'Krayin is Successfully installed on your system.',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Create the database table',
                'install'                 => 'Installation',
                'install-info'            => 'Krayin For Installation',
                'install-info-button'     => 'Click the button below to',
                'populate-database-table' => 'Populate the database tables',
                'start-installation'      => 'Start Installation',
                'title'                   => 'Ready for Installation',
            ],

            'start' => [
                'locale'        => 'Locale',
                'main'          => 'Start',
                'select-locale' => 'Select Locale',
                'title'         => 'Your Krayin install',
                'welcome-title' => 'Welcome to Krayin',
            ],

            'server-requirements' => [
                'calendar'    => 'Calendar',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'dom',
                'fileinfo'    => 'fileInfo',
                'filter'      => 'Filter',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'openssl',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'php'         => 'PHP',
                'php-version' => '8.1 or higher',
                'session'     => 'session',
                'title'       => 'System Requirements',
                'tokenizer'   => 'tokenizer',
                'xml'         => 'XML',
            ],

            'arabic'                   => 'Arabic',
            'back'                     => 'Back',
            'krayin'                   => 'Krayin',
            'krayin-info'              => 'a Community Project by',
            'krayin-logo'              => 'Krayin Logo',
            'bengali'                  => 'Bengali',
            'chinese'                  => 'Chinese',
            'continue'                 => 'Continue',
            'dutch'                    => 'Dutch',
            'english'                  => 'English',
            'french'                   => 'French',
            'german'                   => 'German',
            'hebrew'                   => 'Hebrew',
            'hindi'                    => 'Hindi',
            'installation-description' => 'Krayin installation typically involves several steps. Here\'s a general outline of the installation process for Krayin',
            'installation-info'        => 'We are happy to see you here!',
            'installation-title'       => 'Welcome to Installation',
            'italian'                  => 'Italian',
            'japanese'                 => 'Japanese',
            'persian'                  => 'Persian',
            'polish'                   => 'Polish',
            'portuguese'               => 'Brazilian Portuguese',
            'russian'                  => 'Russian',
            'sinhala'                  => 'Sinhala',
            'spanish'                  => 'Spanish',
            'title'                    => 'Krayin Installer',
            'turkish'                  => 'Turkish',
            'ukrainian'                => 'Ukrainian',
            'webkul'                   => 'Webkul',
        ],
    ],
];