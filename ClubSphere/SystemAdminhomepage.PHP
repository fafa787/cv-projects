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
    justify-content: space-between;  /* توزيع العناصر بين اليسار واليمين */
    align-items: center;  /* محاذاة العناصر عموديًا في المنتصف */
    padding: 0 20px;
} 

.help:hover {
    color: #81819d; /* تغيير اللون عند التمرير فوقه */
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
    width: 100%;  /* تأكد أن الـ main يغطي العرض الكامل */
    padding: 0px;   /* إزالة أي حشو قد يحد من عرض الصورة */
}

.header1{
font-size: 75px;
text-align: center;
font-weight :900;
color: #3c3c3c;
margin-top: 170px; /* لتجنب تداخل الهيدر الثابت */

}
.header2 {
    text-align: center;
    color: #777777;
    margin-top: 20px;  /* لتجنب تداخل الهيدر الثابت */
    width: 51%;        /* تحديد العرض */
    margin: 0 auto;    /* توسيط العنصر بشكل أفقي */
    font-size: 20px;

}

/* تعديل تنسيق الأزرار */
.auth-options {
    display: flex;
    justify-content: center; /* توسيط القوائم */
    gap: 40px; /* زيادة المسافة بين الأزرار */
    margin-top: 50px; /* زيادة المسافة بين النصوص والصورة */
    margin-bottom: -100px; /* تقليل المسافة أسفل الأزرار */
}

.dropbtn {
    background-color: #777777 ;
    color: white;
    padding: 18px 30px; /* زيادة الحجم لزيادة العرض */
    font-size: 16px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius: 5px;
    min-width: 200px; /* تعيين عرض الحد الأدنى للأزرار */
    text-align: center; /* محاذاة النص داخل الزر */
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
    width: 100%;       /* جعل الصورة بعرض كامل */
    height: auto;      /* الحفاظ على النسب الأصلية */
    object-fit: cover; /* ملء المساحة بدون تشويه الصورة */
    margin: 0;         /* إزالة أي مسافات حول الصورة */
    padding: 0;        /* إزالة أي حشو */
    display: block;    /* التأكد من أن الصورة تظهر كـ block لملء المساحة */
    margin-top: -260px; /* تقليل المسافة بين الصورة والنصوص */
}






/* تأكد من أن HTML و Body يغطيان ارتفاع الصفحة بالكامل */
html, body {
    height: 100%; /* تأكد من أن الصفحة تأخذ الارتفاع الكامل */
    margin: 0; /* إزالة المسافات الافتراضية */
}

/* استخدام Flexbox لتوزيع المحتوى داخل الصفحة */
body {
    display: flex;
    flex-direction: column; /* ترتيب المحتوى عموديًا */
    font-family: "Segoe UI", Tahoma, Geneva, sans-serif;
    background-image: url("background.jpeg");
    min-height: 100%; /* يضمن أن ارتفاع الجسم لا يقل عن 100% */
}


/* تعديل الفوتر */
.footer {
    background: linear-gradient(to bottom, #012e70, #3b5a89);
    color: white;
    padding: 40px 0;
    font-size: 14px;
    width: 100%;  /* الفوتر سيأخذ العرض الكامل */
    margin-top: auto; /* هذا سيجعل الفوتر يظل في أسفل الصفحة */
    margin-bottom: 0;
}

/* الفوتر يحتوي على أربعة أقسام مع توزيع المسافات */
.footer-container {
    display: flex;
    justify-content: space-between; /* توزيع الأقسام بالتساوي */
    align-items: flex-start; /* محاذاة الأقسام من الأعلى */
    width: 100%; /* تأكد من أن الفوتر يغطي العرض الكامل */
    margin-bottom: -20px;
}

/* كل قسم في الفوتر */
.footer-section1,
.footer-section2,
.footer-section3,
.footer-section4 {
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

.footer-section2 {
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

/* Footer responsive design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;  /* محاذاة العناصر في الوسط */
    }
    
    .footer-section1, .footer-section2, .footer-section3, .footer-section4 {
        flex: 1; /* كل قسم يشغل عرض متساوي */
        margin: 8px 0; /* إضافة مسافة بين الأقسام */
        padding: 15px;
    }
    
    .footer-section2 {
        margin-left: 0; /* إزالة المسافة السلبية */
        padding-right: 0; /* إزالة الحشو على اليمين */
    }
    
    .social-icons {
        justify-content: center; /* محاذاة الأيقونات في وسط الفوتر */
        gap: 15px; /* تقليل المسافة بين الأيقونات */
    }

    .footer-smallprint {
        flex-direction: column; /* ترتيب النصوص عموديًا */
        align-items: center; /* محاذاة النصوص في الوسط */
        font-size: 11px;  /* تقليل حجم الخط */
    }

    .footer-map iframe {
        height: 250px; /* تقليل ارتفاع الخريطة في الشاشات الصغيرة */
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
    margin-top: 5px;
}

/* تنسيق الخط الأفقي */
.footer-line {
    height: 1.75px; /* سمك الخط */
    background-color: #ddd; /* لون الخط */
    margin: 10px 15px 0px 15px; /* المسافة حول الخط */
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
}

.footer-logo {
    width: 300px; /* عرض الشعار */
    height: 300px;
}
