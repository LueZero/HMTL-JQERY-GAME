<?php

    //引入函式庫
    include 'class\PHPExcel-1.8\Classes\PHPExcel.php';
    //設定要被讀取的檔案
    $file = 'FunctionTestCheckList_IOS11.2.5-beta5_20180111.xlsx';
    try {
        $objPHPExcel = PHPExcel_IOFactory::load($file);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($file,PATHINFO_BASENAME).'": '.$e->getMessage());
    }
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
    
    //列印每一行的資料
    echo "<h2>列印每一行的資料</h2>";
    foreach($sheetData as $key => $col)
    {
        echo "行{$key}: ";
        foreach ($col as $colkey => $colvalue) {
            echo "{$colvalue}, ";
        } 
        echo "<br/>";
    }
    echo "<hr />";
    
    //取得欄位與行列的值
    echo "<h2>取得欄位與行列的值</h2>";
    foreach($sheetData as $key => $col)
    {
        foreach ($col as $colkey => $colvalue) {
            echo "{$colkey}{$key} = {$colvalue}, ";
        }
        echo "<br />";
    }
    

?>