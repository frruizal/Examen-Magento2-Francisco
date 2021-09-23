<?php

namespace Hiberus\Ruizalejos\Block;

use Hiberus\Ruizalejos\Api\ExamenRepositoryInterface;
use Hiberus\Ruizalejos\Model\Examen;
use Hiberus\Ruizalejos\Api\Data\ExamenInterfaceFactory;


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
        array $data = []
    ) {
        $this->registry = $registry;
        $this->examen = $examen;
      //  $this->examenRepository = $examenRepository;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
        $this->examenResource = $examenResource;
        parent::__construct($context, $data);
    }

    public function getAlumno() {

        //$crearAlumno = $this->insertAlumno('Francisco', 'Ruizalejos','10');
        $crearAlumno = $this->examenInterfaceFactory->create();


        //return $this->examenRepository->getById($crearAlumno);
        return $crearAlumno->getCollection();

    }

    /*public function insertAlumno($firstname, $surname, $mark) {

        $alumno = $this->examenInterfaceFactory->create();
        $alumno->setFirstname($firstname);
        $alumno->setLastname($surname);
        $alumno->setMark($mark);

        $this->examenResource->save($alumno);
        return $alumno->getEntityId();

    }*/
}
