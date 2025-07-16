<?php

interface DatabaseInterface {
    public function InsertData($data);
    public function DeleteData($condition);
    public function ReadData($columns , $condition);
    public function UpdateData($data , $condition);


    public function excute();
}












?>