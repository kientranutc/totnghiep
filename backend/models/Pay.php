<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pay".
 *
 * @property integer $id
 * @property string $pay_name
 * @property integer $sort
 * @property integer $status
 */
class Pay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pay';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'status'], 'integer'],
            [['pay_name'],'required','message'=>'field not null'],
            [['pay_name'], 'string', 'max' => 255,'tooShort'=>'too short characters'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pay_name' => 'Pay Name',
            'sort' => 'Sort',
            'status' => 'Status',
        ];
    }
}
