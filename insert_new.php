<html>
<head>
	<title>Editor</title>
</head>
<body>
    <form action =<?php " update.php?id='.$Result['ID'].'"?> method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" value="<?php echo  $Result['name'];?>" id="idName" placeholder="Enter Name"><br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" value="<?php echo  $Result['comment'];?> id="idComment" placeholder="Enter Comment"></textarea><br>  
    <input type="submit" id="commentBtn">
  </form>
</body>
</html>
