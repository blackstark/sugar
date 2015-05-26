<?php

class Model extends SugarView {
    function real_RealityViewMy()
    {
        parent::SugarView();
    }

    function display()
    {
        //echo 123;
    }

    function getBean($id){
        $real = new real_Reality();
        return $real->retrieve($id)->toArray();
    }
} 