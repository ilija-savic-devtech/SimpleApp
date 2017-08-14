<?php
/**
 * Created by PhpStorm.
 * User: ilija.savic
 * Date: 8/10/2017
 * Time: 2:40 PM
 */

namespace routes;


class Router
{

    private $_listUri = array();
    private $_listCall = array();
    private $_trim = '/\^$';

    public function add($uri, $function)
    {
        $uri = trim($uri, $this->_trim);
        $this->_listUri[] = $uri;
        $this->_listCall[] = $function;
    }


    public function listen()
    {
        $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
        $uri = trim($uri, $this->_trim);
        $replacementValues = array();

        foreach ($this->_listUri as $listKey => $listUri) {

            $id = intval(preg_replace('/[^0-9]+/', '', $uri), 10);
            $trimmedListUri = str_replace("{id}", $id, $listUri);

            if (preg_match("#^$trimmedListUri$#", $uri)) {
                $realUri = explode('/', $uri);
                $fakeUri = explode('/', $listUri);

                foreach ($fakeUri as $key => $value) {
                    if ($value == '{id}') {
                        $replacementValues[] = $realUri[$key];
                    }
                }
                call_user_func_array($this->_listCall[$listKey], $replacementValues);
            }
        }


        for ($i = 0; $i < count($this->_listUri); $i++) {
            if (preg_match("/\/\d+/", $uri)) {
                $trimmedUri = explode('/', $uri);
                if ($this->_listUri[$i] == $trimmedUri[0] . '/{id}') {
                    $this->_listUri[$i] = $uri;
                }
            }

        }

        if (!in_array($uri, $this->_listUri)) {
            echo "<h1><center>Invalid page!!!</center></h1>";
        }
    }
}