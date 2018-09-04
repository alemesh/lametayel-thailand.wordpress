<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: Front Page
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();

$home_page = get_fields();
$post_id = get_the_ID();
$items_of_second_sections = get_field('items_of_second_sections', $post_id);
$items_of_the_fourth_section = get_field('items_of_the_fourth_section', $post_id);
$items_of_the_fifth_section = get_field('items_of_the_fifth_section', $post_id);
$items_of_the_sixt_sectopn = get_field('items_of_the_sixt_sectopn', $post_id);
$items_of_the_third_section = get_field('items_of_the_third_section', $post_id);
?>





    <div class="hlt-wraper">
<!--        <div class="massange"><span>דברו איתנו </span></div>-->
        <div class="header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/background-header.png)">
            <div class="htl-contactform-section">
                <div class="main-holder-form">
                    <?php if($home_page['title_header'] != null){ ?>
                        <h3><?php echo $home_page['title_header'];?></h3>
                    <?php }?>
<!--                    <h3>--><?php //esc_html_e( 'Rainbow of magical holiday options in Thailand', 'podium' ); ?><!--</h3>-->
                    <div class="succes-nsg" hidden>
                        <h3 class="desc"><span>תודה!</span> פרטיך התקבלו בהצלחה.</h3>
                        <h3 class="mob"><span>תודה!</span><br> פרטיך התקבלו בהצלחה.</h3>
                    </div>
                    <div class="contact-form">
                        <form action="" name="search-attractions" id="ajax_form" class="form form-validation" method="post" novalidate>
                            <div class="form-row-wrap">
                                <div class="form-row center">
<!--                                    <select required name="people" id="sources" class="form-control custom-select custom-select-1 people" placeholder="מי אתם?">-->
                                    <select required name="people" id="sources" class="form-control custom-select custom-select-1 people" placeholder="<?php esc_html_e( 'who are you?', 'podium' ); ?>">
<!--                                        --><?php
//                                        $taxonomy_name = 'destinations';
//                                        $category = get_term_by('name', 'People', $taxonomy_name);
//                                        $children = get_term_children($category->term_id, 'destinations');
//                                        foreach ($children as $child) {
//                                            $term = get_term_by('id', $child, $taxonomy_name)
//                                            ?>
<!--                                            <option value="--><?//=$child ?><!--">--><?//= $term->name ?><!--</option>-->
<!--                                        --><?php //} ?>
                                        <option value="578"><?php esc_html_e( 'Couples', 'podium' ); ?></option>
                                        <option value="580"><?php esc_html_e( 'Everyone', 'podium' ); ?></option>
                                        <option value="582"><?php esc_html_e( 'Families', 'podium' ); ?></option>
                                        <option value="584"><?php esc_html_e( 'Young people', 'podium' ); ?></option>
                                    </select>
                                </div>
                                <div class="form-row center">
<!--                                    <select required name="sources-2" id="sources-2" class="form-control custom-select custom-select-2 sources" placeholder="לכמה זמן?">-->
                                    <select required name="sources-2" id="sources-2" class="form-control custom-select custom-select-2 sources" placeholder="<?php esc_html_e( 'How long?', 'podium' ); ?>">
<!--                                        <option value="בחר 1">עד עשרה ימים</option>-->
                                        <option value="<?php esc_html_e( 'Up to ten days', 'podium' ); ?>"><?php esc_html_e( 'Up to ten days', 'podium' ); ?></option>
<!--                                        <option value="בחר 2">מעל עשרה ימים</option>-->
                                        <option value="בחר 2"><?php esc_html_e( 'Over ten days', 'podium' ); ?></option>
                                    </select>
                                </div>
                                <div class="form-row center">
                                    <select required name="attractions" id="sources-3" class="form-control custom-select custom-select-3 attractions" multiple="multiple" placeholder="<?php esc_html_e( 'Interested in hearing about ...', 'podium' ); ?>">
