<?php
class Stikline {

    public $turis;
    static public $drink = 'Pepsi'; //objektuose ju nera Static- tokio tipo savybe, kuri nepatenka i objekta ir pasilieka klaseje; ga;i buti ir private, tik tada objekte neissiechoinsim Stikline::$drink, et echo $kintamasis->$what paeis
    public static function valio(){ // statiniam nereikia objekto, jis gali pasileidineti ir be objekto; kartais klaseje buna tik funkcijos, kartais jos buna naudojimas objekto kurimui;
        echo '<h2>VALIO</h1>';
    }    // STATINIS METODAS
    public function __constructor(){
        $this->turis = rand(100, 200);
    }

    // funkcija, kuri is objekto vidaus pasiimti static:
    public function what (){
        echo '<br>--->'.self::$drink; //self-- tos klases statinis kintamasis; su private galime prieiti IS VIDAUS, 
    }
}