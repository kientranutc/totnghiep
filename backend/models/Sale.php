<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property integer $id
 * @property string $sale_name
 * @property string $sale_sapo
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sale_sapo'], 'string'],
             [['sale_name'],'required','message'=>'field not null'],
            [['sale_name'], 'string', 'max' => 255,'tooShort'=>'too short charactes'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sale_name' => 'Sale Name',
            'sale_sapo' => 'Sale Sapo',
        ];
    }
}
