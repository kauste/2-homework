<?php
class Bebras { 
    public $tail = 'Long'; // prieinamumo deklaracija; default yra public, taciau reiketu sudeklaruoti; funkcijos cia negalimos; cia paprasta deklaracija;
    private $age = 23; // del to, kad klases viduje galetume panaudoti
                        //funkcijos tai metodai, nes jos totaliai vidines; turi tris tokias pacias rusis
    private $name, $children; // jei kintamasis to paties tipo, per kableli galima surasyti

    public function __construct(string $n, array $c){ // pasileidzia panaudojus zodi new
        echo '<br> magic construct <br>';
        $this -> whatIsYourAge();
        $this -> age = rand(10, 200); // labai naudinga pradiniam nustatymui, pvz galim contrukcte prideti random
        $this -> whatIsYourAge();
        $this ->name = $n;
        $this -> children = $c;
    }
    public function __destruct(){ // pasileidzia kai is atminties pasalinamas paskutinis kintamasis, leidziantis ta objekta
        echo '<br>magic visi mire<br>'; // pasileidzia kai pasibaigiai skripto veikimas; po fatal error marinami visi objektai; kai kreipiames i neegzidtyojancia ar uz matomumo ribu esancia savybe
    }
    public function __get($what){ //butinas argumentas Ka gettint
        echo '<br> magic get '. $what . ' '// daznia naudojama privaciu kintamuju parodymui
        . ($this-> $what) .'<br>';
        echo 'Nieko nera namie';
    }    
    public function __set($where, $what){ // pasileidzia kai i neegistuojancia arba privat savybe norim irasyti kanors
        echo '<br> magic get'.$where, $what.' <br>';
    }         
    
    
    public function whatIsYourAge(){ // GETTER - funkcija, kuri mums kanors duoda. tai vienintelis budas neredaguoti ISOREJE savybiu
        echo '<br>'. (++$this-> age) .'<br>'; //this, reiskia kintamajam, kad atiduotu, kruiam priskirsiu; negalima redaguoti, tai 
    }


    public function changeAge(int $age){ //SETTER pagrindine funkcija yra kontrole,kad norim, kad kazka keistu, bet nenusisneketu
        if($age > 25){  //int nes reikia tikrinti tipa, ka iveda; tai STRONG typingas
            return;
        }  
        $this-> age = $age;
    }


public function changeAge2(array $age){ //SETTER pagrindine funkcija yra kontrole,kad norim, kad kazka keistu, bet nenusisneketu
    if($age[0] > 25){  //int nes reikia tikrinti tipa, ka iveda; tai STRONG typingas
        return;
    }
    
    $this-> age = $age[0];
}
}
// kllases gali tureti vidinius kintamuosius. Vidiniu kintamuju yra 3 rusys: tos pacios rusys ir funkcijoms;
// * public - jei yra idetas public kintamasis, reiskia, kad betkas gali issinesti ta kintamaji, yra pasiekiamas visiems
// * protected - gali paimti tik ""seimos"
// * private - niekas snegali paimti kintamojo, tai privatu
//** dar yra readonly, bet ji totaliai nauja

//naudoti tipa, tam, kad butu aisku, koks jo tipas