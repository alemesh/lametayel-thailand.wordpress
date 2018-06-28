<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: Flights page
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>

<div class="hlt-wraper">



    <div class="wrap-header-section">
        <div class="main-holder">
            <div class="button-section">
                <a href="">טיסות בתאילנד</a>
            </div>
            <div class="wrap-holder tabs">
                <div class="left-section ">
                    <ul class="items tabs__caption menu-lisy">
                        <li class="item active">
								<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/item-img-2.png)">
									<span class="text-item"></span>
									<span class="text">טיסות לבנגקוק</span>
								</span>
                        </li>
                        <li class="item">
								<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/item-img-1.png)">
									<span class="text-item"></span>
									<span class="text">טיסות לצ’אנג מאי</span>
								</span>
                        </li>
                        <li class="item">
								<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/item-img-4.png)">
									<span class="text-item"></span>
									<span class="text">טיסות לקוסמוי</span>
								</span>
                        </li>
                        <li class="item">
								<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/item-img-3.png)">
									<span class="text-item"></span>
									<span class="text">טיסות לפוקט</span>
								</span>
                        </li>
                        <li class="item">
								<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/item-img-6.png)">
									<span class="text-item"></span>
									<span class="text">טיסות לפאטייה</span>
								</span>
                        </li>
                        <li class="item">
								<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/item-img-5.png)">
									<span class="text-item"></span>
									<span class="text">טיסות לצ’אנג ראי</span>
								</span>
                        </li>
                        <li class="item">
								<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/item-img-8.png)">
									<span class="text-item"></span>
									<span class="text">טיסות לקו צ’אנג</span>
								</span>
                        </li>
                        <li class="item">
								<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/item-img-7.png)">
									<span class="text-item"></span>
									<span class="text">טיסות לקראבי</span>
								</span>
                        </li>
                    </ul>
                    <ul class="buttons tabs__content active">
                        <li class="button">
                            <a href="">מפוקט לבנגקוק</a>
                        </li>
                        <li class="button">
                            <a href="">מקוסמוי לבנגקוק</a>
                        </li>
                        <li class="button">
                            <a href="">מקו צ’אנג לבנגקוק</a>
                        </li>
                        <li class="button">
                            <a href="">מקראבי לבנגקוק</a>
                        </li>
                        <li class="button">
                            <a href="">מצ’אנג ראי לבנגקוק</a>
                        </li>
                        <li class="button">
                            <a href="">מצ’אנג מאי לבנגקוק</a>
                        </li>
                    </ul>
                    <ul class="buttons tabs__content">
                        <li class="button">
                            <a href="">מפאטאייה לצ’אנג מאי</a>
                        </li>
                        <li class="button">
                            <a href="">מקוסמוי לצ’אנג מאי</a>
                        </li>
                        <li class="button">
                            <a href="">מקראבי לצ’אנג מאי</a>
                        </li>
                        <li class="button">
                            <a href="">מבנגקוק לצ’אנג מאי</a>
                        </li>
                    </ul>

                    <ul class="buttons tabs__content">
                        <li class="button">
                            <a href="">מפוקט לקוסמוי</a>
                        </li>
                        <li class="button">
                            <a href="">מבנגקוק לקוסמוי</a>
                        </li>
                        <li class="button">
                            <a href="">מצ’אנג מאי לקוסמוי</a>
                        </li>
                        <li class="button">
                            <a href="">מקראבי לקוסמוי</a>
                        </li>
                    </ul>

                    <ul class="buttons tabs__content">
                        <li class="button">
                            <a href="">מפאטאייה לפוקט</a>
                        </li>
                        <li class="button">
                            <a href="">מקוסמוי לפוקט</a>
                        </li>
                        <li class="button">
                            <a href="">מצ’אנג מאי לפוקט</a>
                        </li>
                        <li class="button">
                            <a href="">מבנגקוק לפוקט</a>
                    </ul>
                    <ul class="buttons tabs__content">
                        <li class="button">
                            <a href="">מפאטאייה לפוקט</a>
                        </li>
                        <li class="button">
                            <a href="">מקוסמוי לפאטאייה</a>
                        </li>

                    </ul>

                    <ul class="buttons tabs__content">
                        <li class="button">
                            <a href="">מבנגקוק לצ’אנג ראי</a>
                        </li>
                    </ul>
                    <ul class="buttons tabs__content">
                        <li class="button">
                            <a href="">מבנגקוק לקו צ’אנג</a>
                        </li>
                    </ul>
                    <ul class="buttons tabs__content">
                        <li class="button">
                            <a href="">מקוסמוי לקראבי</a>
                        </li>
                        <li class="button">
                            <a href="">מבנגקוק לקראבי</a>
                        </li>
                        <li class="button">
                            <a href="">מצ’אנג מאי לקראבי</a>
                        </li>
                    </ul>
                </div>

                <div class="right-section">
                    <div class="wrap-text">
                        <h3 class="tabs__content active">טיסות לבנגקוק</h3>
                        <h3 class="tabs__content">טיסות לצ’אנג מאי</h3>
                        <h3 class="tabs__content">טיסות לקוסמוי</h3>
                        <h3 class="tabs__content">טיסות לפוקט</h3>
                        <h3 class="tabs__content">טיסות לפאטייה</h3>
                        <h3 class="tabs__content">טיסות לצ’אנג ראי</h3>
                        <h3 class="tabs__content">טיסות לקו צ’אנג</h3>
                        <h3 class="tabs__content">טיסות לקראבי</h3>
                        <p><span>ע"מ לקבל הצעה אטרקטיבית לטיסות פנים בתאילנד, אנא פנו אלינו עם הפרטים הבאים:</span>
                            תאריכי טיסות רצויים, לאילו יעדים, ובמידה ומדובר במשפחות יש לציין את גילאי הילדים. אנא בדקו באופן שוטף את המייל שלכם לוודא שהמייל מאיתנו לא נכנס לדואר ספאם/גאנק. למי ששולח מייל מהעבודה נא לציין מייל פרטי בנוסף</p>
                    </div>
                    <div class="wrap-img tabs__content active" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-2.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-3.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-4.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-5.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-6.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-7.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-8.png)"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="text-section">
        <div class="background-holder"></div>
        <div class="main-holder">
            <div class="first-block">
                <p>שיטת התמחור עבור טיסות פנים בתאילנד שונה לגמרי מישראל. בתאילנד, ככל שתזמינו את הטיסה מוקדם יותר, תוכלו להנות ממחיר טיסה מוזל משמעותית מהרגיל. טיסות פנים וגם הטיסה שבה אתם מגיעים מישראל לתאילנד ובחזרה, מבוססות על מכירת בדיוק אותו מושב בטיסה בכמה מחירים שונים, שמחולקים ע"פ מחלקות. כלומר, ישנם פערי מחירים בין מי שיושב אחד ליד השני באותו טיסה ובאותו מטוס. לכן, חשוב להזמין דרכנו מראש ככל שניתן, על מנת להנות ממחיר מוזל בכרטיס הטיסה. הזמנה דרכנו היא בד"כ יותר זולה מהמבצעים שחברות התעופה תאי ובנגקוק אייר מציגות באתר האינטרנט שלהן. מכיון וכך, למה לכם לשבור את הראש בהזמנה עצמאית שלא תחסוך לכם כסף? תנו לניסיון רב השנים שלנו לסייע לכם בכך. בהרבה מקרים, לאותו יעד טיסה ניתן לטוס בכמה מחירים שונים.<span> אנו נמצא עבוכם את המחיר האטרקטיבי ביותר עם חברת התעופה הבטוחה ונותת השירות הטוב ביותר שקיים ליעד בו אתם טסים.</span></p>
            </div>
            <div class="wrap-button">
                <a href="" class="button" id="mybtn" data-btn="btnopen"><span>מידע נוסף</span></a>
            </div>
            <div class="second-block">
                <h4>תאי איירוויס</h4>
                <p>חברת תאי איירווייס, חברת התעופה הלאומית של תאילנד ונחשבת לאחת מחברות התעופה הטובות בעולם ומדורגת במקומות הראשונים לפי הדירוג שערך מכון המחקר "סקייטרקס" בלונדון. כאשר הביאו בחשבון את רמת השירות בטיסה, איכות המזון, הבידור (סרטים ועיתונים) ואביזרי הנוחות (אוזניות, שמיכות וכריות), נוחות המושבים, בידוק מזוודות ורמת חדרי האירוח בנמלי התעופה, והכי חשוב תדירות האיחורים והעיכובים, ורמת בטיחות של צי המטוסים.</p>
                <p>תאי אירוויס מנצחת בגדול דו"ח נוסף נותן דרגות על מצוינות: כאשר "תאי" מצטיינת בשירות של צוות המטוס. יום הטיסה הוא יום מלחיץ גם בטיסות פנים, ההגעה בזמן לצ'ק, עיכובים ואיחורים, המתנה רבה למזוודות וכו.. עם תאי איירוייס היו בטוחים כי גם יום הטיסה הוא חוויה בפני עצמה.</p>
                <p>עם חברת תאי לא יהיו לכם הפתעות לתשלום נוסף על מזוודות האוכל מצויין והשירות מעולה. אצלנו במרכז למטייל תוכלו להזמין טיסות במחירים זולים מהאתר של תאי בנוחות וגמישות. תאי איירוויס מגיעים להרבה יעדים בעולם ולכל יעד בתאילנד בנוחות ובביטחון.</p>
                <h4>בנגקוק איירוויס</h4>
                <p>חברת בנגקוק איירוויס שזכתה לכינוי חברת תעופה בוטיק של אסיה מציעה מגוון טיסות פנים בתאילנד המלווה במטוסים מצויינים, שירות מדהים הכולל ארוחה מלאה גם בטיסות קצרות וטרקלין בשדות התעופה המיועד לכלל יעד הנוסעים.. (ולא רק למיוחסים) בו תקבלו אוכל, שתייה ואינטרנט חינם. שדה התעופה של האי סמוי הוא אחד משדות התעופה היפים והנעימים בעולם והוא בבעלות של חברת בנגקוק איירוויס .</p>
                <p>שדה קטן וחמוד שנראה כאילו לקוח מהאגדות. עם קרוניות ססגוניות בסגנון דיסני, המסיעות את הנוסעים מהמטוס לטרמינל, ביתנים עם גג קש ואווירה של חופשה אקזוטית. בשדה שדרת חנויות חדשה ויפה ומבחר מסעדות ובתי קפה שלא היו מביישים שדה תעופה בינלאומי גדול...
                    לכן מומלץ להגיע לקוסמוי בטיסה של חברת בנגקוק איירוויס.</p>
                <h4>אייר אסיה</h4>
                <p>אייר אסיה הינה חברה אינטרנטית עצמאית שלא עובדת מול סוכני נסיעות.
                    במידה ומזמינים באתר שלהם באופן עצמאי מספר חודשים מראש, נהנים ממחיר מוזל ביותר לעומת בנגקוק אייר ותאי אייר.
                    אנו מציעים שתשוו מחיריםן בין החברות ובמידה ואייר אסיה זולים משמעותית. ניתן לסגור באייר אסיה טיסה למרות כל החסרונות שיכולים מלהיות אבל לא תמיד קורים.
                    מצ""ב החסרונות אשר בגינן אייר אסיה מציעה מחירים זולים.</p>
                <p>אין הנחה לילדים, אין שירות בטיסה. המזון והשתיה בתשלום שזה גם כולל מים. וכידוע אסור להעלות נוזלים לטיסה מעבר ל 100 מ""ל. כך שלא תוכלו לעלות עם בקבוק מים לטיסה. לקבוע מקומות בטיסה אפשרי בתשלום נוסף דרך אתר האינטרנט. לא ניתן לשנות תאריך או שעה אלא בתשלום של 600 באט לנוסע או שלא ניתן לשנות כלל.</p>
                <p>אייר אסיה סוגרים את הצ'ק אין 45 דקות לפני. בנגקוק אייר ותאי 20 דקות לפני. לא מעט לקוחות הגיעו 44 דקות לפני ולא נתנו להם לעלות לטיסה. ואין שום החזר כספי..
                    לקוח עשה טעות בשם משפחה והחליף אות בטעות, לשנות זאת נאלץ להמתין חצי שעה על עלות שיחה בינ""ל לתאילנד, וגבו ממנו גם תשלום על כך.
                    לקוח שלא שם לב שיש טעות בשם לא העלו אותו כלל לטיסה. יש לציין כי שירות הלקוחות הטלפוני של אייר אסייה ידוע לשימצה באיכותו הלקויה בחסר.
                    מטוסים קטנים והמושבים מאוד צפופים, ומטבעם שהם קטנים הרבה טלטלות חזקות באויר שמורגשות טוב מאוד ובהחלט לא מתאימות למי שסובל מבחילות או פחד מטיסות.
                    איחורים רבים של אייר אסיה. טיסות רבות מעוכבות באופן יומיומי. ולכן פוגע משמעותית בלו""ז של מי שמגיע לחופשה קצרה של 21 יום וכל תקלה הכי קטנה פוגמת מיידית בחופשה.
                    ולמען הסר כל ספק, אין שום בעייה בטיחותית לטוס עם אייר אסיה.
                    אנו יודעים שקצת "הפחדנו" אתכם...אבל זו לא היתה המטרה...הכל ענין של תיאום ציפיות,יתרונות מול חסרונות יכולים להיות.
                    בהחלט יתכן שהכל ירוץ חלק וללא בעיות.</p>
                <p>אייר אסיה היא חברת תעופה שפועלת בשיטת הלו קוסט החברה מציעה מחירי טיסה זולים למזמינים טיסות פנים הרבה זמן מראש כאשר ההזמנה מתבצעת דרך אתר האינטרנט של החברה. המחיר הזול היחסי בא על חשבון דברים אחרים ולכן גם החסרונות והתלונות הם רבים . לכן יש לדעת כמה עובדות לפני שמזמינים בהזמנה באתר האינטרנט של אייר אסיה יש הרבה פרטים שצריך לקרוא במידה ולא סימנתם תצטרכו לשלם. לדוגמא : על כל מזוודה ששולחים לבטן המטוס משלמים כ 200 באט אלא אם סימנתם בהזמנה על רצונכם לשלוח מזוודה כאשר העלות על כך באתר משתנה והיא בסביבות 100 באט למזוודה.</p>
                <p>יש לזכור כי בכל הטיסות אסור להכניס נוזלים בתיק יד מעבר ל 100 מ""ל. בבקבוק המציין את כמות התכולה, לכן אם אתם לוקחים אתכם נוזלים כגון שמפו בושם שתיה וכדומה. לא תוכלו לעלות איתכם לטיסה ותצטרכו לשלוח לבטן המטוס. מאפשרים 15 ק""'ג לכל נוסע וחריגה מהקילו ה 16 זה 90 באט לקילו. אייר אסיה לא מגיעה לאי סמוי.</p>
                <p>עובדה חשובה על אייר אסיה, יש עיכובים ואיחורים רבים בין 40-70 אחוז מהטיסות של אייר אסיה מתעכבות ומאחרות דבר שפוגם משמעותית בחופשה דבר שגורם לפיספוס טיסות המשך, מעבורות, המתנה מורטת עצבים ועוד.
                    חשוב מאוד לקרוא את העובדות החשובות על אייר אסיה בדף הבא לפני שמזמינים ! מומלץ גם לעשות חיפוש עצמאי קצר באינטרנט על תגובות ותלונות של נוסעים.</p>
                <p>עובדות נוספות שחשוב לדעת על אייר אסייה לפני שמזמינים. אין הנחה לילדים, אין שירות בטיסה. המזון והשתיה בתשלום שזה גם כולל מים. וכידוע אסור להעלות נוזלים לטיסה מעבר ל 100 מ""ל. כך שלא תוכלו לעלות עם בקבוק מים לטיסה. לקבוע מקומות בטיסה אפשרי בתשלום נוסף דרך אתר האינטרנט. לא ניתן לשנות תאריך או שעה אלא בתשלום של 600 באט לנוסע, או שלא ניתן לשנות בכלל במידה ורכשתם כרטיס פרומו.</p>
                <p>אייר אסיה סוגרים את הצ'ק אין 45 דקות לפני. בנגקוק אייר ותאי 20 דקות לפני. לא מעט לקוחות הגיעו 44 דקות לפני ו נתנו להם לעלות לטיסה. ואין שום החזר כספי..
                    יש לבדוק את הפרטים היטב באתר בעת ביצוע ההזמנה. לקוח שלא שם לב שיש טעות בשם לא העלו אותו כלל לטיסה. יש לציין כי שירות הלקוחות הטלפוני של אייר אסייה ידוע לשימצה באיכותו הלקויה בחסר.
                    מטוסים קטנים והמושבים מאוד צפופים.</p>
                <p>איחורים רבים של אייר אסיה בטווח של עד 3 שעות.</p>
                <h4>שדות תעופה</h4>
                <p>העיר בנגקוק גדולה ורחבה ומכילה פי 2 מאוכלוסיית מדינת ישראל עם למעלה מ-14 מיליון תושבים.</p>
                <p>השדה הבינלאומי ממוקם כשעה נסיעה ממרכז העיר בנגקוק, תלוי בפקקים.
                    הטיסות שבהן תגיעו מישראל, ינחתו בשדה הבינלאומי, בעל השם "סוברנפום".
                    השדה הישן, "דון מואנג", מרוחק כשעה עד שעה וחצי נסיעה מהשדה הבינלאומי "סוברנפום".
                    הטיסות של בנגקוק אייר ותאי, יוצאות מהשדה תעופה הבינלאומי "סוברנפום".
                    הטיסות של חברות התעופה "לו קוסט" ובהן אייר אסיה, יוצאות מהשדה הישן "דון מואנג".</p>
                <p>כל מי שרוצה להמשיך בטיסת המשך, בין אם זה לצ'יאנג מאי או לצ'יאנג ראי, או לאיים כגון קוסמוי ופוקט ,כדאי שיבחר בטיסה של חברת התעופה בנגקוק אייר או תאי אייר.
                    בצורה זו, תוכלו להמשיך ישירות ליעד בו תחפצו, ללא עיכובים ומעברים מיותרים בין שדות תעופה.</p>
                <p>יש לקחת בחשבון שכדאי לקחת לפחות 3 עד 3.5 שעות הפרש בין שעת הנחיתה בבנגקוק לבין שעת ההמראה של טיסת ההמשך.
                    בצורה זו תוכלו לנוח במהלך הטיסה מישראל לתאילנד, ללא מחשבות מיותרות האם תספיקו לטיסות ההמשך או שלא.</p>
                <p>רשות שדות התעופה בתאילנד מפעילה שדות תעופה ליעדים הפופולרים לקהל הישראלי כגון:
                    בנגקוק, צ'יאנג מאי, , פוקט, קוסמוי ופאטאייה.</p>
                <p>יתרון רב לחברת התעופה של בנגקוק אייר על פני חברת התעופה תאי אייר הינו הטרקלין אשר מוצע חינם לקהל הטסים בחברת בנגקוק אייר.
                    בטרקלין תוכלו להנעים את זמנכם לצד אינטרנט חינם, לשתות שתייה קלה או חמה ולנשנש ממגוון מטעמים באדיבות חברת בנגקוק אייר</p>
            </div>
        </div>
    </div>







</div>



<?php get_footer(); ?>