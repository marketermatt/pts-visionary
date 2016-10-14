<?php
/**
 * @package WordPress
 * @copyright Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved.
 * @license GPL/GNU* @subpackage visionary
 */

// Allows Shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

// Check for widgets in widget-ready areas http://wordpress.org/support/topic/190184?replies=7#post-808787
// Thanks to Chaos Kaizer http://blog.kaizeku.com/

function is_sidebar_active($index = 1)
{
    $sidebars = wp_get_sidebars_widgets();
    $key = (string)'sidebar-' . $index;
    return (isset($sidebars[$key]));
}

// Blog Left Column
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Blog Left Column', // The sidebar name to register
        'description' => __('Left column at 210 pixels wide for blog related pages', 'visionary'),
        'before_widget' => '<div class="widgetwrap">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
// Blog Inset Column
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Blog Inset Column', // The sidebar name to register
        'description' => __('Blog inset column at 210 pixels wide for blog related pages', 'visionary'),
        'before_widget' => '<div class="widgetwrap">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
// Blog Right Column
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Blog Right Column', // The sidebar name to register
        'description' => __('Right Column at 280 pixels wide for blog related pages', 'visionary'),
        'before_widget' => '<div class="widgetwrap">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
// Page Left Column	
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Page Left Column', // The sidebar name to register
        'description' => __('Left column at 210 pixels wide for all standard pages', 'visionary'),
        'before_widget' => '<div class="widgetwrap">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
// Page Right Column
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Page Right Column', // The sidebar name to register
        'description' => __('Right Column at 280 pixels wide for all standard pages', 'visionary'),
        'before_widget' => '<div class="widgetwrap">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
// Showcase
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Showcase Widget',
        'description' => __('This is a Showcase widget area for you to use for full width images, media, or even your own slideshows throughout your web site. For this, use the Custom No Title Widget.', 'visionary'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
// Top Widget
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Top Widget', // The sidebar name to register
        'description' => __('Use the Pixel Text Widget for this area below the main content with shortcodes to create 1, 2, 3, or 4 columns.', 'visionary'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<span class="none">',
        'after_title' => '</span>',
    ));

// Bottom Widgets with dynamic auto width adjustments. Special thanks to www.shibashake.com for this widget plugin
    $bottomwidgets_sidebar = register_sidebar(array('name' => 'Bottom Widgets',
        'description' => __('This puts 1, 2, 3, or 4 widgets side-by-side in the bottom area of your page above the footer and will automatically resize based on how many widgets are published.', 'visionary'),
        'before_widget' => '<div class="four"><div class="widgetwrap">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    $sidebars_widgets = wp_get_sidebars_widgets();
    $num_bottomwidgets_widgets = count($sidebars_widgets[$bottomwidgets_sidebar]);
}
function bottomwidgets_style()
{
    global $num_bottomwidgets_widgets;
    ?>
    <style type="text/css">
        #bottomwidgets div.four {
        <?php
            switch ($num_bottomwidgets_widgets) {
            case 1:
                echo "width: 100%;";

                break;
            case 2:
                echo "width: 460px;";
                break;
            case 3:
                echo "width: 294px;";
                echo "margin-left: 39px;";
                break;
            default:
                echo "width: 210px;";

                break;
            }
         ?>
        }
    </style>
<?php
}

add_action('wp_head', 'bottomwidgets_style');


// Pixel Theme Studio custom Text Widget based on the default WP widget - allows no title without breaking the themes custom widget styling and has shortcode support
add_action('widgets_init', 'pixel_text_widget');

function pixel_text_widget()
{
    register_widget('pixel_text_widget');
}

class pixel_text_widget extends WP_Widget
{

    function pixel_text_widget()
    {
        $widget_ops = array('classname' => 'pixel_text_widget', 'description' => __('Custom text widget that has a wider field to enter content and also supports shortcode. Best for doing multiple column shortcodes.', 'visionary'));
        $control_ops = array('width' => 950, 'height' => 350);

        $this->WP_Widget('pixel_text_widget', __('Pixel Text Widget', 'visionary'), $widget_ops, $control_ops);
    }

    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
        $text = apply_filters('widget_text', $instance['text'], $instance);

// my custom setting to show or not show title
        echo $before_widget;
        if (!empty($title)) { // if no title then remove title but keep custom widget structure

            echo $before_title; // otherwise show title
            echo $title;
            echo $after_title;

        } else {
            echo $before_title . $title . $after_title;
        }

        if (!empty($text)) { // if no text then show nothing
            apply_filters('widget_text', $instance['text']);
            echo $instance['filter'] ? wpautop($text) : $text;
        }

        echo $after_widget;
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        if (current_user_can('unfiltered_html'))
            $instance['text'] = $new_instance['text'];
        else
            $instance['text'] = stripslashes(wp_filter_post_kses(addslashes($new_instance['text']))); // wp_filter_post_kses() expects slashed
        $instance['filter'] = isset($new_instance['filter']);
        return $instance;
    }

    function form($instance)
    {
        $instance = wp_parse_args((array)$instance, array('title' => '', 'text' => ''));
        $title = strip_tags($instance['title']);
        $text = format_to_edit($instance['text']);
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','visionary'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/></p>

        <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>"
                  name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

        <p><input id="<?php echo $this->get_field_id('filter'); ?>"
                  name="<?php echo $this->get_field_name('filter'); ?>"
                  type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label
                for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs', 'visionary'); ?></label>
        </p>
    <?php
    }
}

