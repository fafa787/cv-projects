/*--------------------------Srart Activity page style-----------------------------*/
body {
	background-image: url("background2.jpeg");
    background-size: cover;
    font-family: "Segoe UI", Tahoma, Geneva, sans-serif;
    color:white;
    text-align: center;
    margin: 0;
    padding: 0;
}

header {
    background: linear-gradient(to bottom, #012e70, #3b5a89); 
    color: white;
    padding: 20px;
    font-size: 24px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
	height:60px;
}


.header-left {
    position: absolute;
    left: 20px;
    display: flex;
    align-items: center;
}


.logo1 {
    width: 300px; /* عرض الشعار */
    height: 300px;
    margin-left: -50px;
    margin-top: 23px;
}


.search-filter {
    margin: 20px;
}

.search-filter input, .search-filter select, .search-filter button {
    padding: 10px;
    margin: 5px;
    border: 1px solid #0D47A1;
    border-radius: 5px;
}

.search-filter button {
    background-color: #0D47A1;
    color: white;
    cursor: pointer;
}

.activities-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.activities-list2{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    color:#000000;
}
.activity {
    position: relative;
    border: 1px solid #0D47A1;
    border-radius: 10px;
    padding: 20px;
    margin: 15px;
    width: 300px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
    cursor: pointer;
    overflow: hidden; /* لضمان عدم خروج الصورة عن الحواف */
}

/* إضافة طبقة خلفية شفافة فوق الصورة */
.activity::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    opacity: 0.5; /* شفافية افتراضية */
    transition: opacity 0.3s ease-in-out, transform 0.2s ease-in-out;
    z-index: -1; /* إبقاء الصورة خلف المحتوى */
}




/*  عند تمرير الفأرة تصبح أوضح */
.activity:hover::before {
    opacity: 1; /* زيادة وضوح الخلفية */
    transform: scale(1.05); /* تكبير الخلفية أيضًا لمواكبة النشاط */
}

.football::before {
	background-image: url("football.jpg") ;
	
}
	
.photography::before {
	background-image: url("CAMERA.jpg");
}
	
.coding::before {
	background-image: url("coding.jpg"); 
}

.robotics::before {
	background-image: url("robotics.jpeg"); 
}

.creative::before {
	background-image: url("WRITING.jpg"); 
}

.chess::before { 
background-image: url("CHESS.jpg");
 }



.activity:hover {
    background-color: #BBDEFB;
    transform: scale(1.05);
}

.activity:active {
    background-color: #90CAF9;
    transform: scale(0.95);
}

.activity h2 {
    color:white;
	
}

.activity .club {
    font-weight: bold;
}

.activity .details {
    display: inline-block;
    background-color: #0D47A1;
    color: white;
    padding: 10px 10px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 13px;
    text-align: center;
	 cursor: pointer;
}

.activity .details:hover {
    background-color: #1565C0;
}




.football::before {
	background-image: url("football.jpg") ;
	
}
	
.photography::before {
	background-image: url("CAMERA.jpg");
}
	
.coding::before {
	background-image: url("coding.jpg"); 
}

.robotics::before {
	background-image: url("robotics.jpeg"); 
}

.creative::before {
	background-image: url("WRITING.jpg"); 
}

.chess::before { 
background-image: url("CHESS.jpg");
 }











 .IndividualSports::before {
	background-image: url("indevSport.jpg") ;
	
}
	
.TeamSports::before {
	background-image: url("team.jpeg");
}
	
.StrengthSports::before {
	background-image: url("stre.jpeg"); 
}

.WaterSports::before {
	background-image: url("water.jpeg"); 
}

.ExtremeSports::before {
	background-image: url("extreme.jpeg"); 
}

.CyclingSports::before { 
background-image: url("CyclingSport.jpeg");
 }















/* تعديل تنسيق الفوتر */
.footer {
	margin-top: 130px;
    background: linear-gradient(to bottom, #012e70, #3b5a89);
    color: white;
    padding: 40px 0;
    font-size: 14px;
    width: 100%;
}

/* الفوتر يحتوي على أربعة أقسام مع توزيع المسافات */
/* ضبط محاذاة نصوص الفوتر إلى اليسار */
.footer-container {
    display: flex;
    justify-content: flex-start; /* يجعل النصوص تبدأ من اليسار */
    align-items: flex-start; 
    text-align: left; /* تأكيد أن النصوص تبدأ من اليسار */
}


/* كل قسم في الفوتر */
.footer-section1,
.footer-section2,
.footer-section3 ,
.footer-section4{
    flex: 1; /* لكل قسم عرض متساوي */
    margin: 8px;
    padding: 0 15px; /* إضافة بعض الحشو داخل الأقسام */
	  text-align: left; /* ضبط المحاذاة لليسار */
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
    padding-left: 0;  /* إزالة المسافات الافتراضية */
    text-align: left;  /* جعل النصوص تبدأ من اليسار */
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
	 text-align: left;  /* جعل العنوان يبدأ من اليسار */
    margin-left: 0;  /* إزالة أي مسافة إضافية */
}

/* تعديل النص في الفوتر الصغير */

.footer-smallprint {
    display: flex;
    justify-content: space-between; /* توزيع العناصر في السطر */
    align-items: center;
    font-size: 12px;
    color: #ddd;
    padding: 0 20px;
    width: 100%;
    margin-top: 5px;
    text-align: left; /* جعل النصوص تبدأ من اليسار */
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
/*------------------------------------------End Activity page style---------------------------------------------*/
