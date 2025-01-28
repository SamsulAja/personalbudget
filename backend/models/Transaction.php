<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $id
 * @property string $Account
 * @property string $Date
 * @property string $Description
 * @property int $Debit
 * @property int $Kredit
 * @property string $subcategory
 *
 * @property Categories $subcategory0
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Account', 'Date', 'Description', 'Debit', 'Kredit', 'subcategory'], 'required'],
            [['id', 'Debit', 'Kredit'], 'integer'],
            [['Date'], 'safe'],
            [['Description'], 'string'],
            [['Account'], 'string', 'max' => 100],
            [['subcategory'], 'string', 'max' => 200],
            [['subcategory'], 'unique'],
            [['id'], 'unique'],
            [['subcategory'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['subcategory' => 'subcategory']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Account' => 'Account',
            'Date' => 'Date',
            'Description' => 'Description',
            'Debit' => 'Debit',
            'Kredit' => 'Kredit',
            'subcategory' => 'Subcategory',
        ];
    }

    /**
     * Gets query for [[Subcategory0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubcategory0()
    {
        return $this->hasOne(Categories::className(), ['subcategory' => 'subcategory']);
    }
}
