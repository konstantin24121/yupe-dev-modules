<?php
return [
    'module'    => [
        'class' => 'application.modules.storeswap.StoreswapModule',
    ],
    'import'    => [
        'application.modules.storeswap.extensions.phpexcel.XPHPExcel'
    ],
    'component' => [],
    'rules'     => [
        '/exchange/index/<key>'=>'exchange1c/default/index',
        '/exchange/test-read/<size:\d+>'=>'exchange1c/default/testRead',
        '/exchange/<action:\w+>'=>'exchange1c/default/<action>',
    ],
];

?>