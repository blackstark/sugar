<?php

class K1_HouseController extends SugarController

{

    function action_My()

    {

        $this->view = 'my'; // указываем название view, которое хотим подгрузить

    }
    function action_tpl()
    {
        $this->view = 'tpl';
    }

}

?>