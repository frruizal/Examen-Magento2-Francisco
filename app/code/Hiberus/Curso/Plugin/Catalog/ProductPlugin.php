<?php

namespace Hiberus\Curso\Plugin\Catalog;

use Magento\Catalog\Api\Data\BasePriceInterface;

class ProductPlugin
{
    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @param $result
     * @param $string
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){

        $result = "Prueba de plugin";
        return $result;
    }

}
