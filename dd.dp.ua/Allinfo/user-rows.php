<?php global $rcl_user,$rcl_users_set; ?>
<div class="user-single" data-user-id="<?php echo $rcl_user->ID; ?>">
    <div class="userlist_top">
        <?php rcl_user_action(2); ?>
        <h3 class="user-name">
            <a href="<?php rcl_user_url(); ?>"><?php rcl_user_name(); ?></a>
        </h3>
    </div>
    
    <div class="userlist_cntr">
        <div class="thumb-user">
            <a title="<?php rcl_user_name(); ?>" href="<?php rcl_user_url(); ?>">
                <?php rcl_user_avatar(70); ?>
            </a>
            <?php rcl_user_rayting(); ?>
        </div>

        <div class="user-content-rcl">
            <?php rcl_user_description();
            pfm_action_get_author_info_2();?>
        </div>
        <!--<div class="u_card_bottom">
            <?php
            //pfm_add_ajax_action('get_author_info','pfm_action_get_author_info');

           // rcl_user_meta();
           // echo get_user_meta($rsl_user->ID,'Viber_number',1);
            ?>
        </div>-->
    </div>
</div>