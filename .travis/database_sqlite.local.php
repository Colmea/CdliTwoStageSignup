<?php

return array(
    'cdli-twostagesignup-test' => array(
        'database_schema_up'   => 'schema_up.sqlite.sql',
        'database_schema_down' => 'schema_down.sql',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => function ($sm) {
                return new Zend\Db\Adapter\Adapter(array(
                    'driver'    => 'Pdo',
                    'dsn'       => 'sqlite::memory',
                ));
            },
        ),
    ),
);
