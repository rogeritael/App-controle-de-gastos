<?php
    require "App/db/db.php";
    // require "db/project.model.php";
    require "App/models/task.model.php";
    // require "db/user.model.php";

    $db = new Db();
    $task = new Task();

    $task->__set('db', $db->connect());
    $task->__set('taskId', 4);
    $task->__set('taskDescription', 'descrição modificada através do php');

    $task->update('description');
?>