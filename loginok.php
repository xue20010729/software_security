 <?php
 	    $loginok=0;
      $conn=mysql_connect("localhost", "root", "223502xuechen");   
      $username = $_POST['username'];
      $pwd = $_POST['password'];
      $SQLStr = "SELECT * FROM userinfo where username='$username' and password='$pwd'"; 
      echo $SQLStr;

      $result=mysql_db_query("testDB", $SQLStr, $conn); 
      if ($row=mysql_fetch_array($result))//ͨ��ѭ����ȡ��������  
      {
      	$loginok=1;
      }
      // �ͷ���Դ
      mysql_free_result($result);
      // �ر�����
      mysql_close($conn);        
      if ($loginok==1)
      {
      	?>
      	<script> 
      		alert("login succes");
      		window.location.href="sys.php";  
      	</script>
      	 <?php
      }
      else{
      	?>
      	<script> 
      		alert("login failed");
      		history.back();  
      	</script>
      	 <?php
      }
       
?> 
