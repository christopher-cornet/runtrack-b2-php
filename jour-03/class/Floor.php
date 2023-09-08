<?php

class Floor {

    private $id;
    private $fullname;
    private $num;

    public function __construct(int $id = null, string $fullname = null, int $num = null) {

        public function getId(int $id) {
            $this->id = $id;
        }

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getFullname(string $fullname) {
            $this->fullname = $fullname;
        }

        public function setFullname(string $fullname) {
            $this->fullname = $fullname;
        }

        public function getNum(int $num) {
            $this->num = $num;
        }

        public function setNum(int $num) {
            $this->num = $num;
        }

    }

}

?>