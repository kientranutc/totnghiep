<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $cat_name
 * @property integer $parent_id
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
    public $data;
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
            [['parent_id'], 'default', 'value' => '0'],
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
    *get all data from  table categories
    *@return mixed
    */
    function getallcat()
    {
     $datacate=Categories::find()->where(['status'=>1])->all();
     return $datacate;
    }
    /*
    *show multi categories
    *@param Array $categories
    *@paraminteger $parent_id
    *@param string $char
    *@return array
    */

    function showCategories($categories, $parent_id = 0, $level = '')
    {
    foreach ($categories as $key => $item)
    { 
        if ($item['parent_id'] == $parent_id)
        {
           $this->data[$item['id']]=$level.$item['cat_name'];
          self::showCategories($categories, $item['id'], $level.'--');
        }
    }
    return $this->data;
    }

  function getnamecate($id)
  {
    $datacat=Categories::findOne(['id'=>$id]);
    return $datacat;
  }
  function getNamcatParent($id)
  {
    $dataParent=Categories::findOne(['id'=>$id]);
    return $dataParent;
  }
}
