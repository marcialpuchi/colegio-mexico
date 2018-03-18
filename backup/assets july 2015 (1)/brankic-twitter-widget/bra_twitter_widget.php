<?php
/*
Plugin Name: Brankic Twitter Widget 
Plugin URI: http://www.brankic1979.com
Description: Showing tweets from the user (with new Twitter API)
Author: Brankic1979
Version: 2.1
Author URI: http://www.brankic1979.com/
 */
class BraTwitterWidget extends WP_Widget
{
    function BraTwitterWidget() {
        $widget_options = array(
        'classname'        =>        'bra-twitter-widget',
        'description'     =>        'Showing tweets of the user. New Twitter API v1.1'
        );
        
        parent::WP_Widget('bra_twitter_widget', 'Brankic Twitter Widget', $widget_options);
    }
    
    function widget( $args, $instance ) {
        extract ( $args, EXTR_SKIP );
        $title = ( $instance['title'] ) ? $instance['title'] : 'Latest tweets';
        $username = ( $instance['username'] ) ? $instance['username'] : 'Brankic1979';
        $no_tweets = ( $instance['no_tweets'] ) ? $instance['no_tweets'] : '3';
        
        $consumerkey = ( $instance['consumerkey'] ) ? $instance['consumerkey'] : '';
        $consumersecret = ( $instance['consumersecret'] ) ? $instance['consumersecret'] : '';
        $accesstoken = ( $instance['accesstoken'] ) ? $instance['accesstoken'] : '';
        $accesstokensecret = ( $instance['accesstokensecret'] ) ? $instance['accesstokensecret'] : '';
        
        $unique_id =  $username . $no_tweets . $title ;
        $unique_id = preg_replace("/[^A-Za-z0-9]/", '', $unique_id);
        $root = plugin_dir_url( __FILE__ );
        echo $before_widget;
        echo $before_title . $title . $after_title;
        wp_enqueue_style("bra_twitter", $root."bra_twitter_widget.css");
        require("twitter.php");
        ?>
        <div class="tweets" id="<?php echo $unique_id; ?>">
        <?php bra_tweets($username, $no_tweets, $consumerkey, $consumersecret, $accesstoken, $accesstokensecret); ?>
        </div><!--END tweets-->    
        <?php 
        echo $after_widget;
    }
    
    function form( $instance ) {
        if (!isset($instance['title'])) $instance['title'] = "";
        if (!isset($instance['username'])) $instance['username'] = ""; 
        if (!isset($instance['no_tweets'])) $instance['no_tweets'] = ""; 
        
        if (!isset($instance['consumerkey'])) $instance['consumerkey'] = "";
        if (!isset($instance['consumersecret'])) $instance['consumersecret'] = "";
        if (!isset($instance['accesstoken'])) $instance['accesstoken'] = "";
        if (!isset($instance['accesstokensecret'])) $instance['accesstokensecret'] = "";

        ?>
        <p>
        <label for="<?php echo $this->get_field_id('title'); ?>">
        Title: 
        <input id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>"
                value="<?php echo esc_attr( $instance['title'] ); ?>"
                class="widefat"/>
        </label>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('username'); ?>">
        Twitter username: 
        <input id="<?php echo $this->get_field_id('username'); ?>"
                name="<?php echo $this->get_field_name('username'); ?>"
                value="<?php echo esc_attr( $instance['username'] ); ?>" 
                class="widefat"/>
        </label>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('no_tweets'); ?>">
        Number of tweets to show: 
        <input id="<?php echo $this->get_field_id('no_tweets'); ?>"
                name="<?php echo $this->get_field_name('no_tweets'); ?>"
                value="<?php echo esc_attr( $instance['no_tweets'] ); ?>" 
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('consumerkey'); ?>">
        Consumer Key: 
        <input id="<?php echo $this->get_field_id('consumerkey'); ?>"
                name="<?php echo $this->get_field_name('consumerkey'); ?>"
                value="<?php echo esc_attr( $instance['consumerkey'] ); ?>" 
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('consumersecret'); ?>">
        Consumer Secret: 
        <input id="<?php echo $this->get_field_id('consumersecret'); ?>"
                name="<?php echo $this->get_field_name('consumersecret'); ?>"
                value="<?php echo esc_attr( $instance['consumersecret'] ); ?>" 
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('accesstoken'); ?>">
        Access Token: 
        <input id="<?php echo $this->get_field_id('accesstoken'); ?>"
                name="<?php echo $this->get_field_name('accesstoken'); ?>"
                value="<?php echo esc_attr( $instance['accesstoken'] ); ?>" 
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('accesstokensecret'); ?>">
        Access Token Secret: 
        <input id="<?php echo $this->get_field_id('accesstokensecret'); ?>"
                name="<?php echo $this->get_field_name('accesstokensecret'); ?>"
                value="<?php echo esc_attr( $instance['accesstokensecret'] ); ?>" 
                class="widefat"/>
        </label>
        </p>
        <?php 
    }
    
}
    
function bra_twitter_widget_init() {
    register_widget("BraTwitterWidget");
}
add_action('widgets_init','bra_twitter_widget_init');