<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://scanvenger.herokuapp.com/");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $top = $data->getElementsByTagName("Top")->item(0)->nodeValue;
   $name = $data->getElementsByTagName("Name")->item(0)->nodeValue;
   $score = $data->getElementsByTagName("Score")->item(0)->nodeValue;
   $team = $data->getElementsByTagName("Team")->item(0)->nodeValue;
  
   echo "
            <ul>
                <li>Top: <strong>$top</strong></li>
                <li>Name: <strong>$name</strong></li>
                <li>Score: <strong>$score</strong></li>
                <li>Team: <strong>$team</strong></li>
            </ul>
        </li>";
 }
?>
</ul>
