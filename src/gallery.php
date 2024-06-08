<?php

class Gallery
{
    private array $directories;

    function __construct(string $filesDirectory) //класс принимает путь к директории, в которой будут храниться фото
    {
        $this->directories = ['small' => $filesDirectory.'/small/',
            'big' => $filesDirectory.'/big/']; //пути к директориям
    }

    public function getImage(): array //формирует массив с большими фото
    {
        $previews = scandir($_SERVER['DOCUMENT_ROOT'].$this->directories['small']); //получение всех маленьких фото
        $result = [];
        foreach (array_slice($previews, 2) as $file) {
            $result[] = '<a target="_blank" href="' . $this->directories['big'] . $file . '">
            <img src="' . $this->directories['small'] . $file . '"></a>';
        }
        return $result;
    }

    /**
     * @throws ImagickException
     */
    public function addImage($filePath, $fileName): bool
    { //принимает путь и имя загруженного фото
        //копирует в папку small и уменьшает resizeImage
        $uploadedFilePath = $_SERVER['DOCUMENT_ROOT'].$this->directories['big'] . '/' . $fileName; //путь к big
        if (move_uploaded_file($filePath, $uploadedFilePath)) {
            copy($uploadedFilePath, $_SERVER['DOCUMENT_ROOT'].$this->directories['small'].$fileName);
            $this->resizeImage($_SERVER['DOCUMENT_ROOT'].$this->directories['small'].$fileName, 400);
            //копирование и уменьшение картинки
            return true;
        }
        return false;
    }

    /**
     * @throws ImagickException
     */
    function resizeImage($imagePath, $requiredHeight): void {
        $imagick = new Imagick($imagePath);
        $width = $imagick-> getImageWidth();
        $height = $imagick-> getImageHeight();
        $coefficient = $requiredHeight / $height;
        $imagick->resizeImage((int)($width * $coefficient), (int)($height * $coefficient),
            Imagick::FILTER_TRIANGLE, -10); //изменяем размер
        $imagick->writeImage($imagePath);
        $imagick->clear();
        $imagick->destroy();
    }
}
