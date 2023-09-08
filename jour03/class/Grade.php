<?php

class Grade {

    public $id;
    public $grade_id;
    public $title;
    public $date;

    public function __construct(int $id = null, int $grade_id = null, string $title = null, $date = null) {

        $this->id = $id;
        $this->grade_id = $grade_id;
        $this->title = $title;
        $this->date = $date;
                
    }

}

?>