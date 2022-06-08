<?php
interface Planas { // interface aprasoma funkcija neturi vidaus, negali tureti reiksmiu, bet gali tureti konstantas, konstanta pagal prigimti yra public
    const TU = 'as';
    function goForIt(array $go) : array; //negalima rasyti public, nesin ierface visos funkcijos yra public, nes privaciu is principo negali buti
}