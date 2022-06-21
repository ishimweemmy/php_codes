<?php

class Calc {
    public $operator;
    public $number1;
    public $number2;

    public function __construct(string $operator, int $number1, int $number2) {
        $this->operator = $operator;
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function calculator() {
        switch($this->operator) {
            case 'subtraction':
                return $this->number1 - $this->number2;
                break;
            case 'addition':
                return $this->number1 + $this->number2;
                break;
            case 'division':
                try{
                    return $this->number1 / $this->number2;
                } catch(DivisionByZeroError $e) {
                    echo "Error!";
                }
                break;
            case 'multiplication':
                return $this->number1 * $this->number2;
                break;
        }
    }
}

?>