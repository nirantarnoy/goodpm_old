<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Asset;

/**
 * AssetSearch represents the model behind the search form of `backend\models\Asset`.
 */
class AssetSearch extends Asset
{
    public $globalSearch;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'asset_category_id', 'location_id', 'department_id', 'section_id', 'worktrade_id', 'priority_id', 'supplier_id', 'install_date', 'install_by', 'responsible', 'counting_group', 'critical_type', 'last_pm', 'next_pm', 'incoming_date', 'expiration_date', 'default_location', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['asset_code', 'name', 'description', 'plant_id', 'manufacturer', 'model', 'serial_no', 'service_no', 'notes'], 'safe'],
            [['cost', 'value_amount'], 'number'],
            [['globalSearch'],'string'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Asset::find();

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
            'id' => $this->id,
            'asset_category_id' => $this->asset_category_id,
            'location_id' => $this->location_id,
            'department_id' => $this->department_id,
            'section_id' => $this->section_id,
            'worktrade_id' => $this->worktrade_id,
            'priority_id' => $this->priority_id,
            'supplier_id' => $this->supplier_id,
            'install_date' => $this->install_date,
            'install_by' => $this->install_by,
            'responsible' => $this->responsible,
            'counting_group' => $this->counting_group,
            'critical_type' => $this->critical_type,
            'last_pm' => $this->last_pm,
            'next_pm' => $this->next_pm,
            'cost' => $this->cost,
            'value_amount' => $this->value_amount,
            'incoming_date' => $this->incoming_date,
            'expiration_date' => $this->expiration_date,
            'default_location' => $this->default_location,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

//        $query->andFilterWhere(['like', 'asset_code', $this->asset_code])
//            ->andFilterWhere(['like', 'name', $this->name])
//            ->andFilterWhere(['like', 'description', $this->description])
//            ->andFilterWhere(['like', 'plant_id', $this->plant_id])
//            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
//            ->andFilterWhere(['like', 'model', $this->model])
//            ->andFilterWhere(['like', 'serial_no', $this->serial_no])
//            ->andFilterWhere(['like', 'service_no', $this->service_no])
//            ->andFilterWhere(['like', 'notes', $this->notes]);
        if($this->globalSearch != ''){
            $query->orFilterWhere(['like','name',$this->globalSearch])
                ->orFilterWhere(['like','description',$this->globalSearch]);
        }
        return $dataProvider;
    }
}
