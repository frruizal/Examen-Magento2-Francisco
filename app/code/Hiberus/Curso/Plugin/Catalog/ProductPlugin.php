<?php

namespace Hiberus\Curso\Plugin\Catalog;

class ProductPlugin
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){

        $result = "Prueba de plugin";
        return $result;
    }
}
