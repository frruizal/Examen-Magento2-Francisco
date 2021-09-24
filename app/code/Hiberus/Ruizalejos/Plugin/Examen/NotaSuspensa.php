<?php

namespace Hiberus\Ruizalejos\Plugin\Examen;

class NotaSuspensa
{

    public function afterGetMark(\Hiberus\Ruizalejos\Model\Examen $subject, $result){
        if( $result<5){
           /* $subject->setMark(4.9);
            $result= $subject->getMark();*/
            $result=4.9;
        }
        return $result;
    }
}
