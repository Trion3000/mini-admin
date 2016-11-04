<?php

function findAllBooks()
{
    global $link;

    $sql = "SELECT * FROM book";
    $res = mysqli_query($link, $sql);

    $books = array();

    while ($row = mysqli_fetch_assoc($res)) {
        $books[] = $row;
    }

    return $books;
}

/**
 * @param $id
 * @return array|null
 */
function findBookById($id)
{
    global $link;
    $id = (int)$id;

    $sql = "SELECT * FROM book WHERE id = {$id}";
    $res = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($res);
}

/**
 * @param $id
 * @return bool|mysqli_result
 */
function removeBookById($id)
{
    global $link;
    $id = (int)$id;

    $sql = "DELETE FROM book WHERE id = {$id}";
    $res = mysqli_query($link, $sql);

    return $res;
}

function insertBook()
{

}

