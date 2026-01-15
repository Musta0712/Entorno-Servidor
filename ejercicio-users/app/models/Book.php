<?php
class Book
{
    function __construct(
        private string $isbn,
        private string $title,
        private string $author,
        private int $pages,
        private $type = [],
    ) {}

    public function __toString()
    {
        return "$this->isbn - $this->title, $this->author. Pages: $this->pages. Genres: " .
            implode(", ", $this->type);
    }
}