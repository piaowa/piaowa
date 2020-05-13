<?php

namespace app\controller;

use extend\imagick\Imagick;
use extend\PHPExcel\ExcelExport;
use piaowa\core\Config;
use piaowa\core\Piaowa;
use piaowa\lib\Controller;
use piaowa\lib\Database;
use piaowa\lib\Db;
use piaowa\lib\Log;
use piaowa\lib\Logger;
use piaowa\lib\RedisCli;
use Endroid\QrCode\QrCode;

class Index extends Controller
{
    public function index()
    {
        echo 'hello, this is first controller';
    }

    public function abc()
    {
        echo '丁臭臭是头猪！';
        $a = array('丁臭臭是头猪');
        Piaowa::$logger->info('日志', $a);
    }

    public function test()
    {
        $data = array(
            'head' => ['第一列', '第二列', '第三列', '第四列'],
            'column' => array(
                ['id' => 1, 'name' => 'pp', 'age' => 23, 'ip' => '215'],
                ['id' => 2, 'name' => 'pwp', 'age' => 13, 'ip' => '2515'],
                ['id' => 3, 'name' => 'pdp', 'age' => 223, 'ip' => '2125'],
                ['id' => 4, 'name' => 'p5p', 'age' => 253, 'ip' => '21asd5'],
            ),
        );
//        $excel  = new ExcelExport();
//        $excel->excelData($data, 'abc');
        ExcelExport::get_instance()->excelData($data, 'lalal');
        exit;

//        $qrCode = new QrCode('Life is too short to be generating QR codes');

//        header('Content-Type: '.$qrCode->getContentType());
//        echo $qrCode->writeString();exit();
        $ary = array(
            'abc' => 1,
            'acc' => 1,
            'adc' => 1,
        );
        $redis1 = RedisCli::init();
        $redis1->set('abc', 30);
        $this->testRedis();
        $redis2 = RedisCli::init(1);
        $redis2->set('abc', 5);
        dump($redis2->get('abc'));
        dump($redis1->get('abc'));
//        $redis = RedisCli::init();
//        $redis->incrby('abc', 3);
//        Piaowa::$logger->info('日志', $ary);
        $a = array(
            '0.1' => 3,
        );
        dump($a);
//        exit;
        $db = Database::init();
//        exit();
//        dump($db);
        $this->testdb($db);
        $options = Config::get('database', 'error_msg');
        $db = Database::init($options);
        $this->testdb($db);
    }

    public function testRedis()
    {
        $redis = RedisCli::init();
        $redis->incrby('abc', 3);
        $a = $redis->get('abc');
        dump($a);
    }

    public function testdb($db)
    {
        $array = array(
            'username' => 'piaowa',
            'password' => md5('piaowa'),
        );
        $db->insert('user', $array);
        $a = $db->select('user', '*');
        dump($a);
    }

    /**
     * @param $data
     * $data = array(
     * "image" => "https://img.alicdn.com/imgextra/i3/1991865415/O1CN01iQX4WW1ps7G46gxI2_!!1991865415.jpg",
     * "price" => "19.90",
     * "couponPrice" => "20",
     * "title" => "MiiOW/猫人超薄运动内衣女文胸聚拢无钢圈胸罩无痕跑步美背背心式",
     * "itemid" => "586416347544",
     * "url" => "http://xmtbkp.ximengai.com//wap.php/Index/share/num_iid/586416347544/uid/93"
     * );
     * @return string|string[]
     * @throws ImagickException
     */
    public function getAdsPic($data)
    {
        include_once path_format('lib/imagick/imagick.php');
        $img = new ImagickBase();
        //标题图
        $titlePic = $img->get_pic_source($data['image']);
        $titlePic = $img->pic_scaling($titlePic, [512, 512]);

        //背景图
        $backGroundPath = Config::$resource_path . '/default/xm/ad_backGroud.png';
//        $backGroundPath = 'D:/ad_backGroud.png';
        $backGround = $img->get_pic_source($backGroundPath);

        $backGround = $img->pic_zindex($backGround, $titlePic, [14, 14], 100);
        imagedestroy($titlePic);

        $qrPicPath = $img->get_qrcode($data['url']);
        $qrPic = $img->get_pic_source($qrPicPath);
        $qrPic = $img->pic_scaling($qrPic, [143, 143]);
        $backGround = $img->pic_zindex($backGround, $qrPic, [15, 800], 100);
        imagedestroy($qrPic);

        $size = 18;
        if (strlen($data['title']) > 100) {
            $size = 13;
        }
        $backGround = $img->pic_font($backGround, $data['title'], [50, 557], $size, 500, [0, 0, 0, 1]);
        $text = number_format($data['price'], 1);
        $backGround = $img->pic_font($backGround, $text, [66, 683], 25, 360, [255, 79, 79, 1]);

        $text = $data['couponPrice'] + $data['price'];
        $text = number_format($text, 1);
        $backGround = $img->pic_font($backGround, $text, [223, 693], 13, 360, [144, 144, 144, 1]);

        $text = "{$data['couponPrice']} 元";
        $textX = $img->text_algin_x($text, 12, 80);
        $backGround = $img->pic_font($backGround, $text, [$textX + 435, 683], 13, 0, [255, 255, 255, 1]);

        $path = Config::$resource_path . '/share/' . md5(time()) . '.jpg';
//        $path = "D:/abc.png";
        // imagepng($backGround, $path, 9);
        imagejpeg($backGround, $path, 90);
        imagedestroy($backGround);
//        return $path;

        $url = str_replace(Config::$resource_path, Config::$resource_url, $path);

        //压缩图片到100K以内
        // $file_size=100*1024;
        // $url= $this->get_push_img($url,$file_size);

        return $url;
    }
}