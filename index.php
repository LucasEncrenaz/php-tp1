<?php
require __DIR__ . "/vendor/autoload.php";
use App\model\Database;
use App\model\TaskRepository;
define("DATABASE_FILE", "./data.db");
$table = "tasks";
$tasks = [];

Database::initialize(DATABASE_FILE);
$taskRepository = new TaskRepository();
$taskRepository->initialize();

require './template.php';
?>