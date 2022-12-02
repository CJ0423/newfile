<?php
/*
  報表資料確認
    系科變數:$dept   ,  年級變數:$grade  ,  班級變數:$class
    科目數變數:$counu ， 人數變數:$nu

    科目名稱變數:$couna[$couna]  ,  科目學分變數:$cousc[$couna]


    班級資料設為二維陣列變數:$scor[$x][$y]
       [$x]代表座號，
       [$y]表示項目，列示如后:1->姓名、2->科目１、3->科目２、4->科目３...以此類推

資料獲得方式確認
   透過表單接收:
    系科變數:$dept   ,  年級變數:$grade  ,  班級變數:$class
    科目變數:$course 
    班級各項資料設為二維陣列變數:$scor[$x][$y]，$y為1:姓名 ,2~$counu+1 為科名稱,$counu+2:總分   $counu+3:平均
                                                                                $counu+4:名次   $counu+5:實得學分
 
*/
//////////   讀取 session 資料  //////////////////////////////
	ob_start();  //開啟輸出暫存器

   //指定session_ID
        $idname=$_POST["idname"];        //避免狀況五現象
        session_id($idname);
   //啟動session
        session_start();

   //分別設定「系科、年、班、科目數、人數」的 session變數 值
      $dept=$_SESSION["dept"];         //系科資料
      $grade=$_SESSION["grade"];       //年級資料
      $class=$_SESSION["class"];       //班級資料
      $counu=$_SESSION["counu"];       //科目數資料
      $nu=$_SESSION["nu"];             //人數資料
      $counna=$_SESSION["counna"];        //科目名稱
      $counsc=$_SESSION["counsc"];         //學分名稱



//////////////////////////////////////////////////////////////



  //依科目數設定接收 學生各科成績 資料廻圈 並 運用此廻圈計算 總學分 數

    $ttsc=0;    //預設 總學分數 之 變數初值
    for($a=1;$a<=$counu;$a++)
    {
      $ttsc+=$counsc[$a];             //總學分數 之累加
    }

  // 接收班級各項分數資料
for($x=1;$x<=$nu;$x++)        //$x代表座號，$nu為人數資料
{

   $scor[$x][$counu+2]=0;              //設定總分初值 $counu+2 為總分欄位
   $scor[$x][$counu+5]=0;              //設定總分初值 $counu+4 為實得學分欄位

  for($a=1;$a<=($counu+1);$a++)     //$a代表: 1 姓名,2~$counu+1 各科目分數
  {
    $midata="scor".$x.$a;             //產生對應表單名稱 [scor11]~[scor(n1)(n2)]

    $scor[$x][$a]=$_POST[$midata];    //接收對應學生姓名及成績表單名稱的資料
    //計算總分(累加) 及 實得學分
    if($a<>1)
    {
       $scor[$x][$counu+2]+=$scor[$x][$a]*$counsc[$a-1];     //總分累加(各科分數*學分) 註:學分陣列變數索引值比分數索引值少1 
       if($scor[$x][$a]>=60)
       {
          $scor[$x][$counu+5]+=$counsc[$a-1];                //實得學分累加    註:學分陣列變數索引值比分數索引值少1  
       }
    }

  }

     $scor[$x][$counu+3]=(int)($scor[$x][$counu+2]/$ttsc+0.5);     //計算平均分數,$counu+3 為平均欄位
}

//設定名次(名次必須等所有學生的總分全部計算完成,才能比較)

for($x=1;$x<=$nu;$x++)        //$x代表 比較者 座號，$nu為人數資料
{
   $scor[$x][$counu+4]=1;     //未比較前先設定名次初值為1(第 1 名)
   
   for($y=1;$y<=$nu;$y++)        //$x代表 被比較者 座號，$nu為人數資料
   {
      if($scor[$x][$counu+2]<$scor[$y][$counu+2])
      {
         $scor[$x][$counu+4]++;  //當$y的分數比較高時，$x的名次就要加1(退步1名)  
      }
   }
}

//列印報表
Echo "<center><h1>中職科技大學</h1>";
Echo "<h2>成績單</h2>";
Echo "科系:".$dept."<br>";
Echo "年班:".$grade."年".$class."班<br>";
echo "人數:".$nu."人<p>";
Echo "<table border='1'>";

//列印標題
  Echo "<tr><td>座號</td><td>姓名</td>";

//列印科目名稱欄位
    for($a=1;$a<=$counu;$a++)
    {
      echo "<td>".$counna[$a]."(".$counsc[$a].")</td>";
    }
    echo "<td>總分</td><td>平均</td><td>名次</td><td>實得學分</td></tr>";

//1~5號同學
for($x=1;$x<=$nu;$x++)
{
  echo "<tr><td>".$x."</td>";
    for($a=1;$a<=($counu+5);$a++)
    {
       if(($a<>1) and ($a<>$counu+4) and ($a<>$counu+5)  and ($scor[$x][$a]<60))   //第1欄為姓名,$counu+4欄為名次,$counu+5欄為實得學分
       {
           echo "<td><font color='red'>".$scor[$x][$a]."</font></td>";
       }
       else
       {
           echo "<td>".$scor[$x][$a]."</td>";
       }
    }
  echo "</tr>";
}
Echo "</table>";







?>
