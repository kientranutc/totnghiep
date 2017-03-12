<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "categorynews".
 *
 * @property integer $id
 * @property string $cat_name_news
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property News[] $news
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['cat_news_id' => 'id']);
    }
    public function getCatnews()
    {
        $dataCatnew=Categorynews::find()->where(['status'=>1])->asArray()->all();
        return $dataCatnew;
    }
}
