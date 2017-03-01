<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $contact_name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property integer $status
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
             [['contact_name'], 'required','message'=>'contact_name not null'],
            [['contact_name'], 'string', 'min' => 2, 'max' => 255, 'tooShort' => 'too few characters'],
            [['email'],'email', 'message'=>"not validate mail"],
            [['email', 'phone'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contact_name' => 'Contact Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'status' => 'Status',
        ];
    }
}
