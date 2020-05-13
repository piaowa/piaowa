<?php

namespace extend\PHPExcel;
class ExcelExport
{

    protected static $_instance;

    public static function get_instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct()
    {

    }

    /**
     * @param array $data [head, column]
     * @param $filename
     * @throws \PHPExcel_Exception
     */
    public function excelData($data, $filename)
    {
        //set_time_limit(0);
        ini_set('memory_limit', '1024M');
        require_once 'PHPExcel.php';
        $objPHPExcel = new \PHPExcel();
//        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
//        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);

        $HEAD = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

        // 写入表头信息
        $head_count = count($data['head']);
        if ($head_count > 26 || empty($head_count)) {
            exit('error');
        }
        for ($i = 0; $i < $head_count; $i++) {
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($HEAD[$i] . '1', $data['head'][$i]);
        }
        //写表格内容
        $column_count = count($data['column']);
        for ($i = 0; $i < $column_count; $i++) {
            $k = 0;
            foreach ($data['column'][$i] as $value) {
                $objPHPExcel->getActiveSheet()->setCellValue($HEAD[$k] . ($i + 2), $this->convertUTF8($value));
                $k++;
            }
        }

        $objPHPExcel->getActiveSheet()->setTitle($filename);      //设置sheet的名称
        $objPHPExcel->setActiveSheetIndex(0);                   //设置sheet的起始位置
        // $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');   //通过PHPExcel_IOFactory的写函数将上面数据写出来
        $PHPWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");

        header("Content-Disposition: attachment;filename={$filename}.xlsx");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Pragma: public");

        $PHPWriter->save("php://output"); //表示在$path路径下面生成demo.xlsx文件
    }

    public function convertUTF8($str)
    {
        if (empty($str) && $str != 0) return '';
        // $str = iconv('utf-8','gb2312',  $str);
        return (string)$str . ' ';
    }

}
