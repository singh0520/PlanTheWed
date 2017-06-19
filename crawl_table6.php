<!doctype html>
<html class='no-js' lang='en'>
    <head>
        <link rel='stylesheet' href='css/crwal-table.css' />
        <link rel='stylesheet' href='css/pagination.css' />
    
   <style>
body{
    background-image: url('img/bc2.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
</style>
    </head>
    <body>
        	<div class="pagination1">
    <div class="page1">
		<a href="services.php" class="page gradient1">Back</a>
	</div>
</div>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Contact No.</th>
        <th>Address</th>
      
      </tr>
    </thead>
    <tbody>
     <?php
     error_reporting(0);
session_start();
$city=$_SESSION['city'];
$lin=$_SESSION['link'];
include_once('simple_html_dom.php');
$target_url = "http://www.justdial.com/".$city."/".$lin."/page-6";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('aside') as $link)
{
    if($link->class == "compdt"){
    foreach($link->find('span') as $link1){
        if($link1->class == "jcn"){
            foreach($link1->find('a') as $link2){
       $v1=$link2->title;
            }
        }
    }
       foreach($link->find('p') as $link1){
        if($link1->class == "jrcw"){
            foreach($link1->find('a') as $link2){
      $v2=$link2->href;
            }
        }
    }
           foreach($link->find('span') as $link1){
        if($link1->class == "mrehover dn"){
            foreach($link1->find('text') as $link2){
          $v3=$link2;
            }
        }
    }
      echo "<tr>";
        
        echo"<td><strong>$v1</strong></td>";
        echo"<td>$v2</td>";
        echo"<td>$v3</td>";
      echo"</tr>";  
    }
}
?>
    </tbody>
  </table>
         
      <div class="pagination">
		<a href="crawl_table5.php" class="page gradient"><<</a>
          <a href="crawl_table3.php" class="page gradient">2</a>
          <a href="crawl_table3.php" class="page gradient">3</a>
          <a href="crawl_table4.php" class="page gradient">4</a>
          <a href="crawl_table5.php" class="page gradient">5</a>
          <a href="#" class="page gradient"><span class="page active">6</span></a>
          <a href="#" class="page gradient">>></a>
	</div>
  
    </body>
</html>