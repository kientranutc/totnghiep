<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categorynews".
 *
 * @property integer $id
 * @property string $cat_name_news
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Categorynews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorynews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name_news'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['cat_name_news'], 'string', 'max' => 255],
            [['cat_name_news'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name_news' => 'Cat Name News',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getcatnews()
    {
        $datacatnews=Categorynews::find()->all();
        return $datacatnews;
    }
    public function getname($id)
    {

        $dataname=Categorynews::findOne(['id'=>$id]);
        return $dataname;
    }
    
}
