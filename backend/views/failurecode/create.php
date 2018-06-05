<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Failurecode */

$this->title = Yii::t('app', 'สร้าง Failure code');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Failure Code'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="failurecode-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
