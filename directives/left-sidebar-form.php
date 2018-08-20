<div class="left-form-wrapper">
<!--    <h3>דברו איתנו</h3>-->
    <h3><?php echo esc_html_e( 'Talk to us', 'podium' )?></h3>
    <div class="form-body-wrap" id="thailand_form">
        <form action="" method="post">
<!--            <input type="text"	name="user_name" id="user_name" placeholder="שם" required/>-->
            <input type="text"	name="user_name" id="user_name" placeholder="<?php echo esc_html_e( '*Name', 'podium' )?>" required/>
<!--            <input type="text" name="user_phone" id="user_phone" placeholder="טלפון" required/>-->
            <input type="text" name="user_phone" id="user_phone" placeholder="<?php echo esc_html_e( '*phone', 'podium' )?>" required/>
<!--            <input type="email"	name="user_email" id="user_email" placeholder="אימייל" required/>-->
            <input type="email"	name="user_email" id="user_email" placeholder="<?php echo esc_html_e( '*Email', 'podium' )?>" required/>
            <div class="input-date">
                <show-orange><i class="fas fa-sort-down"></i></show-orange>
                <show-white></show-white>
                <input type="date" id="arrive_dt" name="arrive_date">
            </div>
            <div class="input-date">
                <show-orange><i class="fas fa-sort-down"></i></show-orange>
                <show-white></show-white>
                <input type="date" id="leave_dt" name="leave_date">
            </div>
            <label>
<!--                <input type="checkbox" name="dates_unknown" value="התאריכים עוד לא ידועים לי"><i></i>-->
                <input type="checkbox" name="dates_unknown" value="<?php echo esc_html_e( 'The dates are not yet known to me', 'podium' )?>"><i></i>
<!--                <span>התאריכים עוד לא ידועים לי</span>-->
                <span><?php echo esc_html_e( 'The dates are not yet known to me', 'podium' )?></span>
            </label>
<!--            <input type="number" min="1" name="num_passengers" placeholder="מספר נוסעים" id="num_passengers"/>-->
            <input type="number" min="1" name="num_passengers" placeholder="<?php echo esc_html_e( 'Number of passengers', 'podium' )?>" id="num_passengers"/>
<!--            <textarea name="user_comments" id="user_comments" rows="3" placeholder="פרטים נוספים (גילאי הילדים, מסלול מועדף ועוד)"></textarea>-->
            <textarea name="user_comments" id="user_comments" rows="3" placeholder="<?php echo esc_html_e( 'Additional details (children\'s ages, preferred track, etc.)', 'podium' )?>"></textarea>
            <label class="req">
                <span class="show-for-sr"><?php _e( 'If you are human please skip this field', 'podium' ); ?></span>
                <input name="address" id="user_address" type="text" placeholder="<?php _e( 'If you are human please skip this field', 'podium' ); ?>">
            </label>
            <input type="hidden" name="action" value="sidebar_form"/>
            <?php if( is_archive() ){ ?>
                <input type="hidden" name="ttl" id="ttl" value="<?php echo single_cat_title( '', false );?>"/>
            <?php }else{ ?>
                <input type="hidden" name="ttl" id="ttl" value="<?php the_title();?>"/>
            <?php } ?>
            <input type="hidden" name="url" id="ttl" value="<?php the_permalink();?>"/>
            <?php
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }?>
            <input type="hidden" name="user_ip" id="user_ip" value="<?php echo $ip; ?>"/>
<!--            <button class="button-for-left-form" type="submit">שלח<i class="fas fa-chevron-left"></i></button>-->
            <button class="button-for-left-form" type="submit"><?php echo esc_html_e( 'Send', 'podium' )?><i class="fas fa-chevron-left"></i></button>
        </form>
    </div>
</div>