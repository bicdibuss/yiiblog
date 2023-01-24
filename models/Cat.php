<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $url
 */
class Cat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'url'], 'string', 'max' => 255],
        ];
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
            'url' => 'Url',
        ];
    }
}
