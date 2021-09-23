<?php

namespace Hiberus\Ruizalejos\Model\ResourceModel\Examen;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Hiberus\Ruizalejos\Model\Examen;
class Collection extends AbstractCollection
{
    protected function _construct(){
        $this->_init(Examen::class, \Hiberus\Ruizalejos\Model\ResourceModel\Examen::class);
    }
}
