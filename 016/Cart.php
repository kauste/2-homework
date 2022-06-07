<?php
//singletone- tai pats paprasciausias patternas
//patternai- tai tam tikri principai, skirti spresti labiausiai paplitusias problemas;
//https://refactoring.guru/design-patterns/php   VISIEM ISKYLA SIOS PROBLEMOS, PASISKAITYTI
class Cart {
    public $id;
    static private $cart;
    const BAD = 'klasine konstanta'; //ji iskart static;gali buti ir private:: viduj pasiekiama self::BAD
    static public function create (){
        return self::$cart ?? $cart = new self;
    }
    private function __constructor(){
        $this -> id = rand(1000, 9999);
    }
    private function __clone(){ //uzdraudziam klonuoti, nes yra privati

    }
    private function __sleep(){
        die;
        }//uzdraudziam miegoti, nes yra privati
    private function __wakeup(){}//uzdraudziam prisikelti, nes yra privati
    
}

//php viduje turi buda objektus paversti i stringus