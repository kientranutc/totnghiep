<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "traffic".
 *
 * @property integer $id
 * @property string $traffic_name
 * @property integer $sort
 * @property integer $status
 */
class Traffic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'traffic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'status'], 'integer'],
            [['traffic_name'],'required','message'=>'field not null'],
            [['traffic_name'], 'string', 'max' => 255,'tooShort' => 'too few characters'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'traffic_name' => 'Traffic Name',
            'sort' => 'Sort',
            'status' => 'Status',
        ];
    }
}
