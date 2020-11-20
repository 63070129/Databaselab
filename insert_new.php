<html>
<head>
	<title>Editor</title>
</head>
<body>
  <form action = "update.php?id='.$Result['ID'].'" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name="name" value=<?php echo $Result['name'];?>><br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" value=<?php echo $Result['name'];?>></textarea><br>
    <input type="submit" id="commentBtn">
  </form>

</body>
</html>
