<?php
/**
 * 获取get数据
 * @param string $str 变量名
 * @param string $filter 过滤方式 int为只支持int类型
 * @param string $default 默认值 当获取不到值时,所返回的默认值
 * @return mix
 */
function get($str = false, $filter = '', $default = false)
{
    if ($str !== false) {
        $return = isset($_GET[$str]) ? $_GET[$str] : false;
        if ($return) {
            switch ($filter) {
                case 'int':
                    if (!is_numeric($return)) {
                        return $default;
                    }
                    break;
                default:
                    $return = htmlspecialchars($return);

            }
            return $return;
        } else {
            return $default;
        }
    } else {
        return $_GET;
    }
}

/**
 * 获取post数据
 * @param $str 变量名
 * @param $filter 过滤方式 int为只支持int类型
 * @param $default 默认值 当获取不到值时,所返回的默认值
 * @return mix
 */
function post($str = false, $filter = '', $default = false)
{
    if ($str !== false) {
        $return = isset($_POST[$str]) ? $_POST[$str] : false;
        if ($return !== false) {
            switch ($filter) {
                case 'int':
                    if (!is_numeric($return)) {
                        return $default;
                    }
                    break;
                default:
                    $return = htmlspecialchars($return);

            }
            return $return;
        } else {
            return $default;
        }
    } else {
        return $_POST;
    }
}

function ajaxReturn($data = [], $msg = 'ok', $code = 0)
{
    $result = array(
        'code'=>$code,
        'msg'=>$msg,
        'data'=>$data
    );
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
    exit();
}

function ajaxReturnError($msg = 'ok', $code = -1)
{
    $result = array(
        'code'=>$code,
        'msg'=>$msg,
        'data'=>[]
    );
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
    exit();
}

/**
 * 获取随机字符串
 * @param $len 获取的字符串长度
 * @param string $type 类型
 * @return string
 */
function comm_rand_str($len, $type = 'all')
{
    switch ($type) {
        case 'all':
            $randStr = "QWERTYUPASDFGHJKZXCVBNM123456789";
            break;
        case 'num':
            $randStr = "1234567890";
            break;
        case 'str':
            $randStr = "QWERTYUPASDFGHJKZXCVBNM";
            break;
    }
    $str = '';
    for ($i = 0; $i < $len; $i++) {
        $rand = rand(0, strlen($randStr) - 1);
        $str .= $randStr[$rand];
    }
    return $str;
}

// 参数排序输出
function get_sign_rank($params)
{
    ksort($params);//将参数按key进行排序
    $str = '';
    foreach ($params as $k => $val) {
        $str .= "{$k}={$val}&"; //拼接成 key1=value1&key2=value2&...&keyN=valueN& 的形式
    }
    return rtrim($str, "&");
}

/**
 * 读取文件
 * @param $filePath 文件路径，暂只支持txt文件
 * @return array 每一行为值的一维数组的
 */
function get_file_data($filePath)
{
    $result = array();
    $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));//判断导入表格后缀格式
    if ($extension == 'txt') {
        $file = fopen($filePath, "r");
        $user = array();
        //输出文本中所有的行，直到文件结束为止。
        while (!feof($file)) {
            $content = fgets($file);//fgets()函数从文件指针中读取一行
            $content = mb_convert_encoding($content, "UTF-8", "UTF-8,GB2312,GBK");
            $content = trim($content);
            if (empty($content)) continue;
            $result[] = $content;
        }
        fclose($file);
    }
    return $result;
}

/**
 * 保存文件
 * @param $file 文件对象
 * @param $category 文件保存的类型区分默认 other 图片传image
 * @param $type 保存的文件类型，不传则用原类型
 * @return array url网络地址，path文件保存后的路径，file_name文件名，save_path入数据库的路径
 */
function save_file($file, $category = 'other', $type = '')
{
    if ($type == '') {
        $type = pathinfo($file['name'], PATHINFO_EXTENSION);
    }
    $dir = Config::$resource_path . '/' . $category . '/' . date("Ymd");
    is_dir($dir) OR mkdir($dir, 0777, true);
    $fileName = comm_rand_str(3) . time();
    $fileName = md5($fileName) . '.' . $type;
    $path = $dir . '/' . $fileName;
    move_uploaded_file($file["tmp_name"], $path);
    $url = str_replace(Config::$resource_path, Config::$resource_url, $path);
    $savePath = str_replace(Config::$resource_path, '', $path);
    $res = array(
        'url' => $url,
        'path' => $path,
        'file_name' => $fileName,
        'save_path' => $savePath,
    );
    return $res;
}
