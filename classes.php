<?php
declare(strict_types=1);

class SuperHero{
    //propiedades y los métodos

    /* método tradicional de hacer un objeto
    public $name;
    public $planet;
    public $powers;


    public function __construct($name,$powers,$planet){
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;


    }
    */

    //promoted properties para hacer un objeto
    public function __construct(
        readonly public string $name,
        public array $powers,
        public string $planet
    ){}
    public function show_all(){

        return get_object_vars($this);
    }

    public function attack(){
        return "$this -> name ataca con sus poderes ";
    }

    public function description(){

        $powers = implode(",",$this->powers);
        return "$this->name es un superhéroe que viene de
        $this->planet y tiene los siguientes poderes:
        $powers";
    }

    public static function random() {
        $names = ['tho','spiderman','wolverine','deadpool'];
        $powers = [['volar','super fuerza', 'agilidad','telarañas','garras'],
        ['volar','super fuerza', 'agilidad','telarañas','garras'],
        ['volar','super fuerza', 'agilidad','telarañas','garras'],];
        $planets = ['tierra','kripton','marte','apocalipse'];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name,$power,$planet);

    }

}



//metodo estático
$hero = SuperHero::random();

echo $hero->description();

?>