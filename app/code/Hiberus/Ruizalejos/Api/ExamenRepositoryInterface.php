<?php

namespace Hiberus\Ruizalejos\Api;

interface ExamenRepositoryInterface
{
    /**
     * @param \Hiberus\Ruizalejos\Api\Data\ExamenInterface $examenInterface
     * @return \Hiberus\Ruizalejos\Api\Data\ExamenInterface
     */
    public function save(\Hiberus\Ruizalejos\Api\Data\ExamenInterface $examenInterface);

    /**
     * @param $idExam
     * @return \Hiberus\Ruizalejos\Api\Data\ExamenInterface
     */
    public function getIdExam($idExam);

    /**
     * @param \Hiberus\Ruizalejos\Api\Data\ExamenInterface $examenInterface
     * @return bool
     */
    public function delete(\Hiberus\Ruizalejos\Api\Data\ExamenInterface $examenInterface);

    /**
     * @param $idExam
     * @return bool
     */
    public function deleteById($idExam);
}
