<?php

return [
//    'class' => 'yii\db\Connection',
//    'dsn' => 'mysql:host=localhost;dbname=top_hotels',
//    'username' => 'root',
//    'password' => 'defender',
//    'charset' => 'utf8',

//    'dbSqlite' => [

        'class' => 'yii\db\Connection',
        'dsn' => 'sqlite:' . '/home/dmitriy/top_hotels.db',// realpath(__DIR__ . '/../../') . "/sqlite.db",
        'charset' => 'utf8',
        'enableSchemaCache' => true,
//    ],

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
