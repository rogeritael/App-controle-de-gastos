<?php
    class Task {
        private $taskId;
        private $taskName;
        private $taskDescription;
        private $projectId;
        private $db;

        public function __set($key, $value){
            $this->$key = $value;
        }

        public function create(){
            $sql = "INSERT INTO tasks(task_name, task_description, fk_project_id) VALUES(:taskName, :taskDescription, :projectId)";
            
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':taskName', $this->taskName);
            $stmt->bindValue(':taskDescription', $this->taskDescription);
            $stmt->bindValue(':projectId', $this->projectId);
            $stmt->execute();
        }

        public function delete(){
            $sql = "delete from tasks where task_id = :taskId";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':taskId', $this->taskId);
            $stmt->execute();
        }

        public function read(){
            $sql = "SELECT task_id, task_name, task_description FROM tasks WHERE fk_project_id = $this->projectId";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            
            $tasks = $stmt->fetchAll();
            return $tasks;
        }

        public function update($par){
            if($par == 'name'){
                $sql = "UPDATE tasks SET task_name = '$this->taskName' WHERE task_id = $this->taskId";
            } elseif($par == 'description'){
                $sql = "UPDATE tasks SET task_description = '$this->taskDescription' WHERE task_id = $this->taskId";
            }

            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }


    }
?>