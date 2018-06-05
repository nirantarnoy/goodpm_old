<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Worktrade */

$this->title = Yii::t('app', 'Update Worktrade: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Worktrades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="worktrade-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
