<?php

require_once('simpletest/src/autorun.php');

require_once('../controller/MovieController.php');

/**
 * SimpleTest exige que o nome da classe comece com "Test"
 */
class TestMovieController extends UnitTestCase {

    function testComDataForaDaQuinta() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '30-11-2019', '17:00', 2);
        $this->assertFalse($result);
    }

    function testComHorarioNaoPermitidoMais() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '28-11-2019', '23:00', 2);
        $this->assertFalse($result);
    }

    function testComHorarioNaoPermitidoMenos() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '28-11-2019', '8:00', 2);
        $this->assertFalse($result);
    }

    function testComDataAntesDeSeteDias() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '30-10-2019', '23:00', 2);
        $this->assertFalse($result);
    }

    function testHorarioUltrapassandoPermitido() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '28-11-2019', '21:00', 3);
        $this->assertFalse($result);
    }

    function testSucesso() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '28-11-2019', '19:00', 2);
        $this->assertTrue($result);
    }

}