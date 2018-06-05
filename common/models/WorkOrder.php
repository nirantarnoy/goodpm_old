<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "work_order".
 *
 * @property int $id
 * @property string $work_order_no
 * @property int $work_order_date
 * @property string $name
 * @property string $description
 * @property int $action_by
 * @property int $action_date
 * @property string $action_note
 * @property int $vendor_id
 * @property int $work_trade
 * @property int $work_type
 * @property int $work_priority
 * @property int $work_title
 * @property string $request_detail
 * @property int $plant_id
 * @property int $department_id
 * @property int $section_id
 * @property int $location_id
 * @property int $estimate_start_date
 * @property int $estimate_end_date
 * @property int $actual_start_date
 * @property int $actual_end_date
 * @property int $actual_asset_start_date
 * @property int $asset_id
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class WorkOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['work_order_date', 'action_by', 'action_date', 'vendor_id', 'work_trade', 'work_type', 'work_priority', 'work_title', 'plant_id', 'department_id', 'section_id', 'location_id', 'estimate_start_date', 'estimate_end_date', 'actual_start_date', 'actual_end_date', 'actual_asset_start_date', 'asset_id', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['description', 'request_detail'], 'string'],
            [['work_order_no', 'name', 'action_note'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'work_order_no' => Yii::t('app', 'Work Order No'),
            'work_order_date' => Yii::t('app', 'Work Order Date'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'action_by' => Yii::t('app', 'Action By'),
            'action_date' => Yii::t('app', 'Action Date'),
            'action_note' => Yii::t('app', 'Action Note'),
            'vendor_id' => Yii::t('app', 'Vendor ID'),
            'work_trade' => Yii::t('app', 'Work Trade'),
            'work_type' => Yii::t('app', 'Work Type'),
            'work_priority' => Yii::t('app', 'Work Priority'),
            'work_title' => Yii::t('app', 'Work Title'),
            'request_detail' => Yii::t('app', 'Request Detail'),
            'plant_id' => Yii::t('app', 'Plant ID'),
            'department_id' => Yii::t('app', 'Department ID'),
            'section_id' => Yii::t('app', 'Section ID'),
            'location_id' => Yii::t('app', 'Location ID'),
            'estimate_start_date' => Yii::t('app', 'Estimate Start Date'),
            'estimate_end_date' => Yii::t('app', 'Estimate End Date'),
            'actual_start_date' => Yii::t('app', 'Actual Start Date'),
            'actual_end_date' => Yii::t('app', 'Actual End Date'),
            'actual_asset_start_date' => Yii::t('app', 'Actual Asset Start Date'),
            'asset_id' => Yii::t('app', 'Asset ID'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
