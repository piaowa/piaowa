<?php

namespace extend\imagick;
class Imagick
{

    public $font;

    public function __construct($font = null)
    {
        if ($font == null) {
            throw new \Exception('缺少字体');
        }
        $this->font = $font;
    }

    /**
     * 图片缩放 picSource图片资源 X、Y缩放之后的大小
     * @param resource $picSource 图片资源
     * @param array $size 缩放后的大小 如[200,300]则为200x300的图片
     * @return false|resource
     */
    public function picScaling($picSource, $size)
    {
        $sizeX = $size[0];
        $sizeY = $size[1];
        //声明一个新的图片资源确定大小
        $pic = imagecreatetruecolor($sizeX, $sizeY);
        imagecopyresampled($pic, $picSource, 0, 0, 0, 0, $sizeX, $sizeY, imagesx($picSource), imagesy($picSource));
        return $pic;
    }

    /**
     * 把图片合并（叠放）
     * @param resource $background 底层图片
     * @param resource $new 上面的图片
     * @param array $position 叠放的位置
     * @param int $alpha 透明度百分比
     * @return resource
     */
    public function picZindex($background, $new, $position = [0, 0], $alpha = 0)
    {
        $positionX = $position[0];
        $positionY = $position[1];
        //合成图片输出$img
        imagecopymerge($background, $new, $positionX, $positionY, 0, 0, imagesx($new), imagesy($new), $alpha);
        return $background;
    }

    /**
     * 图片上写字
     * @param resource $background 底层图片
     * @param string $text 字的内容
     * @param array $position 字体框的位置
     * @param int $size 文字大小
     * @param int $textWidth 字体框宽度
     * @param array $col 字体颜色
     * @return mixed
     */
    public function picFont($background, $text = 'default text', $position = [0, 0], $fontSize = 32, $textWidth = 0, $col = [0, 0, 0, 0])
    {

        $positionX = $position[0];
        $positionY = $position[1];

        $color = imagecolorallocatealpha($background, $col[0], $col[1], $col[2], $col[3]);
        $font = $this->font;
        if ($textWidth == 0) {
            $bgWidth = imagesx($background) - $positionX;
        } else {
            $bgWidth = $textWidth - $positionX;
        }

        //文字换行
        if (strpos($text, "\n") !== false) {
            $string = $text;
        } else {
            $stringInfo = $this->autoWrap($fontSize, 0, $text, $bgWidth);
            $string = $stringInfo['content'];
        }

        imagettftext($background, $fontSize, 0, $positionX, $positionY + $fontSize, $color, $font, $string);
        return $background;
    }

    /**
     * 图片先压缩在换成圆形图
     * @param resource $picSource
     * @param array $size
     * @return false|resource
     */
    public function resizeCircle($picSource, $size = [0, 0])
    {

        $src_img = $this->picScaling($picSource, $size);

        $w = $size[0];
        $h = $size[1];
        $img = imagecolorallocate($src_img, 255, 0, 0);

        imagearc($src_img, $w / 2, $h / 2, $w, $h, 0, 360, $img);
        imagefilltoborder($src_img, 0, 0, $img, $img);
        imagefilltoborder($src_img, $w, 0, $img, $img);
        imagefilltoborder($src_img, 0, $h, $img, $img);
        imagefilltoborder($src_img, $w, $h, $img, $img);
        imagecolortransparent($src_img, $img);

        return $src_img;
    }

    /**
     * 获取字体居中时起始位置
     * @param string $text
     * @param int $fontSize
     * @param int $width
     * @return float|int
     */
    public function getTextCenterX($text = '', $fontSize = 32, $width = 100)
    {
        $font = $this->font;
        $a = imagettfbbox($fontSize, 0, $font, $text);   //得到字符串虚拟方框四个点的坐标
        $len = $a[2] - $a[0];
        $x = ($width - $len) / 2;
        return $x - 10;
    }

    /**
     * 打开图片资源
     * @param string $picPath 图片文件路径
     * @return false|resource
     */
    public function openPicResource($picPath = '')
    {
        $ext = getimagesize($picPath);
        switch (end($ext)) {
            case 'image/jpeg':
                $img = imagecreatefromjpeg($picPath);
                break;
            case 'image/png':
                $img = imagecreatefrompng($picPath);
                break;
            case 'image/gif':
                $img = imagecreatefromgif($picPath);
                break;
            default:
                exit('error!');
                break;
        }
        return $img;
    }

    /**
     * 文字自动换行
     * @param int $fontSize
     * @param int $angle
     * @param string $text
     * @param int $width
     * @return array
     */
    function autoWrap($fontSize = 32, $angle = 0, $text = '', $width = 100)
    {
        $content = "";
        // 将字符串拆分成一个个单字 保存到数组 letter 中
        $str_len = mb_strlen($text, "utf-8");
        for ($i = 0; $i < $str_len; $i++) {
            $letter[] = mb_substr($text, $i, 1, "utf-8");
        }
        $font = $this->font;

        foreach ($letter as $l) {
            $teststr = $content . " " . $l;
            $testbox = imagettfbbox($fontSize, $angle, $font, $teststr);
            // 判断拼接后的字符串是否超过预设的宽度
            if (($testbox[2] >= $width) && ($content !== "")) {
                $content .= "\n";
            }
            $content .= $l;
        }

        $res = array(
            "content" => $content,
            "width" => $testbox[2] - $testbox[0],
            "height" => $testbox[3] - $testbox[5]
        );
        return $res;
    }

}
