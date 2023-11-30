<?php


class Laptop{
    private string $color="zwart";
    private string $name;

    // @param string
    // @return void

    function set_name(string $name='macbook'){
        $this->name = $name;
        return $this->name;
    }

    // @return string

    function get_name(): string{
        return $this->name;
    }
}

$mijnlaptop = new Laptop();
$mijnlaptop->set_name('windows');


echo $mijnlaptop->get_name();

class Fles{
    private string $color="white";
    private string $name;

    // @param string
    // @return void

    function set_name(string $name='spa blauw flex=s'){
        $this->name = $name;
        return $this->name;
    }

    // @return string

    function get_name(): string{
        return $this->name;
    }
}


$mijnfles = new Fles(); 
$mijnfles->set_name('chaundifote');


echo $mijnfles->get_name();