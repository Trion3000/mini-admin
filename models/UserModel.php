<?php

class UserModel
{
    /**
     * @param $email
     * @param $password
     * @return array|null
     */
    public function findUser($email, $password)
    {
        $pdo = DbConnection::getConnection()->getPDO();
    
        // prepare sql
        $sql = "
            SELECT * FROM user 
            WHERE email = :email 
            AND password = :password 
        ";
    
        $sth = $pdo->prepare($sql);
        $sth->execute(compact('email', 'password'));
        
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

}

