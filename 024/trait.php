<?php
class Base {
    use SayJa, SayWord; //traitu kiekis yra neribota
    public function sayHello(){
      
        echo 'hello';
    }
}
trait SayJa {
    public function sayJa(){
        echo 'ja';
    }
}
trait SayWord {
    use SayUlala;
    public function sayBye(){
        echo 'bye';
    }
}
trait SayUlala {
    public function sayBye(){
        echo 'ulala';
    }
}
$o =  new Base;
// $o =  new SayWord; nepaeis

class ShutUp extends Base { // kai ir extendina ir paveldi funkcijas; tai su treitu yra pirmenybe, nes jis turetu buti suprastas kaip esantis klases viduje;
    use SSS;
}

trait SSS {
    function sayBye(){
        echo 'sss';
    }
}