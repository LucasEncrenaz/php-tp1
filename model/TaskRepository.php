<?php

class TaskRepository
{
    const TABLE = "tasks";

    public function Initialize(){
    }

    public function getAll()
    {
        $test = Database::getInstance()->query('SELECT * FROM ' . TaskRepository::TABLE . ' ORDER BY checked DESC');

        return $test;
    }

    public function update($id, $checked = false)
    {
    }

    public function add($description)
    {
    }

    public function delete($id)
    {
    }
}