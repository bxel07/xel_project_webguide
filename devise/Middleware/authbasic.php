<?php
     namespace xel\framework\Middleware;

use phpDocumentor\Reflection\Types\Null_;
use xel\framework\Middleware\Middleware;
     use xel\framework\Devise\CSRFToken as Token;

    class authbasic implements Middleware{
        public function before():void{
            if(isset($_POST['submit'])) {
                header('Location:/news/display');
            }
      
        }
    }