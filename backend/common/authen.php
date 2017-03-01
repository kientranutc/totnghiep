<?php 
namespace backend\common ;

use yii;


class authen{
	public function security()
	{
		$level=Yii::$app->user->identity->level;
    if($level!=1)
    {
    return Yii::$app->getResponse()->redirect(['/site/index']);
    }

	}
}

 ?>