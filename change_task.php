<?php

$taskId = $_GET['task_id'];
$db = new SQLite3('db/todo.db');

// Get task data dari Database
$statement = $db->prepare("SELECT * from tasks where id = :task_id");
$statement->bindValue("task_id", $taskId);
$results = $statement->execute();

// Check, apakah ada result?
if ($results->fetchArray() == false) {
    echo "Task tidak ditemukan";
    header('refresh:1; url=index.php');
}

// Update task is_done = 1 atau is_done = 0
while ($row = $results->fetchArray()) {
    var_dump($row);

    //@TODO: Update is_done pada sebuah task di database
}