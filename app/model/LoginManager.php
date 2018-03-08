<?php
namespace App\Model;

use Nette\Object;

/**
 * Model operací kalkulačky.
 * @package App\Model
 */
class LoginManager extends Object
{
    /** Definice konstant pro operace. */
    const
        ADD = 1,
        SUBTRACT = 2,
        MULTIPLY = 3,
        DIVIDE = 4,
        moveRight = 5,
        moveLeft = 6, 
        bitAdd = 7,
        bitOR = 8,
        bitxXor = 9; 


    /**
     * Getter pro existující operace.
     * @return array asociativní pole konstant pro operace a jejich slovního pojmenování
     */
    public function getOperations()
    {
        return array(
            self::ADD => 'Sčítání',
            self::SUBTRACT => 'Odčítání',
            self::MULTIPLY => 'Násobení',
            self::DIVIDE => 'Dělení',
            self::moveLeft => 'bit posun vlevo',
            self::moveRight => 'bit posun vpravo',
            self::bitAdd => 'Log. And',
            self::bitOR => 'Log. OR',
            self::bitxXor => 'Xor'
        );
    }

    /**
     * Zavolá zadanou operaci a vrátí její výsledek.
     * @param int $operation zadaná operace
     * @param int $x         první číslo pro operaci
     * @param int $y         druhé číslo pro operaci
     * @return int|null výsledek operace nebo null, pokud zadaná operace neexistuje
     */
    public function calculate($operation, $x, $y)
    {
        switch ($operation) {
            case self::ADD:
                return $this->add($x, $y);
            case self::SUBTRACT:
                return $this->subtract($x, $y);
            case self::MULTIPLY:
                return $this->multiply($x, $y);
            case self::DIVIDE:
                return $this->divide($x, $y);
            case self::moveRight:
                return $this->moveRight($x, $y);
                break;
            case self::moveLeft:
                $this->moveLeft($x, $y);
                break;
            case self::bitAdd:
                $this->bitAdd($x, $y);
                break;
            
            case self::bitOR:
                return $this->bitSubs($x, $y);
                break;
            case self::bitxXor:
                return $this->bitXor($x, $y);
                break;
            default:
                return null;
        }
    }

    /**
     * Sečte daná čísla a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo
     * @return int výsledek po sčítání
     */
    public function add($x, $y)
    {
        return $x + $y;
    }

    /**
     * Odečte druhé číslo od prvního a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo
     * @return int výsledek po odčítání
     */
    public function subtract($x, $y)
    {
        return $x - $y;
    }

    /**
     * Vynásobí daná čísla a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo
     * @return int výsledek po násobení
     */
    public function multiply($x, $y)
    {
        return $x * $y;
    }

    /**
     * Vydělí první číslo druhým bezezbytku a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo; nesmí být 0
     * @return int výsledek po dělení bezezbytku
     */
    public function divide($x, $y)
    {
        return round($x / $y);
    }

    public function moveRight($x, $y)
    {
        return $x >> $y;
    }

    public function moveLeft($x, $y)
    {
        return $x << $y;
    }

    public function bitAdd($x, $y)
    {
        return $x & $y;
    }

    public function bitSubs($x, $y)
    {
        return $x  | $y;
    }

    public function bitXor($x, $y)
    {
        return $x xor $y;
    }
}
