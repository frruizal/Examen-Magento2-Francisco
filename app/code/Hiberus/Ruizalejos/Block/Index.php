<?php

namespace Hiberus\Ruizalejos\Block;

use Hiberus\Ruizalejos\Api\ExamenRepositoryInterface;
use Hiberus\Ruizalejos\Model\Examen;
use Hiberus\Ruizalejos\Api\Data\ExamenInterfaceFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;


class Index extends \Magento\Framework\View\Element\Template
{
    protected $registry;
    protected $examen;
    protected $examenRepository;
    protected $examenInterfaceFactory;
    protected $examenResource;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        Examen $examen,
        ExamenRepositoryInterface $examenRepository,
        ExamenInterfaceFactory $examenInterfaceFactory,
        \Hiberus\Ruizalejos\Model\ResourceModel\Examen $examenResource,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->registry = $registry;
        $this->examen = $examen;
        $this->examenRepository = $examenRepository;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
        $this->examenResource = $examenResource;
        $this->scopeConfig= $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getAlumno() {

        //$crearAlumno = $this->insertAlumno('Francisco', 'Ruizalejos','10');
        $crearAlumno = $this->examenInterfaceFactory->create();


        //return $this->examenRepository->getById($crearAlumno);
        return $crearAlumno->getCollection();

    }

    public function getElements(){
        $elements = $this->scopeConfig->getValue('campos_nombre/general/campos_elementos',ScopeInterface::SCOPE_STORE);
        return $elements;
    }


    public function getNota(){
        $nota = $this->scopeConfig->getValue('campos_nombre/general/nota_elementos',ScopeInterface::SCOPE_STORE);

        return $nota;
    }

    /*public function insertAlumno($firstname, $surname, $mark) {

        $alumno = $this->examenInterfaceFactory->create();
        $alumno->setFirstname($firstname);
        $alumno->setLastname($surname);
        $alumno->setMark($mark);

        $this->examenResource->save($alumno);
        return $alumno->getEntityId();

    }*/

    public function max3notas($max1,$max2,$max3){
        $alumnos=$this->getAlumno();

        foreach($alumnos as $al) {
            //en este if calculo las 3 maximas notas
            if ($al->getMark() > $max1) {
                $max2 = $max1;
                $max1 = $al->getMark();
            } else {
                if ($al->getMark() > $max2) {
                    $max3 = $max2;
                    $max2 = $al->getMark();
                } else {
                    if ($al->getMark() > $max3) {
                        $max3 = $al->getMark();
                    }
                }
            }
        }
    }
}
