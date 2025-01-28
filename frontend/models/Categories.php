<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $subcategory
 * @property string $category
 * @property string $categorytype
 *
 * @property Budget $budget
 * @property Transaction $transaction
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subcategory', 'category', 'categorytype'], 'required'],
            [['id'], 'integer'],
            [['subcategory', 'category'], 'string', 'max' => 200],
            [['categorytype'], 'string', 'max' => 150],
            [['subcategory'], 'unique'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subcategory' => 'Subcategory',
            'category' => 'Category',
            'categorytype' => 'Categorytype',
        ];
    }

    /**
     * Gets query for [[Budget]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBudget()
    {
        return $this->hasOne(Budget::className(), ['subcategory' => 'subcategory']);
    }

    /**
     * Gets query for [[Transaction]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaction()
    {
        return $this->hasOne(Transaction::className(), ['subcategory' => 'subcategory']);
    }
}
