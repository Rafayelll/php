<html>
<head>
	<title>Admini ej</title>
</head>
<body>
	<form action="action.php" method="post">
	<h1>html i adminkena</h1>
		<!-- <input type="text" name="title" placeholder="Վերնագիր"> <br><br> -->
		<!-- <input type="number" name="order" placeholder="Հերթական համար"> <br><br> -->
		<!-- <textarea name="vernagir" placeholder="վերնագիր" rows="3" cols="60"></textarea> <br><br> -->
		<input type="text" name="vernagir" id="vernagir" placeholder="վերնագիր"> <br><br>
		<textarea name="text" placeholder="տեքստ" rows="5" cols="60"></textarea> <br><br>
        <!-- <textarea name="vernagir2" placeholder="վերնագիր2" rows="3" cols="60"></textarea> <br><br> -->
		<input type="text" name="vernagir2" id="vernagir2" placeholder="վերնագիր2"> <br><br>

		<textarea name="text2" placeholder="տեքստ2" rows="5" cols="60"></textarea> <br><br>
        <textarea name="nkar" placeholder="նկար" rows="3" cols="60"></textarea> <br><br>
		<input type="submit" name="add">
	</form>
    <?php
     include "news_list.php";
     ?>
	 <h1>admini linker@ nerqvumen</h1>
	 <h2><a href="../admin/index.php">news</a></h2>
	 <h2><a href="../admin_css/index.php">css</a></h2>
	 <h2><a href="../gnumner_admin/index.php">gnumner</a></h2>
	 <h2> <a href="../meknabanucyun/index.php">meknabanucyun</a></h2>
	 
</body>
</html