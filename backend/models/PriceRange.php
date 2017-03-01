<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "price_range".
 *
 * @property integer $id
 * @property integer $pr_first
 * @property integer $pr_last
 * @property integer $status
 */
class PriceRange extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_range';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        [['pr_first', 'pr_last'],'required', 'message'=>'field not null'],
            [['pr_first', 'pr_last', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pr_first' => 'Pr First',
            'pr_last' => 'Pr Last',
            'status' => 'Status',
        ];
    }
}
