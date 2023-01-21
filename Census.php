<?php

class Census
{
    private $year; //год
    private $population; // населення
    private $comments; // коментарі
// конструктор
    public function __construct($year = 0, $population = 0, $comments = "")
    {
        $this->year = $year; //год
        $this->population = $population; // населення
        $this->comments = $comments; // коментарі
    }
    public function get_comments()
    {
        return $this->comments;
    }
    public function set_Comments($comments)
    {
        $this->comments = $comments;
    }
    public function get_population()
    {
        return $this->population;
    }
    public function set_population($population)
    {
        $this->population = $population;
    }
    public function get_year()
    {
        return $this->year;
    }
    public function set_year($year)
    {
        $this->year = $year;
    }
    public function containsWord($word)
    { // пошук слова у коментарях
// echo mb_stripos($this->comments, $word);
        return mb_stripos($this->comments, $word);
    }
    public function testWord($word)
    { // тест функції containsWord()
        if ($this->containsWord($word) !== false) {
            echo "\"" . $word . "\" міститься у коментарі\n";
        } else {
            echo "\"" . $word . "\" не міститься у коментарі\n";
        }

    }
}

$census = new Census ( 2001, 48475100, "Перший перепис" );
$census->testWord ( "перший" );
$census->testWord ( "другий" );