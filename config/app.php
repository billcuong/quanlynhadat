<?php
return [
    
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),
    
    'App' => [
        'namespace' => 'App',
        'encoding' => env('APP_ENCODING', 'UTF-8'),
        'defaultLocale' => env('APP_DEFAULT_LOCALE', 'en_US'),
        'defaultTimezone' => env('APP_DEFAULT_TIMEZONE', 'UTC'),
        'base' => false,
        'dir' => 'src',
        'webroot' => 'webroot',
        'wwwRoot' => 'webroot',
        'fullBaseUrl' => false,
        'imageBaseUrl' => 'img/',
        'cssBaseUrl' => 'css/',
        'jsBaseUrl' => 'js/',
        'paths' => [
            'plugins' => [ROOT . DS . 'plugins' . DS],
            'templates' => [APP . 'Template' . DS],
            'locales' => [APP . 'Locale' . DS],
        ],
    ],
    
    'Security' => [
        'salt' => env('SECURITY_SALT', '4274e6db2905c1d35601e12361be5caecd37d9748e0a7b1bfd026f5d16326ae1'),
    ],
    
    
    'Asset' => [
        //'timestamp' => true,
        // 'cacheTime' => '+1 year'
    ],
    
    /**
     * Configure the cache adapters.
     */
    'Cache' => [
        'default' => [
            'className' => 'Cake\Cache\Engine\FileEngine',
            'path' => CACHE,
            'url' => env('CACHE_DEFAULT_URL', null),
        ],
        
        
        '_cake_core_' => [
            'className' => 'Cake\Cache\Engine\FileEngine',
            'prefix' => 'myapp_cake_core_',
            'path' => CACHE . 'persistent/',
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKECORE_URL', null),
        ],
        
        '_cake_model_' => [
            'className' => 'Cake\Cache\Engine\FileEngine',
            'prefix' => 'myapp_cake_model_',
            'path' => CACHE . 'models/',
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKEMODEL_URL', null),
        ],
        
        '_cake_routes_' => [
            'className' => 'Cake\Cache\Engine\FileEngine',
            'prefix' => 'myapp_cake_routes_',
            'path' => CACHE,
            'serialize' => true,
            'duration' => '+1 years',
            'url' => env('CACHE_CAKEROUTES_URL', null),
        ],
    ],
    
    'Error' => [
        'errorLevel' => E_ALL,
        'exceptionRenderer' => 'Cake\Error\ExceptionRenderer',
        'skipLog' => [],
        'log' => true,
        'trace' => true,
    ],
    
    'EmailTransport' => [
        'default' => [
            'className' => 'Cake\Mailer\Transport\MailTransport',
            'host' => 'localhost',
            'port' => 25,
            'timeout' => 30,
            'username' => null,
            'password' => null,
            'client' => null,
            'tls' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
    
    'Email' => [
        'default' => [
            'transport' => 'default',
            'from' => 'you@localhost',
        ],
    ],
    
    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'cms',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
            'quoteIdentifiers' => false,
            'url' => env('DATABASE_URL', null),
        ],
    ],
    
    /**
     * Configures logging options
     */
    'Log' => [
        'debug' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => 'debug',
            'url' => env('LOG_DEBUG_URL', null),
            'scopes' => false,
            'levels' => ['notice', 'info', 'debug'],
        ],
        'error' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => 'error',
            'url' => env('LOG_ERROR_URL', null),
            'scopes' => false,
            'levels' => ['warning', 'error', 'critical', 'alert', 'emergency'],
        ],
        // To enable this dedicated query log, you need set your datasource's log flag to true
        'queries' => [
            'className' => 'Cake\Log\Engine\FileLog',
            'path' => LOGS,
            'file' => 'queries',
            'url' => env('LOG_QUERIES_URL', null),
            'scopes' => ['queriesLog'],
        ],
    ],
    
    'Session' => [
        'defaults' => 'php',
    ],
];
