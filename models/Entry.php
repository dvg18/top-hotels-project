<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "entry".
 *
 * @property int $id
 * @property string $text_parameters
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $direction
 * @property string $create_date
 */
class Entry extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{entry}}';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'create_date',
                ],
                'value' => new Expression('CURRENT_TIMESTAMP'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'email', 'direction'], 'string', 'max' => 30],
            [['text_parameters'], 'string', 'max' => 100],
            [['name', 'phone'], 'required'],
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
            'text_parameters' => 'Пожелания',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Email',
            'direction' => 'Направление',
            'create_date' => 'Дата создания',
        ];
    }

}
