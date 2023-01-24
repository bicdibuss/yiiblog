<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coment".
 *
 * @property int $id
 * @property int|null $post_id
 * @property string|null $txt
 * @property string|null $name
 */
class Coment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id'], 'integer'],
            [['txt', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'txt' => 'Txt',
            'name' => 'Name',
        ];
    }
}
