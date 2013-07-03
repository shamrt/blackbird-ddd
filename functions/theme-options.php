<?php

add_action('init', 'ddd_options');
if (!function_exists('ddd_options')) {

    function ddd_options() {
        // VARIABLES
        $themename = wp_get_theme(STYLESHEETPATH . '/style.css');
        $themename = $themename['Name'];
        $shortname = "of";
        // Populate OptionsFramework option in array for use in theme
        global $ddd_options;
        $ddd_options = ddd_get_option('ddd_options');
        //Front page on/off
        $file_rename = array("on" => "On", "off" => "Off");
        // Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }
        // Populate OptionsFramework option in array for use in theme
        $testimonial = array("on" => "On", "off" => "Off");
        $home_page_blog = array("on" => "On", "off" => "Off");
        $sign_up_section = array("on" => "On", "off" => "Off");
        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }

        // If using image radio buttons, define a directory path
        $imagepath = get_stylesheet_directory_uri() . '/images/';

        /* ---------------------------------------------------------------------------- */
        /* General Setting */
        /* ---------------------------------------------------------------------------- */
        $options = array(
            array("name" => "General Settings",
                "type" => "heading"),

            array("name" => "Custom Logo",
                "desc" => "Choose your own logo. Optimal Size: 221px Wide by 84px Height.",
                "id" => "ddd_logo",
                "type" => "upload"),

            array("name" => "Home Page Top Right Cell Info",
                "desc" => "Enter your text for home page top right cell info.",
                "id" => "ddd_topright_cell",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Home Page Top Right Contact Info",
                "desc" => "Enter your text for home page top right contact info.",
                "id" => "ddd_topright_text",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Custom Favicon",
                "desc" => "Specify a 16px x 16px image that will represent your website's favicon.",
                "id" => "ddd_favicon",
                "type" => "upload"),
            array("name" => "Body Background Image",
                "desc" => "Select image to change your website background",
                "id" => "ddd_bodybg",
                "std" => "",
                "type" => "upload"),
            array("name" => "Front Page On/Off",
                "desc" => "Check on for enabling front page or check off for enabling blog page in front page",
                "id" => "re_nm",
                "std" => "on",
                "type" => "radio",
                "options" => $file_rename)
        );

        /* ---------------------------------------------------------------------------- */
        /* Slider Setting */
        /* ---------------------------------------------------------------------------- */
        array_push($options, 
            //Slider Setting
            array("name" => "Flexslider Settings",
                "type" => "heading")
        );

        for ($i=1; $i <= 5; $i++) { 
            array_push($options, 

                // Header
                array("name" => "Slider $i ",
                    "type" => "saperate",
                    "class" => "saperator"),

                // Slider
                array("name" => "Home Top Feature $i - Image",
                    "desc" => "Choose your image for first slider. Optimal size is 1140px wide and 468px height.",
                    "id" => "ddd_slideimage$i",
                    "std" => "",
                    "type" => "upload"),
                array("name" => "Home Top Feature $i - Heading",
                    "desc" => "Enter your text heading for first slider.",
                    "id" => "ddd_sliderheading$i",
                    "std" => "",
                    "type" => "text"),
                array("name" => "Home Top Feature $i - Link URL",
                    "desc" => "Enter your link url for first Slider section.",
                    "id" => "ddd_Sliderlink$i",
                    "std" => "",
                    "type" => "text"),
                array("name" => "Home Top Feature $i - Description",
                    "desc" => "Enter your text description for first slider.",
                    "id" => "ddd_sliderdes$i",
                    "std" => "",
                    "type" => "textarea")
            );

        }


        /* ---------------------------------------------------------------------------- */
        /* Homepage tagline
        /* ---------------------------------------------------------------------------- */
        array_push($options, 

            array("name" => "Homepage Settings",
                "type" => "heading"),

            //Homepage Main Heading 
            array("name" => "Home Page Heading",
                "desc" => "Enter your heading text for home page",
                "id" => "ddd_mainheading",
                "std" => "",
                "type" => "textarea")

        );


        /* ---------------------------------------------------------------------------- */
        /* Homepage Feature Areas */
        /* ---------------------------------------------------------------------------- */

        array_push($options, 
            
            array("name" => "Home Page Features Content",
                "type" => "saperate",
                "class" => "saperator")
        );

        for ($i=1; $i <= 3; $i++) { 
            array_push($options, 

                //***Code for Feature***//    
                array("name" => "Feature $i - Heading",
                    "desc" => "Enter your heading for this feature area",
                    "id" => "ddd_headline$i",
                    "std" => "",
                    "type" => "text"),
                array("name" => "Feature $i - Image",
                    "desc" => "Choose image for this feature. Optimal size 158px x 165px",
                    "id" => "ddd_fimg$i",
                    "std" => "",
                    "type" => "upload"),
                array("name" => "Feature $i - Body",
                    "desc" => "Enter your content for this feature area",
                    "id" => "ddd_feature$i",
                    "std" => "",
                    "type" => "textarea"),
                array("name" => "Feature $i - Link",
                    "desc" => "Enter your link for this feature area",
                    "id" => "ddd_link$i",
                    "std" => "",
                    "type" => "text")
            );

        }


        /* ---------------------------------------------------------------------------- */
        /* Social Logos */
        /* ---------------------------------------------------------------------------- */
        array_push($options, 
        
            array("name" => "Social Logos",
                "type" => "heading"),

            array("name" => "Facebook URL",
                "desc" => "Enter your Facebook URL if you have one",
                "id" => "ddd_facebook",
                "std" => "",
                "type" => "text"),
            array("name" => "Twitter URL",
                "desc" => "Enter your Twitter URL if you have one",
                "id" => "ddd_twitter",
                "std" => "",
                "type" => "text"),
            array("name" => "LinkedIn URL",
                "desc" => "Enter your LinkedIn URL if you have one",
                "id" => "ddd_linked",
                "std" => "",
                "type" => "text"),
            array("name" => "RSS Feed URL",
                "desc" => "Enter your RSS Feed URL if you have one",
                "id" => "ddd_rss",
                "std" => "",
                "type" => "text"),


            /* ---------------------------------------------------------------------------- */
            /* Styling Setting */
            /* ---------------------------------------------------------------------------- */
            array("name" => "Styling Options",
                "type" => "heading"),
            array("name" => "Custom CSS",
                "desc" => "Quickly add some Custom CSS to your theme by adding it to this block.",
                "id" => "ddd_customcss",
                "std" => "",
                "type" => "textarea")
        );

        ddd_update_option('of_template', $options);
        ddd_update_option('of_themename', $themename);
        ddd_update_option('of_shortname', $shortname);
    }

}
?>
