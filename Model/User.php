<?php

require_once "Model.php";
class User extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->setTableName('users');
    }

    public function loginAdmin($email, $password)
    {
        $sql = "SELECT * FROM $this->tableName WHERE email = :email AND password = :password AND role = 1 ";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function loginClient($email, $password)
    {
        $sql = "SELECT * FROM $this->tableName WHERE email = :email AND password = :password";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getByEmailAdmin($email)
    {
        $sql = "SELECT * FROM 
                $this->tableName
                WHERE
                email = :email 
                AND 
                role = 1";

        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getByEmailClient($email)
    {
        $sql = "SELECT * FROM 
                $this->tableName
                WHERE
                email = :email";

        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
