<?php

require_once('simpletest/src/autorun.php');

require_once('../controller/MovieController.php');
require_once('../model/Movie.php');

/**
 * SimpleTest exige que o nome da classe comece com "Test"
 */
class TestMovieController extends UnitTestCase {

    private $dados = ['Carnaval da grethen', '30-11-2019', '23:00', 2];
    // TODO testes
    function testCriacaoDeObjeto() {
        $filme = new Movie($this->dados[0], $this->dados[1], $this->dados[2], $this->dados[3]);
        $controller = new MovieController;
        $result     = $controller->takeDatasMovieController($this->dados[0], $this->dados[1], $this->dados[2], $this->dados[3]);
        $this->assertClone($result, $filme);
    }

}