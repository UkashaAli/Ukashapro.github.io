<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yiiproducts".
 *
 * @property integer $Prodid
 * @property string $Category
 * @property string $Brand
 * @property string $Prodimage
 * @property string $Prodname
 * @property integer $Prodprice
 * @property string $Proddesc
 */
class Yiiproducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yiiproducts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Category', 'Brand', 'Prodimage', 'Prodname', 'Prodprice', 'Proddesc'], 'required'],
            [['Prodimage'], 'string'],
            [['Prodprice'], 'integer'],
            [['Category', 'Brand', 'Prodname', 'Proddesc'], 'string', 'max' => 100],
			[['Prodimage'], 'file', 'extensions'=> 'png, jpg, gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Prodid' => 'Prodid',
            'Category' => 'Category',
            'Brand' => 'Brand',
            'Prodimage' => 'Product Image',
            'Prodname' => 'Product Name',
            'Prodprice' => 'Product price',
            'Proddesc' => 'Product desccription',
        ];
    }
}
