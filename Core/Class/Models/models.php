<?php

class langModel{
    public String $lang;
 
public function __construct(int $index){
    $oui=['English','French','German','Spanish','Italian'];
    $this->lang = $oui[$index];

}

}








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







class bookItemModel{
    public bookModel $book;

}