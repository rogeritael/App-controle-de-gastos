<?php
   
   class Project {
        private $project_id;
        private $project_name;
        private $user_id;
        private $db;

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        public function read(){
            $sql = "SELECT project_id, project_name, project_status FROM projects WHERE fk_user_id = 1";
            
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function selectProject(){
            $sqlErase = "UPDATE projects SET project_status = 0 WHERE fk_user_id = $this->user_id";
            $sql = "UPDATE projects SET project_status = 1 WHERE project_id = $this->project_id";
            
            $stmt = $this->db->prepare($sqlErase);
            $stmt->execute();
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }
    }
?>