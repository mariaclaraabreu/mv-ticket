<?php

require_once('simpletest/src/autorun.php');

require_once('../controller/MovieController.php');

/**
 * SimpleTest exige que o nome da classe comece com "Test"
 * Pra rodar é apenas digitar o caminho da classe no navegador que o simpleTest executa
 */
class TestMovieController extends UnitTestCase {

    function testComDataForaDaQuinta() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '2019-11-30', '17:00', '01:45', 1);
        $this->assertFalse($result);
    }

    function testComHorarioNaoPermitidoMais() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '2019-11-28', '23:00', '01:45', 1);
        $this->assertFalse($result);
    }

    function testComHorarioNaoPermitidoMenos() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '2019-11-28', '8:00', '01:45', 1);
        $this->assertFalse($result);
    }

    function testComDataAntesDeSeteDias() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '2019-11-28', '23:00', '01:45', 1);
        $this->assertFalse($result);
    }

    function testHorarioUltrapassandoPermitido() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '2019-11-28', '21:00', '02:45', 1);
        $this->assertFalse($result);
    }

    function testSucesso() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Goku', '2019-11-14', '18:00', '01:45', 1);
        $this->assertTrue($result);
    }

    function testMesmaSalaMesmoHorario() {
        $controller = new MovieController;
        $result = $controller->takeDatasMovieController('Vingaores', '2019-11-14', '18:00', '01:45', 1);
        $this->assertFalse($result);
    }

}