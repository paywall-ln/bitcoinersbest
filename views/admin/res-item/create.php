<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResItem */

$this->title = 'Submit Resource';
?>
<div class="res-item-create">

  <div class="section-header pt-20 pb-20">
    <h2 class="mb-0 c-white"><?= Html::encode($this->title) ?></h2>
  </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
