<?php
/* @var $this yii\web\View */
/* @var $model app\models\Unit */

use app\classes\Caption;

//$this->title = $model::SECTION_TITLE;
$this->params['breadcrumbs'][] = ['label' => Caption::SECTION_UNIT, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Caption::ACTION_CREATE];
?>
<div class="unit-create">

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
