 <?php 
      $conn=mysql_connect("localhost", "root", "223502xuechen");   
      mysql_select_db("testDB");      
      $topic = $_POST['topic'];
      $content = $_POST['content'];
      $SQLStr = "insert into news(topic, content) values('$topic', '$content')"; 
      echo $SQLStr; 
      $result=mysql_query($SQLStr);
 // �ر�����
      mysql_close($conn);        
      if ($result)
      {
      	?>
      	<script> 
      		alert("insert succes");
      		window.location.href="sys.php";  
      	</script>
      	 <?php
      }
      else{
      	?>
      	<script> 
      		alert("insert failed");
      		history.back();  
      	</script>
      	 <?php
      }
       
?> 
