<?php
class MarsoPalydovas{
    private static $palydovai = [];
    private $title;
    public $id = 0;

    private function __construct (){
        if(count(self::$palydovai) == 0){
            $this -> title = 'Deimas';
        }
        if (count(self::$palydovai) == 1){
            $this -> title = 'Fobas';
        }
    }
    public static function create() {
        if(count(self::$palydovai) == 0){
            $pirmas = new self;
            (self::$palydovai)[] = $pirmas;
            return $pirmas;
            
        } elseif (count(self::$palydovai) == 1){
            $antras = new self; 
            (self::$palydovai)[] = $antras;
            return $antras;
        }
        else {
            return self::$palydovai[rand(0,1)];
        }
    }
    private function __clone(){ 

    }
    public function __sleep(){
        die;
    }
}

//Sukurkite klasę MarsoPalydovas.  Kontroliuokite objekto kūrimą iš klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima sukurti tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite privačią savybę title lygią stringui “Deimas”, o antram tokią pat savybę tik lygią stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka.