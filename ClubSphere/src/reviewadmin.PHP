html, body {
    height: 100%; 
    margin: 0; 
}
/* ----- HEADER ----- */

.header-title {
    color: white;  
    font-size: 50px;  
    font-weight: bold;
    margin-left: auto; 
    margin-right: auto; 
    text-align: center;
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
    padding:0 20px;
    margin-bottom: 5%;
}

/* Logo inside header */
.logo{
	position:absolute;
	top:-89px;
	left:-30px;
    width: 300px; 
    height: 300px;
	z-index:3;
	
}

/* ----- BODY CONTENT ----- */
body {
    font-family: "Segoe UI", Tahoma, Geneva, sans-serif;
    background: url('background.jpeg') no-repeat center center/cover;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 200px; 
    padding-bottom: 250px; 
    min-height: 100%;
}


/* Container styling */
.container {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 18px rgba(0, 0, 0, 0.25);
    width: 50%;
    text-align: center;
    margin-top: 25%; 
    margin-bottom: 4%;
}


h1, label {
    color: #012e70; /* Footer color */
}

.rating {
    display: flex;
    justify-content: center;
    margin: 10px 0; 
}

textarea {
    width: 85%;
    padding: 12px;
    display: block;
    margin: 0 auto 15px auto;
    border: 1px solid #012e70;
    border-radius: 5px;
    font-size: 16px;
    background: #f1f1f1;
    transition: 0.3s;
    color: #012e70;
    resize: vertical; 
    min-height: 120px; 
}

textarea:focus {
    background: white;
    outline: none;
    border: 2px solid #3b5a89;
    box-shadow: 0 0 8px rgba(59, 90, 137, 0.8);
}

/* Buttons */
.buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    width: 100%;
}

button {
    padding: 12px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.2s;
    font-weight: bold;
    text-transform: uppercase;
    background: #012e70; 
    color: white;
}

button:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    background: #3b5a89; 
}



/* الجزء الرئيسي الذي يحتوي على المحتوى */
main {
    flex-grow: 1; 
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

/* الفوتر يحتوي على أربعة أقسام مع توزيع المسافات */
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
    flex: 1; /* لكل قسم عرض متساوي */
    margin: 8px;
    padding: 0 15px; 
}

/* إضافة خط عمودي بين الأقسام */
.footer-section1:not(:last-child),
.footer-section2:not(:last-child) {
    border-right: 2px solid #ddd;  /* إضافة خط عمودي بين الأقسام */
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

/* تنسيق الأيقونات في قسم Contact Us */
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

/* عند المرور بالماوس على الأيقونة */
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

/* تعديل تنسيق الفوتر الصغير */
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

/* تنسيق الخط الأفقي */
.footer-line {
    height: 1.75px; 
    background-color: #ddd;
    margin: 10px 15px 0px 15px; 
}

/* النصوص على اليسار واليمين */
.footer-left,
.footer-right {
    margin: 0; 
    padding: 0; 
}

/* تنسيق الخريطة داخل الفوتر */
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
    width: 300px; /* عرض الشعار */
    height: 300px;

}
