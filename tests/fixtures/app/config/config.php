    <?php
if (!defined('APP_ROOT')) define('APP_ROOT', dirname(dirname(__DIR__)));

return array(
    'application' => array(
        'environment'    => \Vegas\Constants::TEST_ENV,
        'serviceDir'   =>  APP_ROOT . '/app/services/',
        'configDir'     => dirname(__FILE__) . DIRECTORY_SEPARATOR,
        'libraryDir'     => dirname(APP_ROOT) . DIRECTORY_SEPARATOR,
        'pluginDir'      => APP_ROOT . '/app/plugins/',
        'moduleDir'      => APP_ROOT . '/app/modules/',
        'baseUri'        => '/',
        'language'       => 'nl_NL',
        'view'  => array(
            'cacheDir'  =>  APP_ROOT . '/cache/',
            'layout'    =>  'main',
            'layoutsDir'    =>  APP_ROOT . '/app/layouts/',
        ),
    ),

    'plugins' => array(),

    'mongo' => array(
        'db' => 'vegas_test',
    ),
    
    'db' => [
        // php5_sqlite module has to be installed first
        'dbname'    => APP_ROOT . '/db/test.db',
        'charset'   => 'utf8'
    ],
    
    'profiler'  => [
        // Put all used profiler classes here
        '\Vegas\Profiler\DataCollector\Time',
        '\Vegas\Profiler\DataCollector\Components',
        '\Vegas\Profiler\DataCollector\Exception',
        '\Vegas\Profiler\DataCollector\Memory',
        '\Vegas\Profiler\DataCollector\Query',
        '\Vegas\Profiler\DataCollector\Request',
        '\Vegas\Profiler\DataCollector\Response',
        '\Vegas\Profiler\DataCollector\Superglobals',
    ]
);