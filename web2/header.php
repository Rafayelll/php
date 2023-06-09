

<div class ="tiatan">
<p>
<span animated-letters="wavy-letters">Սայել իմ աշխատանքը,</span>
  
<span animated-letters="rotating-letters">փոքր ինչ</span>
  
<span animated-letters="rainbow-letters">գունային երանգներով</span>
</p>
</div>

<script>
const divs = document.querySelectorAll('[animated-letters]');
for(let div of divs){
  let delay = 0;
  let letterClass = div.getAttribute("animated-letters");  
  let letters = div.innerText.split("").map(s=>s==" "?"&nbsp;":s);
  let central = div.hasAttribute("animated-letters-centered")?
      Math.floor(letters.length/2):0;
  div.innerHTML = letters.map(l => `<span class="${letterClass}" style="animation-delay:${Math.abs(-central+delay++)*0.1-1000}s;" >${l}</span>`).join("");
}
</script>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  /* overflow: hidden; */
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
 
}

.dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  width: 70px;
  height: 30px;
  margin-top:-7px;
}


li a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<div class="div2">
			<!-- <ul class="ul">
		<div class="dropdown">
  		<button class="dropbtn">Dropdown</button>
  			<div class="dropdown-content">
				    <a href="product2.php">CSS</a>
				    <a href="html.php">HTML</a>
					<a href="product.php">NEWS</a>
					<a href="gnumner.php">GNUMNER</a>
			</div>
			</div>
			<li><a href="index.php" class="menu_item">HOME</a>
			<li><a href="html.php" class="menu_item">HTML</a>
			<li><a href="product2.php" class="menu_item">CSS</a>
			<li><a href="html3.php" class="menu_item">ABTO</a>
			<li><a href="html4.php" class="menu_item">CONTECT</a>
			<li><a href="html5.php" class="menu_item">ABOUT</a>
			<li><a href="product.php" class="menu_item">NEWS</a>
			<li><a href="gnumner.php" class="menu_item">GNUMNER</a>
			</ul> -->

<ul>
<li><a href="index.php" class="menu_item">HOME</a>
			<li><a href="html.php" class="menu_item">HTML</a>
			<li><a href="product2.php" class="menu_item">CSS</a>
			<li><a href="html3.php" class="menu_item">MEKNABANUCYUN</a>
			<li><a href="html4.php" class="menu_item">CONTECT</a>
			<li><a href="html5.php" class="menu_item">ABOUT</a>
			<li><a href="product.php" class="menu_item">NEWS</a>
			<li><a href="gnumner.php" class="menu_item">GNUMNER</a>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
    <div class="dropdown-content">
	                <a href="product2.php">CSS</a>
				    <a href="html.php">HTML</a>
					<a href="product.php">NEWS</a>
					<a href="gnumner.php">GNUMNER</a>
    </div>
  </li>
</ul>



















				</div>