// Special thanks to brassblogs.com for their Better Text Widget
add_action('widgets_init', 'showcase_widget');

function showcase_widget()
{
    register_widget('showcase_widget');
}

class showcase_widget extends WP_Widget
{

    function showcase_widget()
    {
        $widget_ops = array('classname' => 'showcase_widget', 'description' => __('For displaying showcase images with the feature to choose to show a widget title on the front or just the admin side. Special thanks to brassblogs.com for this widget.', 'visionary'));

        $control_ops = array('width' => 500, 'height' => 350, 'id_base' => 'easier-widget');

        $this->WP_Widget('easier-widget', __('Showcase Widget', 'visionary'), $widget_ops, $control_ops);
    }

    function widget($args, $instance)
    {
        global $post;
        extract($args);

        $title = apply_filters('widget_title', $instance['title']);
        $title2 = apply_filters('widget_title2', $instance['title2']);
        $image = $instance['image'];
        $link = $instance['link'];
        $link_text = $instance['link_text'];
        $id = $instance['id'];
        $text = $instance['text'];

        echo $before_widget;
// This is the original widget title field
// if (!empty($link) && empty($image) && empty($link_text)) {
//echo $before_title . '<a style="font-size:1.1em;" href="' . $link . '">';

// if (!empty($title))
// echo $before_title . $title . $after_title;

// echo '</a>' . $after_title;
// } else {
// echo $before_title . $title . $after_title;
// }

// This will put in the title that shows on the frontend
        if (!empty($link) && empty($image) && empty($link_text)) {
            echo $before_title . '<a href="' . $link . '">';

            if (!empty($title2))
                echo $title2;

            echo '</a>' . $after_title;
        } else {
            echo $before_title . $title2 . $after_title;
        }

        if (!empty($image))
            $img = '<img src="' . $image . '" alt="' . $link_text . '" />';

        if (!empty($link)) {
            echo '<a href="' . $link . '">';

            if (!empty($image))
                echo $img;
            else if (!empty($link_text))
                echo $link_text;

            echo '</a>';
        } else if (!empty($image)) {
            echo $img;
        }

        if (!empty($text)) {
            apply_filters('widget_text', $instance['text']);
            echo $instance['filter'] ? wpautop($text) : $text;
        }

        echo $after_widget;
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['title2'] = strip_tags($new_instance['title2']);
        $instance['image'] = strip_tags($new_instance['image']);
        $instance['link'] = strip_tags($new_instance['link']);
        $instance['link_text'] = strip_tags($new_instance['link_text']);
        $instance['id'] = strip_tags($new_instance['id']);
//$instance['$text'] = stripslashes($new_instance['text']);
        if (current_user_can('unfiltered_html'))
            $instance['text'] = $new_instance['text'];
        else
            $instance['text'] = wp_filter_post_kses($new_instance['text']);
        $instance['filter'] = isset($new_instance['filter']);
        return $instance;
    }

    function form($instance)
    {
        $defaults = array('title' => '',
            'title2' => '',
            'image' => '',
            'link' => '',
            'link_text' => '',
            'id' => '',
            'text' => ''
        );
        $instance = wp_parse_args((array)$instance, $defaults); ?>

        <p><label
                for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title for the admin side only', 'visionary'); ?></label>
            <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>"
                   value="<?php echo $instance['title']; ?>" style="width:100%;"/>
        </p>

        <p><label
                for="<?php echo $this->get_field_id('title2'); ?>"><?php _e('Title for the front of your site - leave blank for no title', 'visionary'); ?></label>
            <input id="<?php echo $this->get_field_id('title2'); ?>"
                   name="<?php echo $this->get_field_name('title2'); ?>" value="<?php echo $instance['title2']; ?>"
                   style="width:100%;"/>
        </p>

        <p><label
                for="<?php echo $this->get_field_id('image'); ?>"><?php _e('Full path to image', 'visionary'); ?></label>
            <input id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>"
                   value="<?php echo $instance['image']; ?>" style="width:100%;"/>
        </p>

        <p><label
                for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Full URL to link image or text to:', 'visionary'); ?></label>
            <input id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>"
                   value="<?php echo $instance['link']; ?>" style="width:100%;"/>
        </p>

        <p><label
                for="<?php echo $this->get_field_id('link_text'); ?>"><?php _e('ALT text for the image):', 'visionary'); ?></label>
            <input id="<?php echo $this->get_field_id('link_text'); ?>"
                   name="<?php echo $this->get_field_name('link_text'); ?>"
                   value="<?php echo $instance['link_text']; ?>" style="width:100%;"/>
        </p>

        <p><label
                for="<?php echo $this->get_field_id('text'); ?>"><?php _e('If you want to use this for a special text widget with content, enter in text you would like to display. HTML is allowed but Shortcodes is not compatible in this one.', 'visionary'); ?></label>
            <textarea class="widefat" rows="7" cols="20" id="<?php echo $this->get_field_id('text'); ?>"
                      name="<?php echo $this->get_field_name('text'); ?>"><?php echo $instance['text']; ?></textarea>
        </p>

        <p><input id="<?php echo $this->get_field_id('filter'); ?>"
                  name="<?php echo $this->get_field_name('filter'); ?>"
                  type="checkbox" <?php checked($instance['filter']); ?> /> <label
                for="<<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs.', 'visionary'); ?></label>
        </p>

    <?php
    }
}

?>