<?php

if (isset($_ENV['CLEARDB_DATABASE_URL'])) {
     $db = \atk4\data\Persistence::connect($_ENV['CLEARDB_DATABASE_URL']);
 } else {
     $db = \atk4\data\Persistence::connect('mysql:host=127.0.0.1;dbname=colibri_clicker;charset=utf8', 'root', '');
 }


class User extends \atk4\data\Model {
    public $table = 'user_pon4ik';
    function init() {
        parent::init();
        $this->addField("nickname");
        $this->addField("name");
        $this->addField("surname");
        $this->addField("email");
        $this->addField("clicker_count",["default"=>0]);
        $this->addField("password");
    }
}
