<?php 

class Book{
private string $name;
private string $author;
protected int $count = 0;


public function __construct($name, $author)
{
    $this->name = $name;
    $this->author = $author;
}

public function getName()
{
    echo $this->name;
}
public function getAuthor()
{
    echo $this->author;
}
public function getCount()
{
    echo "Колличество прочтений " . $this->count;
}

public function receive(){
    $this->count++;
    echo "Получите книгу автора " . $this->author . " С названием" . $this->name;
}

}
class ElectroBook extends Book{
    private string $link;

    public function __construct($name, $author, $link)
    {
        parent::__construct($name, $author);
        $this->link = $link;
    }
    public function receive()
    {
        $this->count++;
        return "Получите ссылку на книгу " . $this->link;
    }
}

// Я взял книгу за родительский класс, а электронную книгу за наследника
// Отличаются они по способу получения и у экземпляров электронной книги есть доп.свойство ссылка на книгу
