<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%actions}}".
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string|null $description
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%actions}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ActionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ActionsQuery(get_called_class());
    }
}
