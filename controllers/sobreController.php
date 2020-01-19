<?php
    class sobreController extends controller {

        public function index() {
            $dados = array();

            $this->loadView("sobre", $dados);
        }
    }
?>