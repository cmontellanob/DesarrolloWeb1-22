<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$var="texto"; 
$num=3; 
printf("Puede fácimente intercalar <b>%s</b> con números <b>%d</b> <br>",$var,$num); 
 
printf("<TABLE BORDER=1 CELLPADDING=20>"); 
for ($i=0;$i<10;$i++) 
{ 
    printf("<tr><td>%10.d</td></tr>",$i); 
} 
printf("</table>"); 
?> 
</body>
</html>