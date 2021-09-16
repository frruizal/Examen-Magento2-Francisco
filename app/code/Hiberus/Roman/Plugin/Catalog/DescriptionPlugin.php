<?php

namespace Hiberus\Roman\Plugin\Catalog;

use Magento\Catalog\Api\Data\BasePriceInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class DescriptionPlugin
{
    /**
     * @var ScopeConfigInterface
     */
    protected ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;

    }

    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @param $result
     * @param $string
     */

    public function afterLoad(\Magento\Catalog\Model\Product $subject, $result)
    {
       $nombreGeneral = $this->scopeConfig->getValue('hiberus_description/general/description_general','hiberus_description/general/num_general', ScopeInterface::SCOPE_STORE);
        $result->setDescription($nombreGeneral);
        return $result;
    }

}
