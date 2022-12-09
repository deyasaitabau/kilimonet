<!DOCTYPE html>
<html>
    <head>
        <title>survey</title>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/survey.css">
    </head>
    <body>
    <article class="topnav" id="myTopnav">
    <article class="logo">
        <img class="Mylogo" src="../images/jpg.webp">
  <a href="../" class="active">Home</a> 
  <a href="../home/resource.php">Resource</a>
  <a href="../home/blog.php">Blog</a>
  <a href="#">Survey</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</article>
</article>
<h3>Fill In The Questionnaire <hr></h3>

<div class="form">
<form action="../actions/questionnaire.php" method="post">
<label for="first_name">First Name</label>
<input type="text" name="first_name" required placeholder=" Enter First Name" class="label">
<label for="surname" class="label">Surname</label>
<input type="text" name="surname" required placeholder=" Enter First Surname">
<br>
<label for="mobile">Mobile Number</label>
<input type="text" name="mobile" required placeholder=" Enter Phone Number" class="label">
 
<label for="market" >Market  </label>
<select name="market" id="market" class="label">
    <option value="emali">Ewuaso Kedong</option>
    <option value="kimana">Kimana</option>
    <option value="Sultan_hamud">Sulatan Hamud</option>
    <option value="Ewuaso_Kedong">Emali</option>
    <option value="illibilis">ILLIBILIS</option>
</select>
<br>
<label for="species">Species: </label>
 Cow
<input type="radio" name="species" required value="cattle" class="radio">
Sheep/ Goat
<input type="radio" name="species" required value="cattle" class="radio">
<br>
<br>
<label for="weight">Weight</label>
<select  name="weight" required placeholder=" enter weight">
  <option value="1-10kg">Upto 10kg </option>
  <option value="11-20kg">11 to 20kg </option>
  <option value="21-30kg">21 to 30kg </option>
  <option value="31-40kg">31 to 40kg </option>
  <option value="41-50">41 to 50 </option>
  <option value="51-60">51 to 60 </option>
  <option value="61-70">61 to 70 </option>
  <option value="71-80">71 to 80 </option>
  <option value="81-90">81 to 90 </option>
  <option value="1-50">upto 50 </option>
  <option value="51-100">51 to 100 </option>
  <option value="101-150">101 to 150 </option>
  <option value="151-200">151 to 200 </option>
  <option value="201-250">201 to 250 </option>
  <ption value="251-300">251 to 300 </option>
  <option value="301-350">301 to 350 </option>
  <option value="351-400">351 to 400 </option>
  <option value="401-450">401 to 450 </option>
  <option value="451-500">451 to 500 </option>
  <option value="501-550">501 to 550 </option>
  <option value="551-600">551 to 600 </option>
  <option value="601-650">601 to 650 </option>
  <option value="651-700">651 to 700 </option>
  <option value="701-750">701 to 750 </option>
  <option value="751-800">751 to 800 </option>
  <option value="801-850">801 to 850 </option>
  <option value="851-900">851 to 900 </option>
</Select>
<label for="price">Price</label>
<input type="text" name="price" required placeholder=" Enter Price">
<br>
<label for="performance">Performance : </label>
Poor
<input type="radio" name="performance" required value=" poor">
Good
<input type="radio" name="performance" required value="good">
Average
<input type="radio" name="performance" required value=" average">
<br>
<br>
<button type="submit" name="submit"> SUBMIT </button>

</form>
</div>
 
    </body>
    </html>