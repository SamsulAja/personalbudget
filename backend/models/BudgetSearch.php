<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Budget;

/**
 * BudgetSearch represents the model behind the search form about `backend\models\Budget`.
 */
class BudgetSearch extends Budget
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'December'], 'integer'],
            [['Year', 'subcategory'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Budget::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'Year' => $this->Year,
            'Jan' => $this->Jan,
            'Feb' => $this->Feb,
            'March' => $this->March,
            'Apr' => $this->Apr,
            'May' => $this->May,
            'Jun' => $this->Jun,
            'Jul' => $this->Jul,
            'Aug' => $this->Aug,
            'Sep' => $this->Sep,
            'Oct' => $this->Oct,
            'Nov' => $this->Nov,
            'December' => $this->December,
        ]);

        $query->andFilterWhere(['like', 'subcategory', $this->subcategory]);

        return $dataProvider;
    }
}
