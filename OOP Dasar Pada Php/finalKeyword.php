<?php
//method dan class yang ada final keyword tidak dapat di inheritance
final class myClass
{
    // final function myFunction()
    // {
    //     echo 'parent';
    // }
}

//error jika class yang di extends ada final keyword
class myClass2 extends myClass
{
    //tidak bisa pakai function yang sama jika ada keyword final
    // function myFunction(){
    //     echo 'child';
    // }
}