<!--                                        --><?php
//                                        $taxonomy_name = 'destinations';
//                                        $category = get_term_by('name', 'Attractions', $taxonomy_name);
//                                        $children = get_term_children($category->term_id, 'destinations');
//                                        foreach ($children as $child) {
//                                            $term = get_term_by('id', $child, $taxonomy_name)
//                                            ?>
<!--                                            <option value="--><?//=$child ?><!--">--><?//= $term->name ?><!--</option>-->
<!--                                        --><?php //} ?>

                                        <option value="588"><?php esc_html_e( 'culture', 'podium' ); ?></option>
                                        <option value="590"><?php esc_html_e( 'romantic', 'podium' ); ?></option>
                                        <option value="592"><?php esc_html_e( 'Culinary', 'podium' ); ?></option>
                                        <option value="594"><?php esc_html_e( 'Water Park', 'podium' ); ?></option>
                                        <option value="596"><?php esc_html_e( 'Off the Beaten Track', 'podium' ); ?></option>
                                        <option value="598"><?php esc_html_e( 'Tours', 'podium' ); ?></option>
                                        <option value="600"><?php esc_html_e( 'Animals', 'podium' ); ?></option>
                                        <option value="602"><?php esc_html_e( 'extreme', 'podium' ); ?></option>

                                    </select>
<!--                                    <span class="multi-choese">(ניתן לבחור מספר אפשרויות)</span>-->
                                    <span class="multi-choese"><?php esc_html_e( '(You can select several options)', 'podium' ); ?></span>
                                </div>
                                <div class="form-row button form-grow-5">
                                    <span><i class="fas fa-search"></i></span>
                                    <!--<button type="submit" id="btn" class="btn"><span class="btn-txt">צרפו אותנו </span></button>-->
<!--                                    <input type="submit" id="btn" class="btn" value="מצא לי חופשה"/>-->
                                    <input type="submit" id="btn" class="btn" value="<?php esc_html_e( 'Find me a vacation', 'podium' ); ?>"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="second-section">
            <div class="background-holder"></div>
            <div class="main-holder">
                <ul class="items slick-slider">
                    <?php if (isset($items_of_second_sections) && !empty($items_of_second_sections)): ?>
                    <?php foreach ($items_of_second_sections as $block): ?>
                    <li class="item">
                        <a href="<?php echo $block['link'];?>" <?php echo ($block['target'] == true)?'target="_blank"  rel="nofollow"':'';?> style="background-image: url(<?php echo $block['image'];?>)"></a>
                    </li>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </ul>
<!--                <h3>יעדים נבחרים</h3>-->
<!--                <h3>--><?php //esc_html_e( 'Selected goals', 'podium' ); ?><!--</h3>-->
                <?php if($home_page['title_of_the_third_section'] != null){ ?>
                    <h3><?php echo $home_page['title_of_the_third_section'];?></h3>
                <?php }?>
            </div>
        </div>


        <div class="third-section">
            <ul class="items">
                <?php if (isset($items_of_the_third_section) && !empty($items_of_the_third_section)): ?>
                    <?php foreach ($items_of_the_third_section as $block): ?>
                        <li class="item">
                            <a href="<?php echo $block['link'];?>" style="background-image: url(<?php echo $block['image'];?>);">
                                <span class="text-item"></span>
                                <span class="text"><?php echo $block['title'];?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <div class="wrap-button">
<!--                <a href="--><?php //echo get_home_url();?><!--/%D7%99%D7%A2%D7%93%D7%99%D7%9D/" class="button">לרשימת היעדים המלאה</a>-->

                <?php if($home_page['button_of_the_third_section'] != null){ ?>
                    <a href="<?php echo $home_page['button_link_of_the_third_section'];?>" class="button"><?php echo $home_page['button_of_the_third_section'];?></a>
                <?php }?>
            </div>
        </div>

        <div class="fourth-section">
            <div class="background-lier-fourth-section" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/bg-lier-fourth-section.png)"></div>
            <div class="main-holder">
