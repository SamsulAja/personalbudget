<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "budget".
 *
 * @property int $id
 * @property string $Year
 * @property string $subcategory
 * @property int $Jan
 * @property int $Feb
 * @property int $March
 * @property int $Apr
 * @property int $May
 * @property int $Jun
 * @property int $Jul
 * @property int $Aug
 * @property int $Sep
 * @property int $Oct
 * @property int $Nov
 * @property int $December
 *
 * @property Categories $subcategory0
 */
class Budget extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'budget';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Year', 'Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'December'], 'required'],
            [['id', 'Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'December'], 'integer'],
            [['Year'], 'safe'],
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
            'Year' => 'Year',
            'subcategory' => 'Subcategory',
            'Jan' => 'Jan',
            'Feb' => 'Feb',
            'March' => 'March',
            'Apr' => 'Apr',
            'May' => 'May',
            'Jun' => 'Jun',
            'Jul' => 'Jul',
            'Aug' => 'Aug',
            'Sep' => 'Sep',
            'Oct' => 'Oct',
            'Nov' => 'Nov',
            'December' => 'December',
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
