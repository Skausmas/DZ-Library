<?php
abstract class Literature
{
    function __construct(public $name, protected $author, protected $page_count, protected $year, protected $cover)
    { 
        $this->name = $name;
        $this->author = $author;
        $this->page_count = $page_count;
        $this->year = $year;
        $this->cover = $cover;
    }
    
    protected function show_info()
    {

        return 
        "
        <div class='col-auto d-none d-lg-block'>
        <img src='cover/$this->cover' class='img-thumbnail' width='200' height='250'>
        </div>
          <div class='col p-4 d-flex flex-column position-static'>
          <h3 class='mb-0'>$this->name</h3>
          <p>Автор: $this->author</p>
          <p>Количество страниц: $this->page_count</p>
          <p>Год выпуска: $this->year </p>";
    }
}

class TextLiterature extends Literature 
{
    public function render()
    {
        return "1111";
    }
}


class Book extends TextLiterature
{
    function __construct($name, $author, $page_count, $year, $cover, protected $publishing_house)
    {
        parent::__construct($name, $author, $page_count, $year, $cover);
        $this->publishing_house = $publishing_house;
    }

    function show_info() {

        return "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>" . parent::show_info() . "<p> Издательство: $this->publishing_house </p>" . "<button type='submit' name = 'value' value = '$this->cover' class='btn btn-link'>Прочитать...</button>" . "</div></div>";
    }
}


class Funfiction extends TextLiterature 
{
    function __construct($name, $author, $page_count, $year, $cover, protected $source)
    {
        parent::__construct($name, $author, $page_count, $year, $cover);
        $this->source = $source;
    }

    function show_info() {

        return "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>" . parent::show_info() . "<p> Фандом: $this->source </p>" . "<button type='submit' name = 'value' value = '$this->cover' class='btn btn-link'>Прочитать...</button>" . "</div></div>";
    
    }
}


class Comics extends Literature 
{
    function __construct($name, $author, $page_count, $year, $cover, protected $painter, protected $color)
    {
        parent::__construct($name, $author, $page_count, $year, $cover);
        $this->painter = $painter;
        $this->color = $color;
    }

    function show_info() {

        return "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>" . parent::show_info() . "<p> Художник: $this->painter </p> <p> Цвета: $this->color </p>". "<button type='submit' name = 'value' value = 'comics.$this->cover' class='btn btn-link'>Прочитать...</button>" . "</div></div>";
    }
}

?>