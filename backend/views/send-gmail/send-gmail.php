<?php
use yii\bootstrap\Html;
/* @var $success \backend\controllers\SendGmailController*/
?>
<?=Html::beginForm()?>
<input name="email" placeholder="Emai của bạn"/>
<input name="tieu_de" placeholder="Emai của bạn"/>
<input name="noi_dung" placeholder="Emai của bạn"/>
<button type="submit">Gửi</button>
<?=Html::endForm()?>
<?php
echo "{$success}";
?>

