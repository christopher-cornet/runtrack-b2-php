<?php

class Student {

    private $id;
    private $grade_id;
    private $email;
    private $fullname;
    private $birthdate;
    private $gender;

    public function __construct(int $id = null, int $grade_id = null, string $email = null, string $fullname = null, $birthdate = null, string $gender = null) {

        public function getId(int $id) {
            $this->id = $id;
        }

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getGradeId(int $id) {
            $this->id = $id;
        }

        public function setGradeId(int $id) {
            $this->id = $id;
        }

        public function getEmail(int $id) {
            $this->id = $id;
        }

        public function setEmail(int $id) {
            $this->id = $id;
        }

        public function getFullname(string $fullname) {
            $this->fullname = $fullname;
        }

        public function setFullname(string $fullname) {
            $this->fullname = $fullname;
        }

        public function getBirthdate(string $birthdate) {
            $this->birthdate = $birthdate;
        }

        public function setBirthdate(string $birthdate) {
            $this->birthdate = $birthdate;
        }

        public function getGender(string $gender) {
            $this->gender = $gender;
        }

        public function setGender(string $gender) {
            $this->gender = $gender;
        }

    }

}

?>