<?php
/**
 * Created by PhpStorm.
 * User: rubik
 * Date: 30/01/2019
 * Time: 13:59
 */

class CSVDatabase extends DatabaseInterface
{
    private $path;


    /**
     * @param $fieldNames
     * @param $dataArray
     * @return mixed
     */
    function addDataLine($fieldNames, $dataArray)
    {
        // TODO: Implement addDataLine() method.
    }

    /**
     * @param $fieldNames
     * @return mixed
     */
    function getDataLine($fieldNames)
    {
        // TODO: Implement getDataLine() method.
    }

    /**
     * @param the $name
     * @return mixed
     */
    protected function openDatabase($name)
    {
        // TODO: Implement openDatabase() method.
    }

    /**
     * @return mixed
     */
    protected function closeDataBase()
    {
        // TODO: Implement closeDataBase() method.
    }
}