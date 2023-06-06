<?php
    namespace xel\framework\Service;
    use xel\framework\Basedata\newsmodel;
    // require_once __DIR__."/../../vendor/autoload.php";

    class HomeController extends BaseService{
        public function index()
        {
            $model = [];
            $instance = new newsmodel();
            $model = $instance->read();

            $this->render('index', $model);
        }
    }
