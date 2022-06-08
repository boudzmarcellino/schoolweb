<?php  

class databaseAction extends PDO{
    private string $driver;
    private string $user;
    private string $password;

    public function __construct(string $driver, ?string $user=null, ?string $password=null)
    {
        parent::__construct($driver, $user, $password );   
    }

    public function addVisiteur(string $lastName, string $firstName, string $email)
    {
        $state = "INSERT INTO Visiteur(firstName, lastName, email) VALUES (\"$firstName\", \"$lastName\" , \"$email\");";
        parent::exec($state);
    }
    public function addNote(){}
    public function editStudent(){}
    public function addCourse(){}
}
?>