<?php 

namespace App\Application\Models;
use RedBeanPHP\simpleModel;
use App\Application\models;


class Wine extends SimpleModel{

    //Validations
    public function update(){

        if( is_null($this->year ) ){
            throw new \Exception ('Year is mandatory!');
        }
    }

}

?>