<?php

class Floor {

    public $id;
    public $fullname;
    public $num;

    public function __construct(int $id = null, string $fullname = null, string $num = null) {

        $this->id = $id;
        $this->fullname = $fullname;
        $this->num = $num;

    }

}

?>