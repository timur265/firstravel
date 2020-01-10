<?php


namespace app\controllers;


use app\models\AppModel;
use travel\App;
use travel\base\Controller;
use travel\Cache;

class AppController extends Controller
{

    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
    }
}
