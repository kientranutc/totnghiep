<?php

namespace frontend\models;

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
            [['sale_name'], 'string', 'max' => 255],
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
    /**
    * lấy giảm giá theo từng sản phẩm
    *@param integer $id
    *@return array
    */
    public function getSale($id){

        $dataSale=Sale::findOne(['id'=>$id]);
        return $dataSale;
    }

}
