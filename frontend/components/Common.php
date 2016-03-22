<?php
namespace frontend\components;

use yii\base\Component;
use yii\helpers\BaseFileHelper;
use yii\helpers\Url;



class Common extends Component
{

    const EVENT_NOTIFY = 'notify_admin';

//что бы мейлер заработал нужно изменить метод мейлура в папке вендор на статический
    public function sendMail($subject, $text, $emailFrom = 'krekotenko@gmail.com', $nameFrom = 'Advert')
    {
        if (\Yii::$app->mail->compose()
            ->setFrom(['krekotenko@gmail.com' => 'Advert'])
            ->setTo([$emailFrom => $nameFrom])
            ->setSubject($subject)
            ->setHtmlBody($text)
            ->send()
        ) {
            $this->trigger(self::EVENT_NOTIFY);
            return true;
        }
    }

    public function notifyAdmin($event)
    {

        print "Notify Admin";
    }

    public static function getTitleAdvert($data)
    {

        return $data['bedroom'] . ' Bed Rooms and ' . $data['kitchen'] . ' Kitchen Room Aparment on Sale';
    }


    public static function getImageAdvert($data,$general = true,$original = true){

        $image = [];
        $base = Url::base();
        if($general){

            $image[] = $base.'/uploads/adverts/'.$data['idadvert'].'/general/small_'.$data['general_image'];
        }
        else{
            $path = \Yii::getAlias("@frontend/web/uploads/adverts/".$data['idadvert']);
            $files = BaseFileHelper::findFiles($path);

            foreach($files as $file){
                if (strstr($file, "small_") && !strstr($file, "general")) {
                    $image[] = $base . '/uploads/adverts/' . $data['idadvert'] . '/' . basename($file);
                }
            }
        }

        return $image;
    }
    public static function substr($text, $start = 0, $end = 50)
    {

        return mb_substr($text, $start, $end);


    }
    public static function getType($row){
        return ($row['sold']) ? 'Sold' : 'New';
    }
    public static function getUrlAdvert($row){

        return Url::to(['/main/main/view-advert', 'id' => $row['idadvert']]);
    }


}