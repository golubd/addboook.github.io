<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Гостевая Книга</title>
	<link rel="stylesheet" href="readbook.css">
</head>
<body>
	<header>
			<nav>
				<ul>
					<li><a href="index.html" target="_self" rel="noopener noreferrer">Отправить сообщение</a></li>
					<li><a href= # target="_self" rel="noopener noreferrer">Посмотреть все сообщения</a></li>
				</ul>
			</nav>
	</header>
</body>
</html>
<?php

 $fileName = file ("guestbook.txt");
 $rows = count ($fileName);
  
 if ($rows > 10)
 {
 	if (!isset ($row) )
 	{
 		$row = 0;
 	}
 
 	print ("<table class=\"guestbookLinks\"><tr><td width=\"50%\">");
  
 	if ($row > 0)
 	{
		echo "<div class=\"nextPage\"><< <a href=\"readbook.php?row=" . ($row - 10) . "\">Next 10</a></div>";
	}
	
	print ("</td><td width=\"50%\">");

 	if ( ($rows - $row) > 10)
 	{
		echo "<div class=\"previousPage\"><a href=\"readbook.php?row=" . ($row + 10) . "\">Previous 10</a> >></div>";
	}
		
	print ("</td></tr></table>");

   	for ($i = $row; $i < ($row + 10); $i++)
	{
		echo $fileName [$i];
	}
 }
 else
 {
  	for ($i=0; $i < $rows; $i++)
  	{
  		echo $fileName [$i];
  	}
 }
  
?>
