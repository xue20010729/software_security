<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ҳ</title>
</head>
<?php
 $conn=mysql_connect("localhost", "root", "223502xuechen"); 
?>
<body>
<div align="center">
  <table width="900" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="40"><form id="form1" name="form1" method="post" action="add.php">
        <div align="right">���ű��⣺
          <input name="topic" type="text" id="topic" size="50" />
          <BR>
          �������ݣ�
          <textarea name="content" cols="60" rows="8" id="content"></textarea><BR>
          <input type="submit" name="Submit" value="���" />
        </div>
      </form>
      </td>
    </tr>
    <tr>
      <td><hr /></td>
    </tr>
    <tr>
      <td height="300" align="center" valign="top"><table width="600" border="0" cellspacing="0" cellpadding="0">
<tr>
          <td width="100" height="30"><div align="center">�������</div></td>
          <td><div align="center">���ű���</div></td>
          <td><div align="center">ɾ��</div></td>
        </tr>
<?php 
      $SQLStr = "select * from news";
      $result=mysql_db_query("testDB", $SQLStr, $conn); 
      if ($row=mysql_fetch_array($result))//ͨ��ѭ����ȡ��������  
      { 	   
 	    // ��λ����һ����¼
         mysql_data_seek($result, 0);
         // ѭ��ȡ����¼
         while ($row=mysql_fetch_row($result))
         {  
?>        
 <tr>
          <td height="30"><div align="center"> <?php echo $row[0] ?> </div></td>
          <td width="400"> <div align="center"> <?php echo $row[1] ?>   </div></td>
          <td><div align="center"><a href="del.php?newsid=<?php echo $row[0] ?> " >  ɾ�� </a> </div></td>
        </tr>
<?php 
         }
       }		
?>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>

<?php 
    // �ͷ���Դ
    mysql_free_result($result);
    // �ر�����
    mysql_close($conn);  
?>
