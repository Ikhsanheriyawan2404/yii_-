<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drugs".
 *
 * @property int $id
 * @property string $name
 * @property float $stock
 * @property float $price
 * @property string|null $description
 */
class Drug extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drugs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'stock', 'price'], 'required'],
            [['stock', 'price'], 'number'],
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
            'id' => 'ID',
            'name' => 'Name',
            'stock' => 'Stock',
            'price' => 'Price',
            'description' => 'Description',
        ];
    }
}
