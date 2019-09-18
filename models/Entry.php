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
        return 'entry';
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
                    //ActiveRecord::EVENT_BEFORE_UPDATE => 'update_time',
                ],
//                'value' => function () {
//                    return date('d-m-Y H:i:s');
//                },
//                'createdAtAttribute' => 'create_date',
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
            //[['id'], 'integer'],
            [[ 'name', 'phone', 'email'], 'string', 'max' => 30],
            [['text_parameters', 'direction'], 'string', 'max' => 100],
//            [['create_date'], 'string'],
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
