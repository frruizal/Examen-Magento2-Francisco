<?php

namespace Hiberus\Curso\Plugin\Catalog;

use Hiberus\Curso\Model\Author;
use Magento\Catalog\Api\Data\BasePriceInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class ProductPlugin
{
    /**
     * @var ScopeConfigInterface
     */
    protected ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    protected Author $author;
    public function __construct(ScopeConfigInterface $scopeConfig, Author $author)
    {
        $this->scopeConfig = $scopeConfig;
        $this->author = $author;
    }

    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @param $result
     * @param $string
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result): string
    {

//       $nombreGeneral = $this->scopeConfig->getValue('hiberus_nombre/general/nombre_general',
//           ScopeInterface::SCOPE_STORE);
//        $result = $result . " " . $nombreGeneral;

        $result = $result . " " . $this->author->getAuthorName();
        return $result;
    }

}
