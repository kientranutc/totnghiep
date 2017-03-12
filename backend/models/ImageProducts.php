<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "image_products".
 *
 * @property integer $id
 * @property integer $pro_id
 * @property string $image
 * @property integer $status
 */
class ImageProducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_id', 'status'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pro_id' => 'Pro ID',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }
    /*
    *@param integer $id
    *@return mixed 
    */
    public function getimage($id)
    {
      $dataimage=ImageProducts::find()->where(['pro_id'=>$id])->asArray()->all();
      return $dataimage;
    }
}
