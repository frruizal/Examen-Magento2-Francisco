<?php

namespace Hiberus\Ruizalejos\Model;

use Magento\Framework\Model\AbstractModel;

class Examen extends AbstractModel implements \Hiberus\Ruizalejos\Api\Data\ExamenInterface
{
    /**
     *
     */
    public function _construct(){
        $this->_init(\Hiberus\Ruizalejos\Model\ResourceModel\Examen::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdExam()
    {
        return $this->getData('id_exam');
    }

    /**
     * @inheritDoc
     */
    public function setIdExam($idExam)
    {
        return $this->setData('id_exam',$idExam);
    }

    /**
     * @inheritDoc
     */
    public function getFirstname()
    {
        return $this->getData('firstname');
    }

    /**
     * @inheritDoc
     */
    public function setFirstname($firstname)
    {
        return $this->setData('firstname',$firstname);
    }

    /**
     * @inheritDoc
     */
    public function getLastname()
    {
        return $this->getData('lastname');
    }

    /**
     * @inheritDoc
     */
    public function setLastname($lastname)
    {
        return $this->setData('lastname',$lastname);
    }

    /**
     * @inheritDoc
     */
    public function getMark()
    {
        return $this->getData('mark');
    }

    /**
     * @inheritDoc
     */
    public function setMark($mark)
    {
        return $this->setData('mark',$mark);
    }

}
