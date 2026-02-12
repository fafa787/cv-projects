body {
    background-image: url('Background.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    font-family: "Segoe UI", Tahoma, Geneva, sans-serif;
    background-color: white;
    margin: 0;
    padding: 0;
    padding-top: 120px;
    
}



h1{
    font-size: 48px;
}

header {
    position: fixed; /* Fixes the header at the top */
    top: 0;
    left: 0;
    height:61px;
    width: 100%; /* Ensures it spans the full width */
    background: linear-gradient(to bottom, #012e70, #3b5a89);
    color: white;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center; 
    font-size: 50px;  
    z-index: 1000; /* Ensures it's above other elements */
}
.logo{
	position:absolute;
	top:-89px;
	left:-30px;
    width: 300px; 
    height: 300px;
	z-index:3;
	
}
form {
    padding-top: 60px;
    margin-top: 100px;
    padding-bottom: 60px;
    margin: auto;
    background: #012e70;
    padding: 20px;
    border-radius: 10px;
    max-width: 600px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    color: white;
    position: relative;
}
label {
    font-weight: bold;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
}
input, textarea, select {
    width: 85%;
    padding: 12px;
    display: block;
    margin: 0 auto 15px auto ;
    border: 1px solid #012e70;
    border-radius: 5px;
    font-size: 16px;
    background: #f1f1f1;
    color: #012e70; 
}
button {
    background: #E1F2FB;
    color: black;
    padding: 10px;
    border: none;
    margin-top: 15px;
    width: 100%;
    border-radius: 5px;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
   
}
button:hover {
    color: gray;
    transform: scale(1.1);
}
.image-preview {
    margin-top: 10px;
    text-align: center;
}
.image-preview img {
    max-width: 100%;
    border-radius: 5px;
}


.footer {
    background: linear-gradient(to bottom, #012e70, #3b5a89);
    color: white;
    padding: 40px 0;
    font-size: 14px;
    width: 100%;
    margin-top: 100px;
}

/* الفوتر يحتوي على أربعة أقسام مع توزيع المسافات */
.footer-container {
    display: flex;
    justify-content: space-between; /* توزيع الأقسام بالتساوي */
    align-items: flex-start; /* محاذاة الأقسام من الأعلى */
    width: 100%; /* تأكد من أن الفوتر يغطي العرض الكامل */
}

/* كل قسم في الفوتر */
.footer-section1,
.footer-section2,
.footer-section3 ,
.footer-section4{
    flex: 1; /* لكل قسم عرض متساوي */
    margin: 8px;
    padding: 0 15px; /* إضافة بعض الحشو داخل الأقسام */
}

/* إضافة خط عمودي بين الأقسام */
.footer-section1:not(:last-child),
.footer-section2:not(:last-child) {
    border-right: 2px solid #ddd;  /* إضافة خط عمودي بين الأقسام */
    padding-left: 50px;
}
.footer-section2{
    padding-right: 50px;
    margin-left: -22px; /* تحريك القسم الثاني إلى اليسار بمقدار 20px */
    
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
    justify-content: flex-start;  /* ترتيب الأيقونات على يسار الحاوية */
    gap: 27px;  /* مسافة بين الأيقونات */
    color: aliceblue;
}

.social-icons a {
    display: block;
    width: 45px;  /* عرض الأيقونة */
    height: 45px;  /* ارتفاع الأيقونة */
    transition: transform 0.3s ease; /* إضافة تأثير التحريك عند المرور بالماوس */
}

.social-icons a img {
    width: 100%;
    height: 100%;
    object-fit: contain; /* الحفاظ على تناسق الأيقونة */
    filter: brightness(0) invert(1); /* تحويل الصورة إلى اللون الأبيض */
}

/* عند المرور بالماوس على الأيقونة */
.social-icons a:hover {
    transform: scale(1.1); /* تكبير الأيقونة عند المرور */
}

.social-icons a img:hover {
    filter: brightness(0.5);  /* تغيير السطوع عند المرور */
}

.footer-left,
.footer-right {
    margin: 0;
    padding: 0;
}

/* Footer responsive design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }
}

/* تعديل تنسيق الفوتر الصغير */
.footer-smallprint {
    display: flex;
    justify-content: space-between;  /* توزيع المسافات بين النصين */
    align-items: center;
    font-size: 12px;
    color: #ddd;
    padding: 0 20px;  /* إضافة مسافة بين النصوص وأطراف الفوتر */
    width: 100%;
    margin-top: 5px; /* التأكد من أن الفوتر يغطي العرض الكامل */
}

/* تنسيق الخط الأفقي */
.footer-line {
    height: 1.75px; /* سمك الخط */
    background-color: #ddd; /* لون الخط */
    margin: 20px 15px 0px 15px; /* المسافة حول الخط */
}

/* النصوص على اليسار واليمين */
.footer-left,
.footer-right {
    margin: 0;  /* إزالة أي مسافة إضافية */
    padding: 0; /* إزالة أي مسافة إضافية */
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
    height: 175px; /* يمكنك تعديل الارتفاع حسب حاجتك */
    border: none;
    margin-top: 10px;  /* مسافة بين العنوان والخريطة */
}

.footer-section4 {
    display: flex;
    justify-content: flex-start; /* محاذاة الشعار لليسار */
    align-items: center;
    margin-left: 7px; /* إضافة مسافة يسارية */
    margin-left: 5px; /* إضافة مسافة يسارية */
}

.footer-logo {
    width: 300px; /* عرض الشعار */
    height: 300px;
}

