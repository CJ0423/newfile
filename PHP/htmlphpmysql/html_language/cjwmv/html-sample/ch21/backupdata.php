<html>
  <head>
    <title></title>
  </head>
  <body>
    
<?php
/////////////////////////////////////////////////////////////////////////////////////////
//
//      資料庫登入設定
//
/////////////////////////////////////////////////////////////////////////////////////////
    $host = "localhost";      //主機IP
    $username = "root";       //使用者帳號
    $password = "";       //使用者密碼
    $database_name = $_POST["tran"];   //指定資料庫名稱
           // 登入並設定字元型態
    $conn = mysqli_connect($host, $username, $password, $database_name);
    mysqli_query($conn, "SET NAMES UTF8");

    // 取得資料庫中所有資料表名稱並放入資料表名稱陣列中
     $tables = array();
     $sql = "SHOW TABLES";
     $result = mysqli_query($conn, $sql);

     echo $database_name."資料庫中的資料表列示如下:<br>";

     while ($row = mysqli_fetch_row($result))
     {
        $tables[] = $row[0];
        echo $row[0]."<br>";
     }
      
/////////////////////////////////////////////////////////////////////////////////////////
//
//    建立備份檔的sql語法的描述         
//
/////////////////////////////////////////////////////////////////////////////////////////
$sqlScript = "";       //建立sql語法的描述
    $sqlScript=$database_name."\r\n";  //建立資料庫名稱的設定
    foreach ($tables as $table)         //針對每一個資料表分別設定
    {
       ///////////////////////////////////////////////////////////////////////////
       // 準備 建立資料表結構的 SQLscript 
       ////////////////////////////////////////////////////////////////////////////
       $query = "SHOW CREATE TABLE ".$table;
       $result = mysqli_query($conn, $query);
       @$row = mysqli_fetch_row($result);

       $sqlScript .=  $row[1];
       $sqlScript .= ";\r\n";        
    
       $query = "SELECT * FROM $table";
       $result = mysqli_query($conn, $query);
    
       @$columnCount = mysqli_num_fields($result);
       /////////////////////////////////////////////////////////////////////////////////////////    
       // 準備設定每一個資料表中所有資料的  SQLscript 
       ////////////////////////////////////////////////////////////////////////////////////////
       for ($i = 0; $i < $columnCount; $i ++)
       {
           while ($row = mysqli_fetch_row($result)) 
           {
              $sqlScript .= "INSERT INTO $table VALUES(";
              for ($j = 0; $j < $columnCount; $j ++)
              {
                $row[$j] = $row[$j];
                
                if (isset($row[$j]))
                {
                    $sqlScript .= '"' . $row[$j] . '"';
                }
                else
                {
                    $sqlScript .= '""';
                }
                if ($j < ($columnCount - 1))
                {
                    $sqlScript .= ',';
                }
              }
              $sqlScript .= ");\r\n";
          }
       }
    
       $sqlScript .= "\n"; 
   }
///////////////////////////////////////////////////////////////////////////////////////////
//
//    建立備份檔(可以指定備份專用資料夾位置)
//
////////////////////////////////////////////////////////////////////////////////////////////
   if(!empty($sqlScript))
   {
      //$backup_file_name = $database_name . '_backup_' . time() . '.sql';
      $backup_file_name = $database_name . '.sql';
      $fileHandler = fopen($backup_file_name, 'w+');
      $number_of_lines = fwrite($fileHandler, $sqlScript);
      fclose($fileHandler); 
   }         
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//    建立資料表結構語法修正
//說明：$query = "SHOW CREATE TABLE ".$table;指令所獲得語法
//      在每一欄位結構的後面都會加入「換行符號」，會造成語法的
//      不連貫，因此必須將這些換行符號去掉
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $fpp=file($backup_file_name);
  $nda="";
  $len=count($fpp);
echo $len."<br>";
  $nda.=$fpp[0]."\r\n";

            //設定行尾判定
            $pp=1;
        for($a=1;$a<$len;$a++)
	{
            if($fpp[$a][0]=="I")
            {
               if($pp==1)
               {
                 $nda.=$fpp[$a];
               }
               else
               {
                 $nda.="\r\n".$fpp[$a];
                 $pp=1;
               }
            }
            else
            {
               //讀取每一行資料並加入換行動作
               $dept=substr($fpp[$a],0,-1);
               $nda.=$dept;
               $pp=0;
            }
        }
$fnop=fopen($backup_file_name,"w");
$write_ok=fwrite($fnop,$nda);
//關閉檔案已開啟的檔案指標
  fclose($fnop);
?>
</body>
</html>
