<html>
<head>
	<title>news  admin</title>
</head>
<body>
<h1>news  admin</h1>
	<form action="action.php" method="post">
    <textarea name="vernagir" placeholder="vernagir" rows="3" cols="60"></textarea> <br><br>
		<!-- <input type="vernagir" name="title" placeholder="Վերնագիր"> <br><br> -->
        <textarea name="nkar" placeholder="nkar" rows="5" cols="60"></textarea> <br><br>

        <textarea name="text" placeholder="text" rows="5" cols="60"></textarea> <br><br>
        <!-- <input type="vernagir2" name="title" placeholder="Վերնագիր2"> <br><br> -->
        <textarea name="ta" placeholder="tesnel avelin" rows="5" cols="60"></textarea> <br><br>

        <!-- <textarea name="text2" placeholder="տեքստ2" rows="5" cols="60"></textarea> <br><br> -->
		<!-- <input type="number" name="order" placeholder="Հերթական համար"> <br><br> -->
		
		
		<input type="submit" name="add">
	</form>
    <?php include ('news_list.php'); ?>

     <h2><a href="../admin_css/index.php">css</a></h2>
 <h2> <a href="../admin_html/index.php">html</a></h2>
 <h2> <a href="../gnumner_admin/index.php">gnumner</a></h2>
 <h2> <a href="../meknabanucyun/index.php">meknabanucyun</a></h2>
</body>
</html