<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Asset */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รหัสเครื่องจักร'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asset-view">

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
            'asset_code',
            'name',
            'description',
            'asset_category_id',
            'plant_id',
            'location_id',
            'department_id',
            'section_id',
            'worktrade_id',
            'priority_id',
            'supplier_id',
            'manufacturer',
            'model',
            'serial_no',
            'service_no',
            'install_date',
            'install_by',
            'responsible',
            'counting_group',
            'critical_type',
            'last_pm',
            'next_pm',
            'cost',
            'value_amount',
            'incoming_date',
            'expiration_date',
            'default_location',
            'notes:ntext',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
