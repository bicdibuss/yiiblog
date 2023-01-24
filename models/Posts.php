<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "posts".
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $txt
 * @property string|null|UploadedFile $img
 * @property string|null $user
 * @property string|null $cat
 * @property string|null $url
 * @property string|null $data
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['txt'], 'string'],
            [['title', 'description', 'user', 'cat', 'url'], 'string', 'max' => 255],
            [['img'],'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['data'], 'safe'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $name = sprintf("%d.%s", time(), $this->img->getExtension());
            $this->img->saveAs(sprintf("img/%s", $name));
            $this->img->name = sprintf("img/%s", $name);

            return true;
        }

        return false;
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'txt' => 'Txt',
            'img' => 'Img',
            'user' => 'User',
            'cat' => 'Cat',
            'url' => 'Url',
            'data' => 'Data',
        ];
    }
}
