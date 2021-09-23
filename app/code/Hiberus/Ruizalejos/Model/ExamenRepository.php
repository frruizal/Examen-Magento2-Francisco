<?php

namespace Hiberus\Ruizalejos\Model;
use Hiberus\Ruizalejos\Api\ExamenRepositoryInterface;
use Hiberus\Ruizalejos\Api\Data\ExamenInterface;
use Magento\Framework\Exception\CouldNotSaveException;


class ExamenRepository implements ExamenRepositoryInterface
{

    protected ResourceModel\Examen $resourceExamen;
    protected \Hiberus\Ruizalejos\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory;

    /**
     * @param ResourceModel\Examen $resourceExamen
     * @param \Hiberus\Ruizalejos\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory
     */
    public function __construct(
        \Hiberus\Ruizalejos\Model\ResourceModel\Examen      $resourceExamen,
        \Hiberus\Ruizalejos\Api\Data\ExamenInterfaceFactory $examenInterfaceFactory
    )
    {
        $this->resourceExamen = $resourceExamen;
        $this->examenInterfaceFactory = $examenInterfaceFactory;
    }

    /**
     * @param ExamenInterface $examen
     * @return ExamenInterface
     * @throws CouldNotSaveException
     */
    public function save(
        ExamenInterface $examen
    )
    {

        try {
            $this->resourceExamen->save($examen);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }

        return $examen;

    }

    /**
     * @param $idExam
     * @return mixed
     */
    public function getIdExam($idExam)
    {
        try {
            $examen = $this->examenInterfaceFactory->create();
            $examen->setIdExam($idExam);
            $this->resourceExamen->load($examen, $idExam);
        } catch (\Exception $e) {
            $examen = $this->examenInterfaceFactory->create();
        }

        return $examen;
    }

    /**
     * @param \Hiberus\Ruizalejos\Api\Data\ExamenInterface $examen
     * @return bool
     */
    public function delete(\Hiberus\Ruizalejos\Api\Data\ExamenInterface $examen)
    {
        try {
            $this->resourceExamen->delete($examen);
        } catch (\Exception $e) {

            return false;
        }

        return true;
    }

    /**
     * @param int $idExam
     * @return bool
     */
    public function deleteById($idExam)
    {
        return $this->delete($this->getIdExam($idExam));
    }

}
