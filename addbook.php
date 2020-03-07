<?php
 if ($_POST['password'] === 'World')
 {
  $message = $_POST['message'];
  $name = $_POST['name'];
  $message = str_replace ("\n","<br>",$message);
  $message = strip_tags ($message, '<br>');
  $newRow = '<div class="viewGuestbook"><span class="message">' . ($message) .
  	    '</span><br> <span class="data">' . date('d.m.Y H:i') . '</span> - <span class="name">' . strip_tags ($name) .
          '</span></div>';
  $oldRows = join ('', file ('guestbook.txt') );
  $fileName = fopen ('guestbook.txt', 'w');
  fputs ($fileName, $newRow . chr(13) . chr(10) . $oldRows);
  fclose ($fileName);
  include ("readbook.php");
 }
else {
 echo "hi";
}
?>
