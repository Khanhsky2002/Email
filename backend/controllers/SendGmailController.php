<?php

namespace backend\controllers;

use yii\web\Controller;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class SendGmailController extends Controller
{
    public function actionSendGmail(){
        if(isset($_POST['email'])&&isset($_POST['tieu_de']) &&isset($_POST['noi_dung'])){
            $email=$_POST['email'];
            $tieu_de=$_POST['tieu_de'];
            $noi_dung=$_POST['noi_dung'];
            Yii::$app->mailer->compose() // Sử dụng nếu có template
            ->setFrom('anhkhanh5539574@gmail.com') // Mail sẽ gửi đi
            ->setTo($email) // Mail sẽ nhận
            ->setSubject($tieu_de) // tiêu đề mail
            ->setHtmlBody("<b>{$noi_dung}</b>") // Nội dung mail dạng Html nếu không muốn dùng html thì có thể thay thế bằng setTextBody('Nội dung gửi mail trong Yii2') để chỉ hiển thị text
            ->send();
            return  $this->render('send-gmail',[
                'success'=>"Thành công",
            ]);
        }

      return  $this->render('send-gmail',[
          'success'=>"",
      ]);
    }
}