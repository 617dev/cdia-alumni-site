<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: 77d9vq4le4equl
  authorize: true
</script>

</head>
<body>
	<script type="IN/Login"> 
    <form action="register.php" method="post"> 
    <p>Your Name: <input type="text" name="name" value="<?js= firstName ?> <?js= lastName ?>" /></p>
    <p>Your Password: <input type="password" name="password" /></p>
    <input type="hidden" name="linkedin-id" value="<?js= id ?>" />
    <input type="submit" name="submit" value="Sign Up"/>
    </form>
  </script>
</body>
</html>