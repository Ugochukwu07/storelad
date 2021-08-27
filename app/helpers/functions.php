<?php

class AddApp{
    public function includes($fileName, $title = '', $page = ''){
        include(ROOT_PATH . '/app/includes/' . $fileName);
    }
    public function controllers($fileName){
        include(ROOT_PATH . '/app/controllers/' . $fileName);
    }
    public function models($fileName){
        include(ROOT_PATH . '/app/models/' . $fileName);
    }
    public function helpers($fileNames){
        foreach($fileNames as $fileName){
            include(ROOT_PATH . '/app/helpers/' . $fileName);
        }
    }
    public function database($fileName){
        include(ROOT_PATH . '/app/database/' . $fileName);
    }
}

class others{
    public function definer($data) {
        foreach ($data as $key => $value) {
            define($key, $value);
        }
    }
}