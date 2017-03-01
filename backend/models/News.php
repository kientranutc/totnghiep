<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $news_name
 * @property string $sapo
 * @property string $description
 * @property string $image
 * @property integer $cat_news_id
 * @property integer $view
 * @property integer $status
 * @property string $created_at
 * @property string $update_at
 * @property string $meta_keyword
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_name'], 'required'],
            [['description'], 'string'],
            [['cat_news_id', 'view', 'status'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
            [['news_name', 'sapo', 'image', 'meta_keyword'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'news_name' => 'News Name',
            'sapo' => 'Sapo',
            'description' => 'Description',
            'image' => 'Image',
            'cat_news_id' => 'Cat News ID',
            'view' => 'View',
            'status' => 'Status',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'meta_keyword' => 'Meta Keyword',
        ];
    }
}
