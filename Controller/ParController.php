<?php

namespace Controller;

class ParController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function par($a, $b, $c) {

        $this->data("a", $a);
        $this->data("b", $b);
        $this->data("c", $c);

        $this->display("par");
    }

}