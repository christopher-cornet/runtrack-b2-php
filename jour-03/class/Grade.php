<?php

class Grade {

    private $id;
    private $grade_id;
    private $title;
    private $date;

    public function __construct(int $id = null, int $grade_id = null, string $title = null, $date = null) {

        public function getId(int $id) {
            $this->id = $id;
        }

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getGradeId(int $grade_id) {
            $this->grade_id = $grade_id;
        }

        public function setGradeId(int $grade_id) {
            $this->grade_id = $grade_id;
        }   

        public function getTitle(string $title) {
            $this->title = $title;
        }

        public function setTitle(string $title) {
            $this->title = $title;
        }

        public function getDate($date) {
            $this->date = $date;
        }

        public function setDate($date) {
            $this->date = $date;
        }
                
    }

}

?>