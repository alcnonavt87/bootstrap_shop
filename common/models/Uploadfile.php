<?php


namespace common\models;
use yii\base\Model;

class Uploadfile extends Model



{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
           // [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function uploaded()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
