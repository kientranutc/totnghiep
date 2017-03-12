<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $pro_name
 * @property integer $cat_id
 * @property integer $pro_price
 * @property string $sale_id
 * @property string $sapo
 * @property string $description
 * @property integer $quantity
 * @property string $created_at
 * @property string $updated_at
 * @property string $name_seo
 * @property integer $status
 * @property integer $ishot
 *
 * @property ImageProducts[] $imageProducts
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
            [['pro_name'], 'required'],
            [['cat_id', 'pro_price', 'sale_id', 'quantity', 'status', 'ishot'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['pro_name', 'sapo'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'ishot' => 'Ishot',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImageProducts()
    {
        return $this->hasMany(ImageProducts::className(), ['pro_id' => 'id']);
    }
    /*
    * lấy ra 5 sản phẩm hot nhất
    *@return array
    */ 
    public function getHotproduct(){
        $dataHotproducts=Products::find()->where(['status'=>1,'ishot'=>1])->orderBy(['created_at'=>SORT_DESC])->limit(5)->asArray()->all();
        return $dataHotproducts;
    }
    /**
    * Lấy sản phẩm của danh mục  cha
    *@param $id
    *@return array
    */
    public function getCatpro($id){
        $sqlCatpro="SELECT ct.*, pt.id as pro_id, pt.* FROM categories ct, products pt WHERE ct.id=pt.cat_id and ct.id=$id ORDER BY pt.created_at DESC ";
        $dataCatpro=Products::findBySql($sqlCatpro)->asArray()->all();
        return $dataCatpro; 
    }
    /**
    *Lấy sản phẩm của danh mục con cấp 1
    *@param $parentId
    *@return array
    */
    public function getParentpro($parentId){
          $sqlParentpro="SELECT ct.*, pt.id as pro_id,pt.* FROM categories ct, products pt WHERE ct.id=pt.cat_id and ct.parent_id=$parentId ORDER BY pt.created_at DESC ";
        $dataParentpro=Products::findBySql($sqlParentpro)->asArray()->all();
        return $dataParentpro; 
    }
    /**
    * lấy 1 sản phẩm từ bảng products
    *@param integer $id
    *@return array
    */
    public function getProductone($id) {
     $dataPro=Products::findOne(['status'=>1]);
     return $dataPro;
    } 
}
