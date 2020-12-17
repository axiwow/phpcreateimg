<?php
class Tool{
    public function load($class_name,$ext = '.class.php'){
        if(file_exists($class_name.$ext)){
            require_once($class_name.$ext);
        }else{
            throw new Exception('类名不存在');
        }
    }
}