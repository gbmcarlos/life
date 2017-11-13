<?php
/**
 * Created by PhpStorm.
 * User: gbmcarlos
 * Date: 11/12/17
 * Time: 12:21 PM
 */

namespace App\services;


interface GameDrawerInterface {

    public function drawPopulation($grid = []) : \SplTempFileObject;

    public function drawGame($gridIterations = []) : \SplTempFileObject;

}