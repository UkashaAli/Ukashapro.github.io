<?php
 
use app\models\Yiiproducts;
/* @var $this yii\web\View */

$this->title = 'Foodec';
?>
<div class="site-index">
    <div class="jumbotron" style="background-image: url('http://localhost:8080/yii/basic/web/uploads/Veggies2.jpg'); background-repeat:no-repeat; width:100%;">
	<div class="container">
	
        <h1>Foodec</h1>

        <p class="lead">A place to post all your food related products</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Surf our website</a></p>
    </div>
	</div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>Steaks</h2>

				<?php
                $product= Yiiproducts::find()->where(['Prodid' => '1'])->one();
				$Prodname=$product->Prodname;
				$Prodimage=$product->Prodimage;
				$Prodprice=$product->Prodprice;
				
				echo "
				<div class='panel panel-primary'>
				<div class='panel-heading'>
				$Prodname
				</div>
				<div class='panel-body'>
				<img src='http://localhost:8080/yii/basic/web/uploads/$Prodimage' style='margin-left:22px;' width='180' height='180'/>
				</div>
				<div class='panel-footer'>
				Price:&nbsp$Prodprice
				</div>
				</div>
				";
				?>
                
            </div>
            <div class="col-lg-3">
                <h2>Burgers</h2>

                <?php
                $product= Yiiproducts::find()->where(['Prodid' => '2'])->one();
				$Prodname=$product->Prodname;
				$Prodimage=$product->Prodimage;
				$Prodprice=$product->Prodprice;
				
				echo "
				<div class='panel panel-primary'>
				<div class='panel-heading'>
				$Prodname
				</div>
				<div class='panel-body'>
				<img src='http://localhost:8080/yii/basic/web/uploads/$Prodimage' style='margin-left:22px;' width='180' height='180'/>
				</div>
				<div class='panel-footer'>
				Price:&nbsp$Prodprice
				</div>
				</div>
				";
				?>

                
            </div>
            <div class="col-lg-3">
                <h2>Pizza</h2>

                <?php
                $product= Yiiproducts::find()->where(['Prodid' => '3'])->one();
				$Prodname=$product->Prodname;
				$Prodimage=$product->Prodimage;
				$Prodprice=$product->Prodprice;
				
				echo "
				<div class='panel panel-primary'>
				<div class='panel-heading'>
				$Prodname
				</div>
				<div class='panel-body'>
				<img src='http://localhost:8080/yii/basic/web/uploads/$Prodimage' style='margin-left:22px;' width='180' height='180'/>
				</div>
				<div class='panel-footer'>
				Price:&nbsp$Prodprice
				</div>
				</div>
				";
				?>

                
            </div>
			   <div class="col-lg-3">
                <h2>Chinese Food</h2>

                <?php
                $product= Yiiproducts::find()->where(['Prodid' => '4'])->one();
				$Prodname=$product->Prodname;
				$Prodimage=$product->Prodimage;
				$Prodprice=$product->Prodprice;
				
				echo "
				<div class='panel panel-primary'>
				<div class='panel-heading'>
				$Prodname
				</div>
				<div class='panel-body'>
				<img src='http://localhost:8080/yii/basic/web/uploads/$Prodimage' style='margin-left:22px;' width='180' height='180'/>
				</div>
				<div class='panel-footer'>
				Price:&nbsp$Prodprice
				</div>
				</div>
				";
				?>

                
            </div>
        </div>

    </div>
</div>
