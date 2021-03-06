<?php
 

 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "open.mind@outlook.co.il";
 
    $email_subject = "מתעניין חדש בשכונה";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
	}
 

 if(isset($_POST['submit'])) 
{
  	echo "<script type='text/javascript'>alert('It worked!')</script>";
}
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||

 
        !isset($_POST['phone']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $telephone = $_POST['phone']; // not required
 
    $comments = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
 
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: admin@op.com'."\r\n".
 
'Reply-To: admin@op.com'."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
header('Location:indexs.html#contact');

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <meta name="theme-color" content="#2196F3">
        <title>Open Mind</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/opensanshebrew.css" rel="stylesheet">
        <!-- CSS  -->
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet">
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    </head>
    <body id="top" class="scrollspy demo-2">
       <div id="wrapper">
       <!-- Pre Loader -->
        <div id="loader-wrapper">
            <div id="loader"></div>
            
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
            
            </div>
        <!--Navigation-->
        <div class="navbar-fixed">
            <nav id="nav_f" class="default_color" role="navigation">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#" id="logo-container" class="brand-logo">Open Mind</a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="https://www.facebook.com/OpenMind.IL/"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#team"><b>מי אנחנו</b></a></li>
                            <li><a href="#contact"><b>צור קשר</b></a></li>
                            <li><a href="#work"><b>אירועים</b></a></li>
                            <li><a href="#intro"><b>איך זה עובד</b></a></li>
                        </ul>
                        <ul id="nav-mobile" class="side-nav">
                            <li><a href="#intro">איך זה עובד</a></li>
                            <li><a href="#work">אירועים</a></li>
                            <li><a href="#team">מי אנחנו</a></li>
                            <li><a href="#contact">צור קשר</a></li>
                            <li><a href="https://www.facebook.com/OpenMind.IL/"><i class="fa fa-facebook-square"></i></a></li>
                        </ul>
                        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    </div>
                </div>
            </nav>
        </div>
        <!--Hero-->
       	
	

	 <div class="section no-pad-bot z-depth-2" id="index-banner">
            
            <div class="container" dir="rtl">
                <h1 class="text_h center header cd-headline letters type">
                    <span>אני אוהב</span> 
                    <span class="cd-words-wrapper waiting">
                    <b class="is-visible">ציור</b>
                    <b>תכנות</b>
                    <b>מוזיקה</b>
                    <b>צילום</b>
                    <b>פסיכולוגיה</b>
                    <b>להרצות</b>
                    </span>
                </h1>
            </div>
        </div>
        <!--Intro and service-->
        <div id="intro" class="section scrollspy" dir="rtl">
            <div class="container">
                <div class="row">
                    <div  class="col s12">
                        <!--<h1 align="center">Open Mind</h1>-->
                        <br>
                        <br>
                        <h2 class="center header text_h2">
                            <span class="span_h2">Open Mind</span>
                            נותן לנוער מקום 
                            <span class="span_h2"> להתעניין, ללמוד</span>
                            ולקבל 
                            <span class="span_h2">השראה</span>
                            <br>
                        </h2>
                    </div>
                    <!-- head 1 -->
                    <div class="col s12 m4 l4" style="float: right;">
                        <div class="center promo promo-example">
                            <img class="hvr-buzz-out" src="img/iconsmall/purple.png" height="125" width="125">
                            <h5 class="promo-caption">מה אנחנו מציעים</h5>
                            <p class="light-center">
                                כנסים, הרצאות וסדנאות לנוער בגילאי 14+
                                <br>
                                סדנאות מקצועיות בנושא עמידה מול קהל
                            </p>
                        </div>
                    </div>
                    <!-- head 2 -->
                    <div class="col s12 m4 l4" style="float: right;">
                        <div class="center promo promo-example">
                            <img class="hvr-buzz-out" src="img/iconsmall/green.png" height="125" width="125">
                            <h5 class="promo-caption">
                                במה אנחנו מאמינים
                            </h5>
                            <p class="light-center">
                                למידה מסוג אחר, מתוך עניין ולא מתוך שגרה בית ספרית
                                <br>
                                סיפוק מגוון נושאים רחב - מפסיכולוגיה וצילום עד יזמות ותכנות!
                            </p>
                        </div>
                    </div>
                    <!-- head 3 -->
                    <div  class="col s12 m4 l4" style="float: right;">
                        <div class="center promo promo-example">
                            <!--<i class="mdi-image-flash-on"></i>-->
                            <img class="hvr-buzz-out" src="img/iconsmall/orange.png" height="125" width="125">
                            <h5 class="promo-caption">
                                המרצים
                            </h5>
                            <p class="light-center">
                                בני נוער רגילים עם משהו מיוחד לתת
                                <br>
                                מרצים אורחים מעוררי השראה
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--Work-->
        <div class="section scrollspy z-depth-2" id="work">
            <div class="container" dir="rtl">
                <h2 class="header text_b">אירועי עבר</h2>
                <div class="row" >
                    <!-- card 1 -->
                    <div class="col s12 m4 l4" style="float: right;">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/project1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">האירוע הראשון<i class="mdi-navigation-more-vert right"></i></span>
                                <p><a href="https://www.facebook.com/media/set/?set=a.1600448116892694.1073741830.1544808375790002&type=3">לגלריית תמונות</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">האירוע הראשון<i class="mdi-navigation-close right"></i></span>
                                <div id="firstp">
                                    <p> אירוע ההשקה של Open Mind !</p>
                                    אז מה היה לנו? מרתון הרצאות בני נוער ראשון מסוגו! מנושאים כמו כלכלה ועד משפטים ופיתוח משחקי מחשב. </p>
                                    המרצה האורח באירוע היה לא אחר מישי כהן (19), יזם ומנכ"ל חברת SmartBus. ישי סיפר לנו את סיפורו - ממיזם הצילום השכונתי ועד העסקת עובדים הגדולים ממנו בעשרות שנים.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 2 -->
                    <div class="col s12 m4 l4" style="float: right;" >
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/project2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">האירוע השני<i class="mdi-navigation-more-vert right"></i></span>
                                <p><a href="https://www.facebook.com/media/set/?set=a.1622962484641257.1073741831.1544808375790002&type=3">לגלריית תמונות</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">האירוע השני<i class="mdi-navigation-close right"></i></span>
                                <p>האירוע קיבל תפנית מעניינת. בניגוד לתחומים סטנדרטים כמו משפטים וכלכלה, הפעם פגשנו הרצאות ייחודיות על תורת המשחקים, אתיופיה, ערפדים בתרבות המודרנית ועוד.</p>
                                המרצה האורח באירוע היה מייקי לוי (19), ממובילי McCANN Young, שלוחת נוער של אחד ממשרדי הפרסום הגדולים בישראל, וממובילי Hackathon Generation Y, ההאקאתון הגדול ביותר לנוער.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- card 3 -->
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/project3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">האירוע השלישי<i class="mdi-navigation-more-vert right"></i></span>
                                <p><a href="https://www.facebook.com/media/set/?set=a.1630161927254646.1073741834.1544808375790002&type=3">לגלריית תמונות</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">האירוע השלישי <i class="mdi-navigation-close right"></i></span>
                                <p>האירוע התקיים בסמוך לתחילת שנת הלימודים. כ 150 בני נוער הגיעו עם אנרגיות חדשות והתרגשות יוצאת דופן. התקיימו הרצאות נוער בנושאי אקטואליה, מדעי המוח, יזמות ועוד. 
                                    בני הנוער שאהבו את ההרצאות ייקחו חלק בסדנאות עתידיות שיעבירו המרצים.
                                </p>
                                <p>
                                    לאירוע הגיעו גם שני מרצים אורחים: 
                                    צבי סער חסן, שהעניק תובנות פסיכולוגיות ופילוסופיות דרך סיפורי הקעקועים שעל גופו.
                                    ערן בידרמן, זוכה הסדרה "מי יפיל את המאסטר" ומנטליסט בעל שם עולמי. ערן נתן הצצה חד פעמית לחייו של מנטליסט, תוך שילוב קטעים ממופעיו.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Parallax-->
        <div class="parallax-container" id="contact">
            <div class="parallax"><img src="img/nophone_dark.jpg"></div>
            <h2 class="center header text_h2 white-text" dir="rtl">
                חושב שיש לך את זה? דבר איתנו! 
            </h2>
            <!-- copy of form code from Contact Us -->
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text" dir="rtl">
                            <label for="icon_prefix" class="white-text">שם מלא</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-phone prefix white-text"></i>
                            <input id="icon_email" name="phone" type="tel" class="validate white-text" pattern="[0-9]*" maxlength="10"  dir="rtl">
                            <label for="icon_email" class="white-text">מס' טלפון</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text" dir="rtl"></textarea>
                            <label for="icon_prefix2" class="white-text">פירוט</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">שלח
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
	

        <!--Team-->
        <div class="section scrollspy z-depth-2" id="team">
            <div class="container">
                <h2 class="header text_b" dir="rtl">הצוות</h2>
                <div class="row">
                 
                    <!--בן-->
                    <div class="col s12 m3">
                        <div class="card card-avatar">
                            <div class="waves-effect waves-block waves-light">
                                <img class="activator" src="img/avatar2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">בן להב<br/>
                                <small><em><a class="red-text text-darken-1" >Designer</a></em></small>
                                </span>
                                <p>
                                    <a class="blue-text text-lighten-2" href="https://www.facebook.com/ben.lahav.9?fref=ts">
                                    <i class="fa fa-facebook-square"></i>
                                    </a>
                            
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--דור-->
                    <div class="col s12 m3">
                        <div class="card card-avatar">
                            <div class="waves-effect waves-block waves-light">
                                <img class="activator" src="img/avatar3.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">
                                דור קליינשטרן <br/>
                                <small><em><a class="red-text text-darken-1" >מייסד</a></em></small></span>
                                <p>
                                    <a class="blue-text text-lighten-2" href="https://www.facebook.com/dore.kleinstern?fref=ts"> 
                                    <i class="fa fa-facebook-square"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--עילאי-->
                    <div class="col s12 m3">
                        <div class="card card-avatar">
                            <div class="waves-effect waves-block waves-light">
                                <img class="activator" src="img/avatar4.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">עילאי פרל<br/>
                                <small><em><a class="red-text text-darken-1" >מייסד</a></em></small></span>
                                <p>
                                    <a class="blue-text text-lighten-2" href="https://www.facebook.com/ilay.perl?fref=ts">
                                    <i class="fa fa-facebook-square"></i>
                                    </a>
                                 
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!--נועם-->
                    <div class="col s12 m3">
                        <div class="card card-avatar">
                            <div class="waves-effect waves-block waves-light">
                                <img class="activator" src="img/avatar1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">נועם להב <br/>
                                <small><em><p class="red-text text-darken-1">CEO</p></em></small></span>
                                <p>
                                    <a class="blue-text text-lighten-2" href="https://www.facebook.com/noam.r.lahav?fref=ts">
                                    <i class="fa fa-facebook-square"></i>
                                    </a>
                             
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <footer id="contact" class="page-footer default_color scrollspy" align="center">
            <h5 class="white-text" style="font-size: 3vmax; display: inline-block; text-align:left;">Open.Mind@outlook.co.il </h5> 
            <a href="https://www.facebook.com/OpenMind.IL/"><i class="fa fa-facebook-square" style="color: white; margin-left:20px; font-size: 50px;"></i></a>
           <div class="footer-copyright default_color" style="align:right; padding: 2px; " >
                <span style="color:white;display: inline-block;">
                    Made with
                    </span>
				  <span style="color: #e53935; display: inline-block;">
					❤ 
					</span>
					<span style="display: inline-block;">
					by ¯\_(ツ)_/¯ Design
					</span>
            </div>
        </footer>
        <!--  Scripts-->
        <script type='text/javascript'>alert('פנייתך התקבלה, נחזור אליך בקרוב!')</script>
	<script src="min/plugin-min.js"></script>
        <script src="js/init.js"></script>
        </div>
    </body>
</html>

<?php

?>