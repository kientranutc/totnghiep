<?php

namespace frontend\models;
use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $cat_name
 * @property string $parent_id
 * @property string $cat_image
 * @property string $cat_icon
 * @property integer $status
 * @property integer $sort
 * @property string $created_at
 * @property string $updated_at
 * @property string $name_seo
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name'], 'required'],
            [['parent_id', 'status', 'sort'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['cat_name', 'cat_image', 'name_seo'], 'string', 'max' => 255],
            [['cat_icon'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => 'Cat Name',
            'parent_id' => 'Parent ID',
            'cat_image' => 'Cat Image',
            'cat_icon' => 'Cat Icon',
            'status' => 'Status',
            'sort' => 'Sort',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'name_seo' => 'Name Seo',
        ];
    }
    /*
    *lấy tất cả danh mục cha có parent_id=0 và status=1
    *@return mixed
    */
    public function getCatlevel()
    {
        $catAll=Categories::find()->where(['status'=>1,'parent_id'=>0])->asArray()->all();
        return $catAll;
    }
    /**
     *Kiểm tra danh mục cha có tồn tại các danh mục con khác k?
     *@param integer $id
     *@return mixed
    */ 
    public function checkSubcat($id)
    {
      $dataParent=Categories::find()->where(['parent_id'=>$id, 'status'=>1])->asArray()->all();
      return $dataParent;
    }
  /**
  * lấy ảnh danh mục cha có parent_id=0
  *@param integer id
  *@return array
  */
    public function getImagecat($id)
    {
         $dataImage=Categories::findOne(['id'=>$id,'status'=>1]);
      return $dataImage['cat_image'];
    }
    
}
