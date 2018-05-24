<?php
use yii\helpers\Html;
$this->title ="Department";
?>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?=Html::a('login',['/site/login']) ?> to create a department.</span>
<?php else: ?>
    <?= Html::a('Create department',['/department/create'],
    ['class'=>'btn btn-primary btn-lg pull-right']); ?>
<?php endif; ?>

<h1><?=$this->title?></h1>

<table class="table table-bordered">
<tr>
    <th>Department Name</th>
    <th>Locaton ID</th>
    
</tr>
<?php foreach($model as $department): ?>
<tr class="clickable">
    <td>
        <?= Html::a($department->department_name,
        ['/department/view',
        'department_id'=>$department->department_id]); ?>
        </td>
            <td><?= $department->location_id ?></td>
            
            
 </tr>
  <?php endforeach; ?>
</table>
