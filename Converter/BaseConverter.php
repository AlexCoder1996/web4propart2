<?php

class BaseConverter {

  private $result;
  private $temperature;

  function convert($temperature) {}

  function printConvertedResult() {}

}

class ConverterToFahrenheit extends BaseConverter {

  public function convert($temperature) {
    $this->temperature = $temperature;
    $this->result = $temperature * 1.8 + 32;
  }

  public function printConvertedResult(){
    echo $this->temperature . ' °С = ' . $this->result . ' °F';
  }

}

class ConverterToKelvin extends BaseConverter {

  public function convert($temperature) {
    $this->temperature = $temperature;
    $this->result = $temperature + 273.15;
  }

  public function printConvertedResult(){
    echo $this->temperature . ' °С = ' . $this->result . ' °K';
  }

}

class ConverterToRankine extends BaseConverter {

  public function convert($temperature) {
    $this->temperature = $temperature;
    $this->result = ($temperature + 273.15) * 9 / 5;
  }

  public function printConvertedResult(){
    echo $this->temperature . ' °С = ' . $this->result . ' °Ra';
  }

}

$converter1 = new ConverterToFahrenheit();
$converter1->convert(10);
$converter1->printConvertedResult(); // 10 °С = 50 °F

$converter2 = new ConverterToKelvin();
$converter2->convert(10);
$converter2->printConvertedResult(); // 10 °С = 283.15 °K

$converter3 = new ConverterToRankine();
$converter3->convert(10);
$converter3->printConvertedResult(); // 10 °С = 509.67 °Ra


