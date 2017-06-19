<?php
include_once('simple_html_dom.php');
$target_url = "http://www.justdial.com/Mumbai/Costumes-On-Hire/ct-3726/page-1";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('aside') as $link)
{
    if($link->class == "compdt"){
    foreach($link->find('span') as $link1){
        if($link1->class == "jcn"){
            foreach($link1->find('a') as $link2){
       $_SESSION['v1']=$link2->title;
            }
        }
    }
       foreach($link->find('p') as $link1){
        if($link1->class == "jrcw"){
            foreach($link1->find('a') as $link2){
      $_SESSION['v2']=$link2->href;
            }
        }
    }
           foreach($link->find('span') as $link1){
        if($link1->class == "mrehover dn"){
            foreach($link1->find('text') as $link2){
          $_SESSION['v3']=$link2;
            }
        }
    }
      echo "<tr>";
        
        echo"<td><?php echo $user->v1; ?></td>";
        echo"<td><?php echo $user->v2; ?></td>";
        echo"<td><?php echo $user->v3; ?></td>";
      echo"</tr>";  
    }
}
?>
