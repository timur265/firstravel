<?php

require_once dirname(__DIR__) . '/config/init.php';//dirname тоже самое что и __DIR__ просто __DIR__  оканчивается на слэшь а dirname() нет
require_once LIBS . '/function.php';
require_once CONF . '/routes.php';
new \travel\App();