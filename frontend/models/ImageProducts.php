<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "image_products".
 *
 * @property integer $id
 * @property integer $pro_id
 * @property string $image
 * @property integer $status
 *
 * @property Products $pro
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
            [['pro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['pro_id' => 'id']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPro()
    {
        return $this->hasOne(Products::className(), ['id' => 'pro_id']);
    }
    /*
    *  lấy danh sách ảnh sản phẩm theo từng sản phẩm
    *@return array
    */
    public function getImgproducts($id)
    {
        $dataImagepro=ImageProducts::find()->where(['pro_id'=>$id,'status'=>1])->asArray()->all();
        return $dataImagepro;
    }
}
