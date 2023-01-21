<?php

require_once "Census.php";
class Country
{
    private $name;
    private $area;
    private $censuses = [];

    public function __construct($name = "", $area = 0, array $censuses = array())
    {
        $this->name = $name;
        $this->area = $area;
        $this->censuses = $censuses;
    }

    public function get_area()
    {
        return $this->area;
    }

    public function set_area($area)
    {
        $this->area = $area;
    }

    public function get_censuses()
    {
        return $this->censuses;
    }

    public function set_censuses(array $censuses)
    {
        $this->censuses = $censuses;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function density($year)
    {
        for ($i = 0; $i < count($this->censuses); $i++) {
            if ($year === $this->censuses[$i]->get_year()) {
                return $this->censuses[$i]->get_population() / $this->get_area();
            }

        }
        return false;
    }

    public function maxYear()
    {
        $census = $this->censuses[0];
        for ($i = 1; $i < count($this->censuses); $i++) {
            if ($census->get_population() < $this->censuses[$i]->get_population()) {
                $census = $this->censuses[$i];
            }

        }
        return $census->get_year();
    }

    public function findWord($word)
    {
        echo "Слово \"" . $word . "\":\n";
        foreach ($this->censuses as $census) {
            if ($census->containsWord($word)) {
                echo "Перепис " . $census->get_year() . " року. Коментар:" . $census->get_comments() . "\n";
            }
        }

    }

}