<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: Attractions page
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();


$args = array(
    'post_type'      => array('attraction'),
    'posts_per_page' => - 1,
    'post_status'    => 'publish',
    'order'          => 'ASC',
    'orderby'        => 'title',
);

$allBizs_query = new WP_Query( $args );
$allBizs_query = $allBizs_query->get_posts();
$businessList = array();


/** @var $allBizs_query WP_Post[] */
foreach ( $allBizs_query as $biz_post ) {

    $geoLocation = '';

    if (get_field( 'map_coordinates', $biz_post->ID )){
        $geoLocation = get_field( 'map_coordinates', $biz_post->ID );
    }

    if ( $geoLocation && $geoLocation !=',' ) {

        $arr = explode(",", $geoLocation, 2);
        $first = $arr[0];
        $second = $arr[1];

        $img = wp_get_attachment_image_src( get_post_thumbnail_id( $biz_post->ID ), 'thailand-thumbnail');

        $businessList[] = array(
            //'icon'    => get_template_directory_uri().'/dist/images/map_icon.png',
            'lat'     => $first,
            'lng'     => $second,
            'img'			=> $img[0],
            'title'   => $biz_post->post_title,
            'bizLink' => get_permalink( $biz_post->ID ),
            'desc'    =>  get_the_excerpt( $biz_post->ID ),
        );
    }
}

get_header();
?>


<div class="hlt-wraper attractions-main-page">

    <div class="main-conten-section">
        <div class="background-holder"></div>
        <div class="main-holder">
            <div class="button-block">
                <a href="#" class="button"><span>אטרקציות בתאילנד</span></a>
            </div>
            <div class="wrap-text-sections">
                <div class="left-block">
                    <h4>למה אנחנו לא מפרסמים מחירים?</h4>
                    <p>חתמנו על הסכמים בלעדיים לקהל הישראלי להזמנת מלונות, טיסות ואטרקציות ברחבי תאילנד. הם אסרו עלינו להציג את המחיר הזול באופן פומבי על גבי אתר האינטרנט שלנו. נשמח לשלוח לכם במהרה את ההצעה הכי זולה ליעד שתחפצו בו.</p>
                </div>
                <div class="right-block">
                    <p>ממלכת תאילנד הקסומה מציעה בפניכם שפע של אפשרויות מהנות לבילוי לכל הגילאים, לזוגות בירח דבש, למשפחות עם ילדים, למספר ח'ברה שמטיילים יחדיו ולמעשה כל אחד ואחת מכם ימצאו את האפשרות להנות מפעילות מהנה שוברת שגרה באוירה כיפית עם טעם של עוד</p>
                    <p> תאילנד, בשונה ממדינות אחרות בעולם, מציעה לכם את האפשרות להנות ממבחר רב של מופעים מהנים, כגון מופע קברט קליפסו בבנגקוק, מופעי תרבות ופלורקלור כגון מופע סיאם נירמיט בבנגקוק, להנות משייט קיאקים בתוך מערות קטנות בים ולחזות במחזות מדהימים שלא תראו באף מקום אחר בעולם. <a href="#">קרא עוד</a></p>
                </div>
            </div>

            <div class="wrap-img-section">
                <ul class="items">
                    <?php
                    $categories = get_terms( array('taxonomy' => 'destinations', 'parent' => 0) );
                    foreach ($categories as $cat){
                    $term_id = $cat->term_id;
                    $taxonomy_name = 'destinations';
                    $termchildren = get_term_children( $term_id, $taxonomy_name );
                    $lnk = "";
                    foreach ( $termchildren as $child ) {
                        $term = get_term_by( 'id', $child, $taxonomy_name );
                        $type = get_field('type_destination', 'destinations_'.$term->term_id);
                        if($type === 'attraction'){
                            $lnk = get_term_link( $child, $taxonomy_name );
                        }
                    }
                    //only if destination has child category type hotel display it
                    if($lnk){?>
                        <?php $image = get_field('featured_img', 'destinations_'.$cat->term_id);?>
                    <li class="item">
                        <a href="<?php echo $lnk;?>" class="image" style="background-image: url(<?php echo $image['sizes']['thailand-square-2']; ?>)">
                            <span class="text-item"></span>
                            <span class="text"><?php echo  $cat->name;?></span>
                        </a>
                    </li>
                    <?php  }
                    } ?>

                </ul>
            </div>



        </div>
    </div>



</div>











<?php
get_footer(); ?>
