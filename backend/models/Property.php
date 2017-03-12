<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "property".
 *
 * @property integer $id
 * @property string $property_name
 * @property integer $status
 * @property string $key_categories
 */
class Property extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'property';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer','message'=>"kiểu nhập vào là số nguyên"],
            [['property_name'],'string','message'=>" chưa nhập"],
            [['property_name'], 'unique','message'=>'Tên thuộc tính đã tồn tại'],
            [['property_name', 'key_categories'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_name' => 'Property Name',
            'status' => 'Status',
            'key_categories' => 'Key Categories',
        ];
    }
}
