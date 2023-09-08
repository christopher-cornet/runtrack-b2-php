<?php

class Room {

    private $id;
    private $grade_id;
    private $fullname;
    private $squaremeter;

    public function __construct(int $id = null, int $grade_id = null, string $fullname = null, int $squaremeter = null) {

        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->fullname = $fullname;
        $this->squaremeter = $squaremeter;

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

        public function getFullname(string $fullname) {
            $this->fullname = $fullname;
        }

        public function setFullname(string $fullname) {
            $this->fullname = $fullname;
        }

        public function getSquaremeter(string $squaremeter) {
            $this->squaremeter = $squaremeter;
        }

        public function setSquaremeter(string $squaremeter) {
            $this->squaremeter = $squaremeter;
        }
                
    }

}

?>