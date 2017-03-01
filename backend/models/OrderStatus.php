<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_status".
 *
 * @property integer $id
 * @property string $order_status_name
 * @property integer $status
 */
class OrderStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['order_status_name'],'required','message'=>'field not null'],
            [['order_status_name'], 'string', 'max' => 255,'tooShort'=>'too short characters'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_status_name' => 'Order Status Name',
            'status' => 'Status',
        ];
    }
}
