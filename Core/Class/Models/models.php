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



class formatModel{
    public String $format;
 
public function __construct(int $index){
    $oui=['Paperback','Hardcover','Audiobook','Audio CD','MP3 CD','PDF'];
    $this->format = $oui[$index];

}

}


class bookItemModel{
    public int $barcode;
    public String $tag;
    public int $ISBN;
    public String $subject;
    public String $title;
    public bool $isReferenceOnly = false;
    public langModel $lang;
    public int $numberOfPages;
    public formatModel $format;
    public String $borrowed;
    public int $loanPeriod;
    public String $dueDate;
    public bool $isOverdue = false;

    public function __construct(int $barcode, String $tag, int $ISBN, String $subject, String $title, bool $isReferenceOnly, 
        langModel $lang, int $numberOfPages, formatModel $format, String $borrowed, int $loanPeriod, String $dueDate, bool $isOverdue = false){
            $this->barcode = $barcode;
            $this->tag = $tag;
            $this->ISBN = $ISBN;
            $this->subject = $subject;
            $this->title = $title;
            $this->isReferenceOnly = $isReferenceOnly;
            $this->lang = $lang;
            $this->numberOfPages = $numberOfPages;
            $this->format = $format;
            $this->borrowed = $borrowed;
            $this->loanPeriod = $loanPeriod;
            $this->dueDate = $dueDate;
            $this->isOverdue = $isOverdue;
        }
}






class borrowedModel{
	public int $numEmprunt;
	public String $book;

	public function __construct($numEmprunt, bookModel $book){
		$this->numEmprunt = $numEmprunt;
		$this->book = $book;
	}
}

class reservedModel{
	public int $numReservation;
	public String $book;

	public function __construct($numReservation, bookModel $book){
		$this->numReservation = $numReservation;
		$this->book = $book;
	}
}

class historyModel{
	public borrowedModel $borrowed;
	public reservedModel $reserved;

	public function __construct(borrowedModel $borrowed, reservedModel $reserved){
		$this->borrowed = $borrowed;
		$this->reserved = $reserved;
	}
}




class accountStateModel{
	public string $accountState;

	public function __construct(int $index){
		$choice = ['Active','Frozen','Closed'];
		$this->accountState = $choice[$index];
	}
}



class fullNameModel{
	public String $firstname;
	public String $lastname;

	public function __construct(String $firstname, String $lastname){
		$this->$firstname = $firstname;
		$this->$lastname = $lastname;
	}
}


class addressModel{
	public int $numeroRue;
	public String $nomRue;
	public int $codePostal;
	public String $nomVille;

	public function __construct($numeroRue, $nomRue, $codePostal, $nomVille){
		$this->numeroRue = $numeroRue;
		$this->nomRue = $nomRue;
		$this->codePostal = $codePostal;
		$this->nomVille = $nomVille;
	}
}



class accountModel{
	public int $number;
	public historyModel $history;
	public String $opened;
	public accountStateModel $state;

	public function __construct(int $number, historyModel $history, String $opened, accountStateModel $state){
		$this->number = $number;
		$this->history = $history;
		$this->opened = $opened;
		$this->state = $state;
	}
}

class libraryModel{
	public String $name;
	public addressModel $address;

	public function __construct($name, $address){
		$this->name = $name;
		$this->address = $address;
	}
}

class patronModel{
	public fullNameModel $name;
	public addressModel $address;

	public function __construct($name, $address){
		$this->name = $name;
		$this->address = $address;
	}

}

class librarianModel{
	public fullNameModel $name;
	public addressModel $address;
	public String $position;

	public function __construct($name, $address, $position){
		$this->name = $name;
		$this->address = $address;
		$this->position = $position;
	}

}
