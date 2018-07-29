<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: About page
 *
 * @package podium
 */
//var_dump(111);
get_header();
?>
<div class="main-content">
    <div class="up_img">
        <div class="text_in_up_img">אודותינו</div>
        <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
    </div>
    <div class="content-body">
        <div class="right-text-body about-page-main-content">
            <p>
                המרכז למטייל תאילנד – רשת של סוכנויות נסיעות בתאילנד אשר הוקמה בתחילת שנת 2006. למרכז למטייל תאילנד ישנם מספר סניפים ברחבי תאילנד, אשר כולם מקבלים קהל פרונטלי, מלבד סניף האינטרנט אשר ממוקם בבנגקוק ועוסק בהזמנות כשהלקוח עדיין נמצא בישראל.
            </p>
            <div class="block-for-img-on-textpage">
                <!--<div class="img-for-page" style="background-image: url(img/family1.png)"></div>-->
                <!--<div class="img-for-page" style="background-image: url(img/family.png)"></div>-->
                <!--<div class="img-for-page"></div>-->
                <div class="wrap-img">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/family1.png" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/family.png" alt="">
                </div>

            </div>
            <p>
                המרכז למטייל תאילנד מעניק שירותים לקהל הישראלי בכל רחבי תאילנד במתכונת שאינה קיימת באף מקום אחר בעולם לקהל הישראלי ובשפה העברית. למעשה, הקהל הישראלי אשר מגיע לנפוש בתאילנד זוכה לשירות יחודי  מסוגו אשר אין כמותו לאף מדינה אחרת בעולם. בשל כך, מגיעים מנהלי מכירות בכירים ממגוון בתי המלון הכי גדולים בתאילנד על מנת להתרשם ולהתפעם משירות יחודי זה לצד אוכל ישראלי אותנטי.

            </p>
            <p>
                חשוב לציין שכל הסניפים הפרונטלים של המרכז למטייל ברחבי תאילנד עובדים במתכונת של:
                ONE STOP SHOP כל השירותים תחת קורת גג אחת, להתראות!
            </p>
            <button class="button-for-left-form" type="submit"><a href="<?php echo home_url('/');?>branch/">לרשימת הסניפים שלנו</a><i class="fas fa-chevron-left"></i></button>

            <a class="link-to-restaurant" href="<?php echo home_url('/');?>restaurants/">
                <!--<div class="block-for-img-on-textpage-for-allWidth"></div>-->
                <img src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/about(big).png" alt="" class="block-for-img-on-textpage-for-allWidth">
            </a>

            <h2>מסעדות המרכז למטייל תאילנד</h2>
            <line></line>
            <p>
                רשת מסעדות המרכז למטייל תאילנד מציעה לכם אוכל ישראלי ביתי במחירים זולים בכל רחבי תאילנד: בבנגקוק, בצ'יאנג מאי ובקוסמוי.
            </p>
            <p>
                בתפריט המסעדה תוכלו למצוא מבחר מטעמים ישראלים כגון בורקס, שניצל, שקשוקה, חומוס, פלאפל, סלט ירקות ישראלי, פיתות טריות, פיצות באפייה בתנור ועוד הרבה ממטעמי  המטבח הישראלי, כך שלא תצטרכו להתגעגע לאוכל בבית, אצלנו תרגישו תמיד כמו בבית.
            </p>
            <p>
                בכל אחת ממסעדות המרכז למטייל ברחבי תאילנד תוכלו להנות ממבחר מטעמים משאר מטבחי העולם כגון אוכל תאילנדי, פסטה, רביולי, המבורגר, קציצות קבב ושיפודי עוף.
            </p>
            <p>
                חובבי הסלטים והקינוחים ישמחו לגלות עוגות גבינה, סופלה שוקולד, סלט יווני ועוד מבחר סלטים בטעם ביתי.
            </p>
            <p>
                מסעדת המרכז למטייל ברחוב הקוואסאן פתוחה 24 שעות ומציעה לכם גם את האפשרות להנות ממבחר מאכלים מהמטבח היפני בניצוחו של שף מדופלם, כך שחגיגה של טעמים מחכה לכם אצלנו ברשת מסעדות המרכז למטייל בכל רחבי תאילנד, בבנגקוק, בצ'יאנג מאי ובקוסמוי.
            </p>
            <button class="button-for-left-form" ><a href="<?php echo home_url('/');?>wp-content/uploads/2016/06/lametayel-menu-low-res.pdf">לרשימת הסניפים שלנו</a><i class="fas fa-chevron-left"></i></button>


        </div>
        <div class="left-form-body">
                        <?php include(locate_template( 'directives/left-sidebar-form.php' )); ?>
            <div class="left-sidebar-text">
                <?php if(get_field('txt_under_form', 'option')){ ?>
                    <?php echo get_field('txt_under_form', 'option'); ?>
                <?php	}?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

























