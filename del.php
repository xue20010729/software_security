<?php 
      $conn=mysql_connect("localhost", "root", "223502xuechen");  
      mysql_select_db("testDB");       
      $newsid = $_GET['newsid']; 
      $SQLStr = "delete from news where newsid=$newsid";  
      echo $SQLStr;
      $result=mysql_query($SQLStr);       
      // �ر�����
      mysql_close($conn);        
      if ($result)
      {
      	?>
      	<script> 
      		alert("delete succes");
      		window.location.href="sys.php";  
      	</script>
      	 <?php
      }
      else{
      	?>
      	<script> 
      		alert("delete failed");
      		history.back();  
      	</script>
      	 <?php
      }       
?> 

