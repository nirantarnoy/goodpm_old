<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Failurecode */

$this->title = Yii::t('app', 'Update Failurecode: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Failurecodes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="failurecode-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
