<?php
//数据库链接
$servername="localhost";
$username="root";
$password="windows@123";
$dbname="mydb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(mysqli_connect_errno($conn)){
   echo "ERROR".mysqli_connect_error();
}

//每页显示的留言数
$pagesize =4;

//确定页数p的参数
$p=$_GET['p']?$_GET['p']:1;

//数据指针
$offset = ($p-1)*$pagesize;

//查询本页显示的数据
$sql = "select * from guestbook ORDER BY ID DESC LIMIT $offset,$pagesize";

if ($result = mysqli_query($conn,$sql))
{
   if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
         echo '<a href="'.$row['email'].'">'.$row['nickname'].'</a>';
         echo '发表于:' . $row['createtime'].'</br>';
         echo '内容:' .$row['content'].'<br><hr>';
      }

      //分页代码
      //计算留言总数
      $count_result = mysqli_query($conn,"SELECT count(*) as count FROM guestbook");
      $countsum = mysqli_fetch_array($count_result)['count'];
      echo $countsum;
      //计算总页数
      $pagesum = ceil($countsum/$pagesize);
      echo "共有" . $countsum."条留言";

      //循环输出各页数目及链接
      if($pagesum>1){
         for($i=1;$i<=$pagesum;$i++){
            if($i==$p){
               echo '['.$i.']';
            }else{
               echo '<a href="index.php?p='.$i.'">'.$i.'</a>';
            }
         }
      }
   }
}else{
   echo "ERROR:".mysqli_error($conn);
}

mysqli_close($conn);

