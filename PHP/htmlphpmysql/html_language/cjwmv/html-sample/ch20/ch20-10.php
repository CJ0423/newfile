<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�ɮפW�ǻP����</title>
</head>
<body>

<?php 
//�����ǻ��L�Ӫ��ϥΪ̦W��
echo $_POST["uname"]." �A�n:<p>";
$error_msg=$_FILES["ufile"]["error"];
$fname=$_FILES["ufile"]["name"];
$tmpname=$_FILES["ufile"]["tmp_name"];
$fsize=$_FILES["ufile"]["size"];
$ftype=$_FILES["ufile"]["type"];

//�P�w�ɮ׬O�_�ǻ����\
  if($error_msg)
  {
	echo "<font color=red>�ɮרS���W�Ǧ��\!</font><p>";
	echo "���������~�X�O -> ".$error_msg;
  }
  else
  { 
    //�ɮפW�Ǧ��\
	echo "�w�g����W�Ǫ��ɮ�,�ɦW�O -> ".$fname."<br>";
	echo "���A�����Ȧs����m�M�ɦW -> ".$tmpname."<br>";
	echo "�W���ɮת��j�p -> ".$fsize."<br>";
	echo "�W���ɮת��ɮ����� -> ".$ftype."<br>";
	echo "<hr>";
	
	//�N�ɮץt�s����w����m
	//$success=copy($tmpname,"newsql.txt");
        $success=copy($tmpname,$fname);	
	if($success)
	{
		echo "�ɮפw�g�ƻs���\!<br>";
		echo "�s�����|�M�ɦW�p�U:<br>";
		//echo realpath("newsql.txt")."<p>";    
       echo realpath($fname)."<p>";
		
		//�R���Ȧs�������ɮ�
		unlink($tmpname);
	}else{
		echo "<font color=red>�L�k�ƻs�ɮ�!</font>";
	}
  }
?>

</body>
</html>
