<?php

require 'models/BookModel.php';
$bookModel = new BookModel($pdo);


$id = get('id');

if ($_POST) {

}

if ($id === null) {
    // we want to insert new
    echo 'new';

    $book = array(
        'id' => null,
        'title' => null,
        'price' => null,
        'description' => null,
        'is_active' => null
    );
} else {
    // edit by id
    echo 'edit #' . $id;

    $book = $bookModel->findById($id);
}

?>


<form method="post">
    <input type="hidden" name="id" value="<?=$book['id']?>">
    Title : <input type="text" name="title" value="<?=$book['title']?>"> <br>
    Price : <input type="text" name="price" value="<?=$book['price']?>"> <br>
    Description: <textarea name="description" id="" cols="30" rows="10"><?=$book['description']?></textarea> <br>
    Is active: <input type="checkbox" name="is_active" <?=$book['is_active'] ? 'checked': '' ?> > <br>
    <button>Go</button>

</form>


