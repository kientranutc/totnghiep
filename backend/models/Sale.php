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
   /*
   * get all data table sale
   * @return array $datasale
   */
    public function getall()
    {
        $datasale=Sale::find()->asArray()->all();
        return $datasale;
    }

    public function getname($id)
    {
    $datasale=Sale::findOne(['id'=>$id]);
    return    $datasale;
    }
}
