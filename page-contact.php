<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: Contact
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>

<div class="main-holder">
    <div class="cloud">
        <span><?php the_title(); ?></span>
    </div>
    <div class="content wrap-align">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="content-half-block contact-text">
            <?php if(get_field('desc')){
                the_field('desc');
            }?>
        </div>

        <div class="content-half-block">
            <div class="wrap-for-left-form" id="thailand_form">
                <div class="title-form">
                    <h3>כתבו אלינו על כל דבר וענין בקשר לתאילנד</h3>
                </div>
                <form action="" method="post">
                    <div class="wrap-two-col-form">
                        <div class="form-half-block">
                            <input type="text"	name="user_name" id="user_name" placeholder="שם" required/>
                            <input type="email"	name="user_email" id="user_email" placeholder="אימייל" required/>
                            <div class="input-date">
                                <show-orange><i class="fas fa-sort-down"></i></show-orange>
                                <show-white></show-white>
                                <input type="date" id="arrive_dt" name="arrive_date">
                            </div>
                        </div>
                        <div class="form-half-block">
                            <input type="text" name="user_phone" id="user_phone" placeholder="טלפון" required/>
                            <input type="number" min="1" name="num_passengers" placeholder="מספר נוסעים" id="num_passengers"/>
                            <div class="input-date">
                                <show-orange><i class="fas fa-sort-down"></i></show-orange>
                                <show-white></show-white>
                                <input type="date" id="leave_dt" name="leave_date">
                            </div>
                        </div>
                    </div>
                    <textarea name="user_comments" id="user_comments" rows="3" placeholder="פרטים נוספים (גילאי הילדים, מסלול מועדף ועוד)"></textarea>
                    <input type="hidden" name="action" value="sidebar_form"/>
                    <input type="hidden" name="contact_page_form" id="contact_page_form" value="yes"/>
                    <input type="hidden" name="ttl" id="ttl" value="<?php the_title();?>"/>
                    <input type="hidden" name="url" value="<?php the_permalink();?>"/>
                    <?php
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }?>
                    <input type="hidden" name="user_ip" id="user_ip" value="<?php echo $ip; ?>"/>
                    <button class="button-for-left-form" type="submit">שלח<i class="fas fa-chevron-left"></i></button>
                </form>
            </div>

            <div class="contact-item-grey">
                <ul>
                    <?php if(get_field('address')){ ?>
                    <li>
                        <div class="icon-img-contacts"></div>
                        <div class="icon-contacts"><?php echo get_field('address');?></div>
                    </li>
                    <?php }?>
                    <?php if(get_field('phone_num')){ ?>
                        <li>
                            <div class="icon-img-contacts"></div>
                            <div class="icon-contacts"><a href="tel:<?php echo get_field('phone_num');?>"><?php echo get_field('phone_num');?></a></div>
                        </li>
                    <?php }?>
                    <?php if(get_field('email')){ ?>
                        <li>
                            <div class="icon-img-contacts"></div>
                            <div class="icon-contacts"><a href="mailto:<?php echo get_field('email');?>">כתבו לנו</a></div>
                        </li>
                    <?php }?>
                </ul>
            </div>

        </div>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
