/* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.Headerpart1 {
    background: linear-gradient(to bottom, #012e70, #3b5a89);
    width: 100%;
    height: 100px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-between;  
    align-items: center;  
    padding: 0 20px;
} 

.help:hover {
    color: #81819d; 
    text-decoration: underline;
}
.help {
    margin-left: auto;
    padding-right: 10px;
    color: white;
    text-decoration: none;
}


.logo{
    position:fixed;
    top:-90px;
    left:-50px;
    width: 310px; 
    height: 310px;
    margin-left: 11px;
}

main {
    width: 100%;  
    padding: 0px;   
}

.header1{
font-size: 75px;
text-align: center;
font-weight :900;
color: #3c3c3c;
margin-top: 170px; 
}
.header2 {
    text-align: center;
    color: #777777;
    margin-top: 20px;  
    width: 51%;        
    margin: 0 auto;    
    font-size: 20px;

}

/* تنسيق الأزرار */
.auth-options {
    display: flex;
    justify-content: center; 
    gap: 40px; 
    margin-top: 50px; 
    margin-bottom: -100px; 
}

.dropbtn {
    background-color: #777777 ;
    color: white;
    padding: 18px 30px; 
    font-size: 16px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius: 5px;
    min-width: 200px; 
    text-align: center; 
}
.dropdown {
    position: relative;
    display: inline-block;
}



.dropdown:hover .dropbtn {
    background-color: #3b5a89; /* تغيير اللون عند التمرير */
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    z-index: 1;
    border-radius: 5px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-radius: 5px;
}
.dropdown-content a:hover {
    background-color: #ddd;
}


/* تعديل تنسيق الصورة */
.pic {
    width: 100%;       
    height: auto;      
    object-fit: cover; 
    margin: 0;         
    padding: 0;       
    display: block;   
    margin-top: -260px; 
}







html, body {
    height: 100%; 
    margin: 0; 
}


body {
    display: flex;
    flex-direction: column; 
    font-family: "Segoe UI", Tahoma, Geneva, sans-serif;
    background-image: url("background.jpeg");
    min-height: 100%; 
}


/* تعديل الفوتر */
.footer {
    background: linear-gradient(to bottom, #012e70, #3b5a89);
    color: white;
    padding: 40px 0;
    font-size: 14px;
    width: 100%; 
    margin-top: auto; 
    margin-bottom: 0;
}

/* الفوتر يحتوي على أربعة أقسام */
.footer-container {
    display: flex;
    justify-content: space-between; 
    align-items: flex-start; 
    width: 100%; 
    margin-bottom: -20px;
}

/* كل قسم في الفوتر */
.footer-section1,
.footer-section2,
.footer-section3,
.footer-section4 {
    flex: 1;
    margin: 8px;
    padding: 0 15px; 
}

/* إضافة خط عمودي بين الأقسام */
.footer-section1:not(:last-child),
.footer-section2:not(:last-child) {
    border-right: 2px solid #ddd; 
    padding-left: 50px;
}

.footer-section2 {
    padding-right: 50px;
    margin-left: -22px;
}

/* تنسيق الروابط في الفوتر */
.footer-menu {
    list-style-type: none;
}

.footer-menu li {
    margin-bottom: 10px;
}

.footer-menu li a {
    text-decoration: none;
    color: #ddd;
    font-size: 15px;
}

.footer-menu li a:hover {
    color: #47556c;
}

/* تنسيق العناوين داخل الفوتر */
.footer-section1 h4,
.footer-section2 h4,
.footer-section3 h4 {
    color: #ffffff;
    font-size: 22px;
    margin-bottom: 17px;
}

/* تعديل النص في الفوتر الصغير */
.footer-smallprint {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 12px;
    color: #ddd;
    padding: 0 20px;
    width: 100%;
    margin-top: 5px;
}

/* تنسيق الأيقونات في قسم Contact Us */
.social-icons {
    display: flex;
    justify-content: flex-start;  
    gap: 27px;  
    color: aliceblue;
}

.social-icons a {
    display: block;
    width: 45px;  
    height: 45px;  
    transition: transform 0.3s ease; 
}

.social-icons a img {
    width: 100%;
    height: 100%;
    object-fit: contain; 
    filter: brightness(0) invert(1); 
}

/* عند المرور بالماوس على الأيقونة */
.social-icons a:hover {
    transform: scale(1.1); 
}

.social-icons a img:hover {
    filter: brightness(0.5);  
}

/* Footer responsive design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;  
    }
    
    .footer-section1, .footer-section2, .footer-section3, .footer-section4 {
        flex: 1; 
        margin: 8px 0; 
        padding: 15px;
    }
    
    .footer-section2 {
        margin-left: 0; 
        padding-right: 0; 
    }
    
    .social-icons {
        justify-content: center;
        gap: 15px;
    }

    .footer-smallprint {
        flex-direction: column; 
        align-items: center; 
        font-size: 11px; 
    }

    .footer-map iframe {
        height: 250px; 
    }
}

/*  تنسيق الفوتر الصغير */
.footer-smallprint {
    display: flex;
    justify-content: space-between;  
    align-items: center;
    font-size: 12px;
    color: #ddd;
    padding: 0 20px;  
    width: 100%;
    margin-top: 5px;
}

/* تنسيق الخط الأفقي */
.footer-line {
    height: 1.75px; 
    background-color: #ddd; 
    margin: 10px 15px 0px 15px; 
}


.footer-left,
.footer-right {
    margin: 0;  
    padding: 0; 
}


.footer-section3 {
    position: relative;
    display: flex;
    flex-direction: column;
    padding-right: 50px;
}

.footer-map iframe {
    width: 100%;
    height: 175px; 
    border: none;
    margin-top: 10px;  
}

.footer-section4 {
    display: flex;
    justify-content: flex-start; 
    align-items: center;
    margin-left: 7px; 
}

.footer-logo {
    width: 300px; 
    height: 300px;
}

