<?php

class student {
    public $first_name = "";
    public $last_name = "";
    public $email = "";
    public $password = "";
    public $password_hash = "";
    public $date_of_birth = "";
    public $authenticated = false;
    private $connection;

    function __construct($connection, $first_name, $last_name, $email, $password, $date_of_birth) {
        $this->first_name = mysqli_real_escape_string($connection, $first_name);
        $this->last_name = mysqli_real_escape_string($connection, $last_name);
        $this->email = mysqli_real_escape_string($connection, $email);
        $this->password = mysqli_real_escape_string($connection, $password);
        $this->date_of_birth = mysqli_real_escape_string($connection, $date_of_birth);
        $this->password_hash = password_hash($password, PASSWORD_BCRYPT);

        $this->connection = $connection;

    }

    function insert() {
        $sql = "
        Insert INTO student(
            first_name,
            last_name,
            email,
            password,
            date_of_birth,
            status
        )
        VALUES (
            '{$this->first_name}',
            '{$this->last_name}',
            '{$this->email}',
            '{$this->password_hash}',
            '{$this->date_of_birth}',
            'active'
        )    
        ";
        
        $sqlQuery = mysqli_query($this->connection, $sql);

        if(!$sqlQuery){

            die("MySQL query failed!" . mysqli_error($this->connection));
        }

    }

    function authenticate() {
        $sql = "
            SELECT student_id, first_name, last_name, email, password, date_of_birth, status
            FROM student
            WHERE email=\"{$this->email}\";
            ";
        
            $result = $this->connection->query($sql);
            if ($row = $result->fetch_assoc()) {

                if(password_verify($this->password, $row['password'])) {
                    $this->authenticated = true;
                }
            }
    }

    function is_logged_in(){
        return $this->authenticated;
    }
}