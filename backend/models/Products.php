<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $pro_name
 * @property integer $cat_id
 * @property integer $pro_price
 * @property integer $sale_id
 * @property string $sapo
 * @property string $description
 * @property integer $quantity
 * @property string $created_at
 * @property string $updated_at
 * @property string $name_seo
 * @property integer $status
 * @property integer $ishot
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_name','pro_price','quantity'], 'required','message'=>'không để  trống'],
            [['cat_id', 'pro_price', 'sale_id', 'quantity','status','ishot'], 'integer'],
            [['quantity'],'integer','min'=>1,'message'=>'Số lượng phải lớn hơn 0'],
            [['pro_price'],'integer','min'=>1,'message'=>'Số lượng phải lớn hơn 0'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['pro_name', 'sapo'], 'string', 'max' => 255,'min'=>4,'tooShort'=>'Tên sản phẩm từ 4-255 ký tư' ],
            [['pro_name'],'unique','message'=>"Tên  sản phẩm  đã tồn tại"],
            [['name_seo'], 'string', 'max' => 155],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pro_name' => 'Pro Name',
            'cat_id' => 'Cat ID',
            'pro_price' => 'Pro Price',
            'sale_id' => 'Sale ID',
            'sapo' => 'Sapo',
            'description' => 'Description',
            'quantity' => 'Quantity',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'name_seo' => 'Name Seo',
            'status' => 'Trạng thái',

            'ishot'=>'sản phẩm nổi bật'
        ];
    }

    public function getname($id)
    {
        $datapro=Products::findOne(['id'=>$id]);
        return $datapro;
    }
}
