<?php

class TaskRepository
{
    const TABLE = "tasks";

    public function Initialize(){
    }

    public function getAll()
    {
        $reqGetAll = Database::getInstance()->query('SELECT * FROM ' . TaskRepository::TABLE . ' ORDER BY checked DESC');

        return $reqGetAll;
    }

    public function update($id, $checked = false)
    {


    }

    public function add($description)
    {
        $reqInsert = Database::getInstance()->query("INSERT INTO ".TaskRepository::TABLE." (name) VALUES('".$description."')");
        return $reqInsert;

    }

    public function delete($id)
    {
        $reqDelete = Database::getInstance()->query("DELETE FROM ".TaskRepository::TABLE." WHERE id=".$id);
        return $reqDelete;

    }
}