<!--                <h3>למה להזמין דרכינו חופשה?</h3>-->
<!--                <h3>--><?php //esc_html_e( 'Why invite us to vacation?', 'podium' ); ?><!--</h3>-->
                <?php if($home_page['title_of_the_fourth_section'] != null){ ?>
                    <h3><?php echo $home_page['title_of_the_fourth_section'];?></h3>
                <?php }?>
                <ul class="items">
                    <?php if (isset($items_of_the_fourth_section) && !empty($items_of_the_fourth_section)): ?>
                        <?php foreach ($items_of_the_fourth_section as $block): ?>
                            <li class="item">
                                <div class="wrap-img">
                                    <img src="<?php echo $block['image'];?>" alt="">
                                </div>
                                <span><?php echo $block['text'];?></span>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>


        <div class="fifth-section">
            <div class="background-lier-fifth-section" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/background-lier-fourth-section.png)"></div>
            <div class="main-holder">
<!--                <h3>הפופולריים שלנו</h3>-->
<!--                <h3>--><?php //esc_html_e( 'Our popular', 'podium' ); ?><!--</h3>-->
                <?php if($home_page['titleof_the_fifth_section'] != null){ ?>
                    <h3><?php echo $home_page['titleof_the_fifth_section'];?></h3>
                <?php }?>

                <ul class="items slick-slider-2">
                    <?php if (isset($items_of_the_fifth_section) && !empty($items_of_the_fifth_section)): ?>
                    <?php $counter = 1;?>
                        <?php foreach ($items_of_the_fifth_section as $block): ?>
                            <li class="item">
                                <a href="<?php echo $block['link'];?>">
                                    <span class="wrap-img">
                                        <img src="<?php echo $block['image'];?>" alt="">
                                    </span>
                                            <span class="wrap-title order-<?php echo $counter;?>">
                                        <span class="title"><?php echo $block['title'];?></span>
                                    </span>
                                    <span class="description"><?php echo $block['description'];?></span>
                                </a>
                            </li>
                        <?php $counter ++;?>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </ul>

            </div>
        </div>

        <div class="sixth-section">
            <div class="main-holder">
                <ul class="items slick-slider-3">
                    <?php if (isset($items_of_the_sixt_sectopn) && !empty($items_of_the_sixt_sectopn)): ?>
                        <?php foreach ($items_of_the_sixt_sectopn as $block): ?>
                            <li class="item">
                                <span class="wrap-list">
                                    <span class="image" style="background-image: url(<?php echo $block['image'];?>)"></span>
                                    <span class="wrap-title">
                                        <a href="<?php echo $block['link'];?>">
                                            <span class="title"><?php echo $block['title'];?></span>
                                        </a>

                                    </span>
                                    <span class="description"><?php echo $block['description'];?></span>
                                    <a href="<?php echo $block['link'];?>" class="button"><?php echo $block['button'];?></a>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <div class="wrap-button">
<!--                    <a href="--><?php //echo get_home_url();?><!--/בלוג/" class="button">למגזין המלא</a>-->
<!--                    <a href="--><?php //echo get_home_url();?><!--/בלוג/" class="button">--><?php //esc_html_e( 'For the full magazine', 'podium' ); ?><!--</a>-->
                    <?php if($home_page['button_of_the_sixt_section'] != null){ ?>
                        <a href="<?php echo $home_page['button_link_of_the_sixt_section'];?>" class="button"><?php echo $home_page['button_of_the_sixt_section'];?></a>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="seventh-section">
<!--            <div class="background-holder"></div>-->
            <div class="main-holder">
                <div class="wrap-insta">
                    <?php if($home_page['link_of_instagram'] != null){ ?>
                        <a href="<?php echo $home_page['link_of_instagram'];?>" target="_blank" class="insta"><i class="fab fa-instagram"></i></a>
                    <?php }?>
                </div>
<!--                <h3>עקבו אחרנו</h3>-->
<!--                <h3>--><?php //esc_html_e( 'Follow us', 'podium' ); ?><!--</h3>-->
                <?php if($home_page['title_of_the_instagram_section'] != null){ ?>
                    <h3><?php echo $home_page['title_of_the_instagram_section'];?></h3>
                <?php }?>
                <?php dynamic_sidebar( 'instagram-1' ); ?>


            </div>
        </div>

    </div>


<script>

</script>


<?php get_footer(); ?>