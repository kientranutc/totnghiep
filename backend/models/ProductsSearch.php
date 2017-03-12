<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `backend\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'pro_price', 'sale_id', 'quantity','status','ishot'], 'integer'],
            [['pro_name', 'sapo', 'description', 'created_at', 'updated_at', 'name_seo'], 'safe'],
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
        $query = Products::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,

            'pagination' => [
                'pageSize' => 10,
            ],
    
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cat_id' => $this->cat_id,
            'pro_price' => $this->pro_price,
            'sale_id' => $this->sale_id,
            'quantity' => $this->quantity,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'status'=>$this->status,
             'ishot'=>$this->ishot
        ]);
        $query->andFilterWhere(['like', 'pro_name', $this->pro_name])
            ->andFilterWhere(['like', 'sapo', $this->sapo])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'name_seo', $this->name_seo])
             ->andFilterWhere(['like', 'status', $this->status])
              ->andFilterWhere(['like', 'ishot', $this->ishot]);

        return $dataProvider;
    }
}
