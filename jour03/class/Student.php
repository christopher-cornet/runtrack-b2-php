<?php

class Student {

    public $id;
    public $grade_id;
    public $email;
    public $fullname;
    public $birthdate;
    public $gender;

    public function __construct(int $id = null, int $grade_id = null, string $email = null, string $fullname = null, $birthdate = null, string $gender = null) {

        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;

    }

}

?>