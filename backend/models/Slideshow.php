<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slideshow".
 *
 * @property integer $id
 * @property string $image
 * @property string $url
 * @property integer $sort
 * @property string $slideshow_name
 * @property integer $status
 */
class Slideshow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slideshow';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'status'], 'integer'],
            [['image', 'url', 'slideshow_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'url' => 'Url',
            'sort' => 'Sort',
            'slideshow_name' => 'Slideshow Name',
            'status' => 'Status',
        ];
    }
}
