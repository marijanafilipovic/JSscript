<?php

/*
$click = array('x'=>$_POST['foo_x'],
               'y'=>$_POST['foo_y'],
               'time'=>time()
               ) ;
*/
//var_dump($click);
// foreach($click as $row){
  $user="marijana84";
 $page= new SplFileInfo($_SERVER['PHP_SELF']);
  echo $pagename=$page->getFilename();
   $file= fopen($user.$pagename.".csv","w", "r+");
 fseek($file, -1, SEEK_END);
 $txt="Vreme klika: ".date("m-d-Y/h:i:sa").", X kordinata klika: ".$_POST['foo_x'].", Y kordinata lika: ".$_POST['foo_y']."\n";
    fwrite($file,  $txt );

 //}
 fclose($file);
?>
<form action='' method="post">
    <input type='button' name="next" value="next" />
<input type="image" alt=' Finding coordinates of an image' src="<?php ?>back.jpg"
name="foo" style=cursor:crosshair;/>
</form>