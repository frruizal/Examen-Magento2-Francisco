<?php

namespace Hiberus\Curso\Plugin\Catalog;

class PricePlugin
{

/**
* @param \Magento\Catalog\Model\Product\Price $subject
* @param $result
* @param $string
*/
public function afterGetDisplayValue(\Magento\Framework\Pricing\Render\Amount $subject, $result)
{
    $ud = '/ud';
    
return $result. getDisplayValue(escapeHtmlAttr($ud));
}
}