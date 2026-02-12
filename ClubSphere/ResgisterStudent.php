<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title> Register Club Leader </title>
<link rel="stylesheet" type="text/css" href="WebStyle.css">
</head>

<body>

<div class="Reg">
<p class="log"> Register </p> 

<div class="reg">
    <label for="first-name" class="infoLabel">First name</label><br>
    <input id="first-name" class="info" name="first-name" type="text" size="20"><br>
    
    <label for="last-name" class="infoLabel">Last name</label><br>
    <input id="last-name" class="info" name="last-name" type="text"><br>
    
    <label for="password" class="infoLabel">Password</label><br>
    <input id="password" class="info" name="password" type="password" size="20"><br>
    
    <label for="phone" class="infoLabel">Phone number</label><br>
    <input id="phone" class="info" name="phone" type="text"><br><br>
    
 <textarea class="area" rows="2" cols="30">
Brief description </textarea> <br> 
<label for="location" class="infoLabel">Location</label><br>
<input id="location" class="info" name="location" type="text"><br>

<a href="#"> <img src="profile.svg" alt="profile" class="profile3"  > </a>

</div>

<input class="RegButton" type="submit" value="Register" onclick="window.location.href='ClubHomePage.html'"> <br>
</div>
</body>
</html>