<?php
    namespace routes;
    use classes\Professor;
    use classes\Student;

    class Route{
        private $_uri = array();
        private $_logic;

        public function __construct(RouteLogic $logic){
            $this->_logic = $logic;
        }

        public function add($uri){
            $this->_uri[] = $uri;
        }

        public function submit(){
            $uriParam = $_SERVER['REQUEST_URI'];
            $this->_logic->showDetails($uriParam, $this->_uri);
        }

    }


?>