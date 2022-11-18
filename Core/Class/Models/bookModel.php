<?php
include 'langModel.php';

class bookModel{
    public int $ISBN;
    public String $name;
    public String $subject;
    public String $overview;
    public String $publisher;
    public String $publicationDate;
    public langModel $lang;

    public function __construct(int $ISBN, String $name, String $subject, String $overview, String $publisher, String $publicationDate,int $lang){
        $this->ISBN = $ISBN;
        $this->name = $name;
        $this->subject = $subject;
        $this->overview = $overview;
        $this->publisher = $publisher;
        $this->publicationDate = $publicationDate;
        $this->lang = new langModel($lang);

    }
}