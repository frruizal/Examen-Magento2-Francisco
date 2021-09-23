<?php

namespace Hiberus\Ruizalejos\Api\Data;

interface ExamenInterface
{
    const TABLE_NAME= 'hiberus_exam';
    const COLUMN_ID = 'id_exam';

    /**
     * @return int
     */
    public function getIdExam();

    /**
     * @param $idExam
     * @return int
     */
    public function setIdExam($idExam);

    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @param $firstname
     * @return string
     */
    public function setFirstname($firstname);

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @param $lastname
     * @return string
     */
    public function setLastname($lastname);

    /**
     * @return float
     */
    public function getMark();

    /**
     * @param $mark
     * @return float
     */
    public function setMark($mark);
}
