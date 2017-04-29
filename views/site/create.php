<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PersonalData */

$this->title = Yii::t('app', 'Create Personal Data');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Personal Datas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
