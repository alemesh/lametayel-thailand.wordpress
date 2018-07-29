<div class="left-form-wrapper">
    <h3>דברו איתנו</h3>
    <div class="form-body-wrap">
        <form action="" method="post">
            <input type="text"	name="user_name" id="user_name" placeholder="שם" required/>
            <input type="text" name="user_phone" id="user_phone" placeholder="טלפון" required/>
            <input type="email"	name="user_email" id="user_email" placeholder="אימייל" required/>
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
                <input type="checkbox" name="checkname"><i></i>
                <span>התאריכים עוד לא ידועים לי</span>
            </label>
            <input type="number" min="1" name="num_passengers" placeholder="מספר נוסעים" id="num_passengers"/>
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
</div>