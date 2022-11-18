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