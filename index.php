<?php
class KalkulatorSuhu {

    public function celciusKeFahrenheit($c) {
        return ($c * 9/5) + 32;
    }

    public function celciusKeKelvin($c) {
        return $c + 273;
    }

    public function fahrenheitKeCelcius($f) {
        return ($f - 32) * 5/9;
    }
}


$suhu = new KalkulatorSuhu();

$celcius = 30;
$fahrenheit = 86;

echo "Celcius ke Fahrenheit: " . $suhu->celciusKeFahrenheit($celcius) . " °F<br>";
echo "Celcius ke Kelvin: " . $suhu->celciusKeKelvin($celcius) . " K<br>";
echo "Fahrenheit ke Celcius: " . $suhu->fahrenheitKeCelcius($fahrenheit) . " °C<br>";
?>
