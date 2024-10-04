<?php 

abstract class Book {
    protected string $name;
    protected string $author;
    protected int $count = 0;

    public function __construct($name, $author)
    {
        $this->name = $name;
        $this->author = $author;
    }


    abstract function receive();

    public function getName() {
        echo $this->name;
    }
    public function getAuthor() {
        echo $this->author;
    }
    public function getCount() {
        echo $this->count . "\r\n";
    }
}


class PaperBook extends Book {
    private string $adress;

    public function __construct($name, $author, $adress)
    {
        parent::__construct($name, $author);
        $this->adress = $adress;
    }

    public function receive()
    {
        $this->count++;
        return "Заберите книгу по адрессу " . $this->adress . "\r\n";
    }
}

class ElectroBook extends Book {
    private string $link;

    public function __construct($name, $author, $link)
    {
        parent::__construct($name, $author);
        $this->link = $link;
    }

    public function receive()
    {
        $this->count++;
        return "Получите книгу перейдя по ссылке " . $this->link . "\r\n";
    }
}
