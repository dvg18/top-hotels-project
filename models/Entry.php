<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "entry".
 *
 * @property int $id
 * @property string $text_parameters
 * @property string $name
 * @property string $phone
 * @property string $email
 */
class Entry extends ActiveRecord
{
//    public $id;
//    public $textParameters;
//    public $name;
//    public $phone;
//    public $email;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entry';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['id'], 'integer'],
            [['text_parameters', 'name', 'phone', 'email'], 'string', 'max' => 100],
            [['name', 'phone'], 'required', 'message' => ''],
            ['email', 'email'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_parameters' => '',
            'name' => 'Ваше имя',
            'phone' => 'Телефон',
            'email' => 'Email (не обязательно)',
        ];
    }

}
