<?php
require_once "db.php";
$DB = new DBConnection();


class CRUD
{
    public function Select($table, $multi = false, $column = "*", $arr = [], $con = null)
    {
        global $DB;
        $slc = $DB->prepare("SELECT $column FROM $table $con");
        $slc->execute($arr);
        return $multi ? $slc->fetchAll(PDO::FETCH_ASSOC) : $slc->fetch(PDO::FETCH_ASSOC);
    }
}