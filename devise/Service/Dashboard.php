<?php
    namespace xel\framework\Service;
    use xel\framework\Basedata\newsmodel;
    require_once __DIR__."/../../vendor/autoload.php";

    class Dashboard extends BaseService{
        public function __construct() {
            
            parent::__construct();
        }
        public function index()
        {
            $this->render('Dashboard');
        }

        public function iface_insert() {
            $this->render('crudnews/create');
        }

        public function insert(){
            //POST
            echo "</pre>";
            $data = [
                "title" => $_POST['title'],
                "content" => $_POST['content']
            ];
            $instance = new newsmodel();
            $instance->create($data);

            header("Location: /news/display");


        }

        public function iface_update() {
            $model = [];
            $data = $_GET['id'];
            $instance = new newsmodel();
            $model =  $instance->read_by_id($data);
            $this->render('crudnews/update',$model);
            var_dump($model);
        }

        public function update() {
            //POST
            $data = [
                'id' => $_POST['id'],
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ];
            
            // var_dump($data);
            $instance = new newsmodel();
            $instance->update($data);
        }

        public function read() {
            $instance = new newsmodel();
            $model = $instance->read();
            $this->render('crudnews/read', $model);          
        }

      
        public function delete() {
            $data = [
                "id" => $_GET['id']
            ];

            $instance = new newsmodel();
            $instance->delete($data);
            header("Location: /news/display");


        }
    }
 