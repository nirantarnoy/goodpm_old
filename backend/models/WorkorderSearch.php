<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Workorder;

/**
 * WorkorderSearch represents the model behind the search form of `backend\models\Workorder`.
 */
class WorkorderSearch extends Workorder
{
    public $globalSearch;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'work_order_date', 'action_by', 'action_date', 'vendor_id', 'work_trade', 'work_type', 'work_priority', 'work_title', 'plant_id', 'department_id', 'section_id', 'location_id', 'estimate_start_date', 'estimate_end_date', 'actual_start_date', 'actual_end_date', 'actual_asset_start_date', 'asset_id', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['work_order_no', 'name', 'description', 'action_note', 'request_detail'], 'safe'],
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
        $query = Workorder::find();

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
            'work_order_date' => $this->work_order_date,
            'action_by' => $this->action_by,
            'action_date' => $this->action_date,
            'vendor_id' => $this->vendor_id,
            'work_trade' => $this->work_trade,
            'work_type' => $this->work_type,
            'work_priority' => $this->work_priority,
            'work_title' => $this->work_title,
            'plant_id' => $this->plant_id,
            'department_id' => $this->department_id,
            'section_id' => $this->section_id,
            'location_id' => $this->location_id,
            'estimate_start_date' => $this->estimate_start_date,
            'estimate_end_date' => $this->estimate_end_date,
            'actual_start_date' => $this->actual_start_date,
            'actual_end_date' => $this->actual_end_date,
            'actual_asset_start_date' => $this->actual_asset_start_date,
            'asset_id' => $this->asset_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        if($this->globalSearch != ''){
            $query->orFilterWhere(['like','name',$this->globalSearch])
                ->orFilterWhere(['like','work_order_no',$this->globalSearch])
                ->orFilterWhere(['like','description',$this->globalSearch]);
        }

        return $dataProvider;
    }
}
