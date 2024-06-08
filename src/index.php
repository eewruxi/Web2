<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>
<body>
<h1>Галерея</h1>

<?php
include './gallery.php';

$gallery = new Gallery('/img');
?>

<form method="post" enctype="multipart/form-data" action="<?php upload_to_server()?>">
    <input type="file" name="gallery_img" accept=".jpeg,.png,.jpg">
    <input type="submit" value="Загрузить">
</form>
<div class="imagesContainer">
    <?php //обращение к методу getPreviews() который возвращает массив сылок на маленькие фото
    foreach ($gallery->getImage() as $preview) {
        echo $preview;
    }
    ?>
</div>
<?php

/**
 * @throws ImagickException
 */
function upload_to_server(): void {
    if (!empty($_FILES)) { //проверка есть ли загруженные файлы
        global $gallery;
        $data = $_FILES['gallery_img'];
        if (str_starts_with($data['type'], 'image')) { //проверка что картинка
            $gallery->addImage($data['tmp_name'], $data['name']); //добавление картинки
        }
    }
}
?>

</body>
</html>