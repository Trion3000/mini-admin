<?php
class BookModel 
{
    private $pdo;
    
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    function findAll()
    {
        //DbConnection::getConnection();
        $sth = $this->pdo->query("SELECT * FROM book");
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /**
     * @param $id
     * @return array|null
     */
    function findById($id)
    {
        $sth = $this->pdo->prepare("SELECT * FROM book WHERE id = :id");
        $sth->execute(compact('id'));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /**
     * @param $id
     * @return bool|mysqli_result
     */
    function removeById($id)
    {
        global $pdo;
        $sth = $this->pdo->prepare("DELETE FROM book WHERE id = :id");
        $sth->execute(compact('id'));
    }
    
    function insert()
    {
    
    }
}


