<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


<div class="row">

<?php
foreach($model as $rec){
	$image=$rec->Prodimage;
	$price=$rec->Prodprice;
echo "
<div class='col-lg-3'>
<div class='panel panel-success'>
<div class='panel-heading'>
$rec->Prodname
</div>
<div class='panel-body'>
<img src='http://localhost:8080/yii/basic/web/uploads/$image' style='margin-left:22px;' width='180' height='180'/>
</div>
<div class='panel-footer'>
Price:&nbsp$price
</div>
</div>
</div>

";
}
?>
</div>
</div>
</div>


