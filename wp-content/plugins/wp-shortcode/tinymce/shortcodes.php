<?php 
$shortcodes = array(
    "button-brown" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self",
            "position" => "left"
        ),
        "label" => __("Brown Button", "wpshortcode"),
        "content" => __("Button text", "wpshortcode"),
        "description" => __("Inserts a brown button. Set target to <strong>_blank</strong> to open link in a new window.", "wpshortcode")
    ),
    "button-blue" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self",
            "position" => "left"
        ),
        "label" => __("Blue Button", "wpshortcode"),
        "content" => __("Button text", "wpshortcode") ,
        "description" => __("Inserts a blue button. Set target to <strong>_blank</strong> to open link in a new window.", "wpshortcode")
    ),
    "button-green" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self",
            "position" => "left"
        ),
        "label" => __("Green Button", "wpshortcode"),
        "content" => __("Button text", "wpshortcode") ,
        "description" => __("Inserts a green button. Set target to <strong>_blank</strong> to open link in a new window.", "wpshortcode")
    ),
    "button-yellow" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self",
            "position" => "left"
        ),
        "label" => __("Yellow Button", "wpshortcode"),
        "content" => __("Button text", "wpshortcode") ,
        "description" => __("Inserts a yellow button. Set target to <strong>_blank</strong> to open link in a new window.", "wpshortcode")
    ),
    "button-red" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self",
            "position" => "left"
        ),
        "label" => __("Red Button", "wpshortcode"),
        "content" => __("Button text", "wpshortcode") ,
        "description" => __("Inserts a red button. Set target to <strong>_blank</strong> to open link in a new window.", "wpshortcode")
    ),
    "button-white" => array(
        "self-closing" => false,
        "atts" => array(
            "url" => "#",
            "target" => "_self",
            "position" => "left"
        ),
        "label" => __("White Button", "wpshortcode"),
        "content" => __("Button text", "wpshortcode") ,
        "description" => __("Inserts a white button. Set target to <strong>_blank</strong> to open link in a new window.", "wpshortcode")
    ),
    "alert-note" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Alert Note", "wpshortcode"),
        "content" => __("Note text", "wpshortcode"),
        "description" => __("Display a note.", "wpshortcode")
    ),
    "alert-announce" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Alert Announce", "wpshortcode"),
        "content" => __("Announce text", "wpshortcode"),
        "description" => __("Display an announcement.", "wpshortcode")
    ),
    "alert-success" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Alert Success", "wpshortcode"),
        "content" => __("Success text", "wpshortcode"),
        "description" => __("Display a success message.", "wpshortcode")
    ),
    "alert-warning" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Alert Warning", "wpshortcode"),
        "content" => __("Warning text", "wpshortcode"),
        "description" => __("Display warning or error message.", "wpshortcode")
    ),
    "youtube" => array(
        "self-closing" => true,
        "atts" => array(
            "id" => "#",
            "width" => "600",
            "height" => "340",
            "position" => "left"
        ),
        "label" => __("YouTube Video", "wpshortcode"),
        "content" => "",
        "description" => __("Embed a Youtube Video", "wpshortcode")
    ),
    "vimeo" => array(
        "self-closing" => true,
        "atts" => array(
            "id" => "#",
            "width" => "600",
            "height" => "340",
            "position" => "left"
        ),
        "label" => __("Vimeo Video", "wpshortcode"),
        "content" => "",
        "description" => __("Embed a Vimeo Video.", "wpshortcode")
    ),
    "googlemap" => array(
        "self-closing" => true,
        "atts" => array(
            "address" => "Libertyville, Illinois, USA",
            "width" => "600",
            "height" => "340",
            "position" => "left"
        ),
        "label" => __("Google Map", "wpshortcode"),
        "content" => "",
        "description" => __("Embed a Google Map. Insert address or GPS location.", "wpshortcode")
    ),
    "toggle" => array(
        "self-closing" => false,
        "atts" => array(
            "title" => "Toggle Title"
        ),
        "label" => __("Toggle", "wpshortcode"),
        "content" => __("Insert Content Here", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Content will be shown after clicking on the toggle title.", "wpshortcode")
    ),
    "tabs" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Tabs", "wpshortcode"),
        "content" => __("[tab title=&quot;Tab 1 Title&quot;]Insert tab 1 content here[/tab]\n[tab title=&quot;Tab 2 Title&quot;]Insert tab 2 content here[/tab]\n[tab title=&quot;Tab 3 Title&quot;]Insert tab 3 content here[/tab]", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Display content in tabbed form.", "wpshortcode")
    ),
    "divider" => array(
        "self-closing" => true,
        "atts" => array(),
        "content" => "Divider",
        "description" => __("Simple horizontal divider.", "wpshortcode")
    ),
    "divider_top" => array(
        "self-closing" => true,
        "atts" => array(),
        "content" => "Divider with link",
        "description" => __("Divider with an anchor link to top of page.", "wpshortcode")
    ),
    "clear" => array(
        "self-closing" => true,
        "atts" => array(),
        "label" => __("Clear", "wpshortcode"),
        "content" => "",
        "description" => __("Clear shortcode can be used to clear an element of its neighbors, no floating elements are allowed on the left or the right side.", "wpshortcode")
    ),
    
    // Column Shortcodes
    
    "one_third" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Third", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "one_third_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Third (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "two_third" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Two Third", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "two_third_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Two Third (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "one_half" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Half", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "one_half_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Half (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "one_fourth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Fourth", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "one_fourth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Fourth (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "three_fourth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Three Fourth", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "three_fourth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Three Fourth (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "one_fifth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Fifth", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "one_fifth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Fifth (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "two_fifth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Two Fifth", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "two_fifth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Two Fifth (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "three_fifth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Three Fifth", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "three_fifth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Three Fifth (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "four_fifth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Four Fifth", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "four_fifth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Four Fifth (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "one_sixth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Sixth", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "one_sixth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("One Sixth (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "five_sixth" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Five Sixth", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    ),
    "five_sixth_last" => array(
        "self-closing" => false,
        "atts" => array(),
        "label" => __("Five Sixth (Last)", "wpshortcode"),
        "content" => __("Column content", "wpshortcode"),
        "content_field" => "textarea",
        "description" => __("Use column shortcodes in conjunction with their <em>(Last)</em> version, eg. <br /><strong>One Third + One Third + One Third (Last)</strong>", "wpshortcode")
    )
);
echo "<script type=\"text/javascript\">var shortcodes = ".json_encode($shortcodes).";</script>";
?>