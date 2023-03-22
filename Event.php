<?php 

class Event {

    //variables 

    public $id;
    public $eventName;
    public $eventDescription;

    public $eventPresenter;


    function __construct(){
        $id = "ID";
        $eventName = "Event name";
     $eventDescription= "Event description";

     $eventPresenter= "Event presenter";
    }


    function set_eventName($inName){

        $this -> eventName = $inName;

    }

    function get_eventName() {

        return $this -> eventName;
    }

}

?>