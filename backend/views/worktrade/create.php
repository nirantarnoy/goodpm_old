<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Worktrade */

$this->title = Yii::t('app', 'Create Worktrade');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Worktrades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worktrade-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
