<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="WebStyle.css">
<title> Manage Categories </title>

<script>
    window.onload = function() {
        document.getElementById("Del").addEventListener("click", function() {
            alert("Activity Deleted");
        });
    };
	
	function openPopup() {
            document.getElementById("popup-container").style.display = "flex"; <!-- center the popup -->
        }

        function closePopup() {
            document.getElementById("popup-container").style.display = "none";
        }

</script>

</head>

<body>

<div class="topPart">
<h2 class= "name2"> Add/Delete Categories </h2> 
<img src ="logo(white)width.svg" alt="logo" class="logo">
</div>

<table border="1" class="table">
<thead>
<tr>
<th colspan="3" class="manage"> Manage Categories </th>
</tr>
</thead>

<tbody>
<tr>
<td> Sports  <img src="delete.png" alt="trashbin" class="delete" id="Del"> </td>
</tr>
<tr>
<td> Reading <img src="delete.png" alt="trashbin" class="delete"  id="Del"> </td>
</tr>
<tr>
<td> Coding Bootcamp <img src="delete.png" alt="trashbin" class="delete"  id="Del"> </td>
</tr>
</tbody>

</table>

<img src="addlogo.png" alt="add" class="Add" id="adding" onclick="openPopup()" >



    <!-- The popup (hidden by default) -->
    <div id="popup-container" class="popup-container">
        <div class="popup">
            <h3>Select Categories:</h3>
            <input type="checkbox" id="activity1"> Photography <br><br>
            <input type="checkbox" id="activity2"> Robotics <br><br>
            <input type="checkbox" id="activity3"> Writing <br><br>

            <button onclick="closePopup()" class="close" >Add</button>
           
        </div>
    </div>
	
	
<footer class="footer">
        <div class="footer-container">
             <!-- الشعار -->
           <div class="footer-section4">
            <img src="logo(white).svg" alt="Logo" class="footer-logo">
            </div>


            <div class="footer-section1">
                <h4>Colleges</h4>
                <ul class="footer-menu">
                    <li><a href="/en/colleges/health" title="Health">Health</a></li>
                    <li><a href="/en/colleges/engineering" title="Engineering">Engineering</a></li>
                    <li><a href="/en/colleges/sciences" title="Sciences and Management">Sciences and Management</a></li>
                    <li><a href="/en/colleges/arts" title="Arts and Education">Arts and Education</a></li>
                    <li><a href="/en/colleges/social-sciences" title="Social Sciences">Social Sciences</a></li>
                </ul>
            </div>
        
            <div class="footer-section2">
                <h4>Contact Us</h4>
                <div class="social-icons">
                    <a href="https://facebook.com" title="Facebook">
                        <img src="facebook.svg" alt="Facebook">
                    </a>

                    <a href="https://instagram.com" title="instagram">
                        <img src="instagram.svg" alt="instagram">
                    </a>
                    <a href="https://linkedin.com" title="linkedin">
                        <img src="linkedin.svg" alt="linkedin">
                    </a>
                    <a href="https://x.com" title="x" class="x-icon">
                        <img src="x.svg" alt="x">
                    </a> 
                    <a href="https://whatsapp.com" title="whatsApp">
                        <img src="whatsapp.svg" alt="whatsApp">
                    </a>
                </div>
            </div>
        
            <div class="footer-section3">
                <h4>Our Location</h4>
                <div class="footer-map">
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d231895.03167743672!2d46.86497690758214!3d24.748847541634948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d24.7660706!2d46.8156074!4m5!1s0x3e2f1d7da06f1b67%3A0x6706faf0b2570bfc!2z2KzYp9mF2LnYqSDYp9mE2YXZhNmDINiz2LnZiNiv2Iwg2KfZhNix2YrYp9i2IDExNDUx4oCt!3m2!1d24.7227575!2d46.622575499999996!5e0!3m2!1sar!2ssa!4v1739529002212!5m2!1sar!2ssa" width="100" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
       
        <div class="footer-line"></div>
    
      
        <div class="footer-smallprint">
            <span class="footer-left">© 2025 CLUBSPHERE. All rights reserved.</span>
            <span class="footer-right">Last update on: February 13, 2025 - 12:12 pm</span>
        </div>
    </footer>



</body>

</html>
