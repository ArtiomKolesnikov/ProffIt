<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">



    <div class="body-content">

        <?php $f = ActiveForm::begin(); ?>

        <?= $f->field($form, 'name') ?>
        <?= $f->field($form, 'email') ?>
        <?= Html::submitButton('Отправить'); ?>

        <?php ActiveForm::end() ?>

    </div>
</div>
