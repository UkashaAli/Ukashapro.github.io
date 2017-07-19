<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Yiiproducts;

/**
 * Yiiproductssearch represents the model behind the search form about `app\models\Yiiproducts`.
 */
class Yiiproductssearch extends Yiiproducts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Prodid', 'Prodprice'], 'integer'],
            [['Category', 'Brand', 'Prodimage', 'Prodname', 'Proddesc'], 'safe'],
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
        $query = Yiiproducts::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Prodid' => $this->Prodid,
            'Prodprice' => $this->Prodprice,
        ]);

        $query->andFilterWhere(['like', 'Category', $this->Category])
            ->andFilterWhere(['like', 'Brand', $this->Brand])
            ->andFilterWhere(['like', 'Prodimage', $this->Prodimage])
            ->andFilterWhere(['like', 'Prodname', $this->Prodname])
            ->andFilterWhere(['like', 'Proddesc', $this->Proddesc]);

        return $dataProvider;
    }
}
