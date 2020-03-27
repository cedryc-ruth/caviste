<?php 

namespace App\Application\Models;
use RedBeanPHP\simpleModel;


class Wine extends SimpleModel{

    //Validations
    public function update(){

        if(is_null($this->year)){
            trow new Exception ('Year is mandatory');
        }
    }

}

?>