<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Transaction;

/**
 * TransactionSearch represents the model behind the search form about `backend\models\Transaction`.
 */
class TransactionSearch extends Transaction
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Debit', 'Kredit'], 'integer'],
            [['Account', 'Date', 'Description', 'subcategory'], 'safe'],
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
        $query = Transaction::find();

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
            'Date' => $this->Date,
            'Debit' => $this->Debit,
            'Kredit' => $this->Kredit,
        ]);

        $query->andFilterWhere(['like', 'Account', $this->Account])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'subcategory', $this->subcategory]);

        return $dataProvider;
    }
}
