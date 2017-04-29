<?php
use yii\helpers\Html;
use yii\grid\GridView;
?>

<p>
     <?= Html::button('Back', array(
               'name' => 'btnBack',
               'class' => 'btn btn-primary',
               'onclick' => "history.go(-1)",
          )
     ); ?>
</p>

<?= GridView::widget([
     'dataProvider' => $dataProvider,
     'filterModel' => $searchModel,
]); ?>

