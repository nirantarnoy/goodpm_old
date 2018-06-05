<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Workorder */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Workorders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workorder-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'work_order_no',
            'work_order_date',
            'name',
            'description:ntext',
            'action_by',
            'action_date',
            'action_note',
            'vendor_id',
            'work_trade',
            'work_type',
            'work_priority',
            'work_title',
            'request_detail:ntext',
            'plant_id',
            'department_id',
            'section_id',
            'location_id',
            'estimate_start_date',
            'estimate_end_date',
            'actual_start_date',
            'actual_end_date',
            'actual_asset_start_date',
            'asset_id',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
