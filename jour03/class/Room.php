<?php

class Room {

    public $id;
    public $grade_id;
    public $fullname;
    public $squaremeter;

    public function __construct(int $id = null, int $grade_id = null, string $fullname = null, int $squaremeter = null) {

        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->fullname = $fullname;
        $this->squaremeter = $squaremeter;
                
    }

}

?>