<?php
/*===================================================================================================================
=============================================== General Settings ====================================================
=================================================================================================================== */
$options1 = array(array());
$options1[] = array("label" => __("Site Loader Settings",'starbella'),
    "title" => __("Site Loader Settings",'starbella'),
    "type" => "Title-1");
$options1[] = array("id" => "tmpmela_show_site_loader",
    "label" => __("Show Site Loader",'starbella'),
    "type" => "select",
    "description" => __("Displays Site Loader.",'starbella'),
    "options" => array('no' => 'No','yes' => 'Yes'));
$options1[] = array("label" => __("General Settings",'starbella'),
    "title" => __("General Settings",'starbella'),
    "type" => "Title-1");
$options1[] = array("id" => "tmpmela_logo_image",
    "label" => "Logo Image",
    "type" => "upload",
    "description" => "Upload Your Logo.");
$options1[] = array("id" => "tmpmela_logo_image_alt",
    "label" => "Logo Image Alt",
    "type" => "textbox",
    "description" => "Set your logo alternate text here.");
$options1[] = array("id" => "tmpmela_mob_logo_image",
    "label" => "Mobile Logo Image",
    "type" => "upload-6",
    "description" => "Upload Your Mobile Logo.");
$options1[] = array("id" => "tmpmela_mob_logo_image_alt",
    "label" => "Mobile Logo Image Alt",
    "type" => "textbox",
    "description" => "Set your Mobile logo alternate text here.");
$options1[] = array("id" => "tmpmela_showsite_description",
    "label" => "Show Site Description?",
    "type" => "select",
    "description" => "Display Site Description or Not.",
    "options" => array('no' => 'No', 'yes' => 'Yes'));
$options1[] = array("id" => "tmpmela_contact_email",
    "label" => "Contact Email",
    "type" => "textbox",
    "description" => "Email ID where to receive contact emails.");
$options1[] = array("label" => "Background Settings",
    "title" => "Background Settings",
    "type" => "Title-1");
$options1[] = array("id" => "tmpmela_background_upload",
    "label" => "Upload Background Image",
    "type" => "upload-3",
    "description" => "Upload Your Background.");
$options1[] = array("id" => "tmpmela_back_repeat",
    "label" => "Background Repeat",
    "type" => "select",
    "description" => "Choose Background repeate.",
    "options" => array('no-repeat' => 'no-repeat', 'repeat' => 'repeat', 'repeat-x' => 'repeat-x', 'repeat-y' => 'repeat-y'));
$options1[] = array("id" => "tmpmela_back_position",
    "label" => " Background Position",
    "type" => "select",
    "description" => "Choose Backgroung position.",
    "options" => array('top+left' => 'top left', 'top+center' => 'top center', 'top+right' => 'top right', 'center+right' => 'center right', 'center+left' => 'center left', 'center+center' => 'center center', 'bottom+right' => 'bottom right', 'bottom+center' => 'bottom center', 'bottom+left' => 'bottom left'));
$options1[] = array("id" => "tmpmela_back_attachment",
    "label" => "Background Attachment",
    "type" => "select",
    "description" => "Choose Background attachment.",
    "options" => array('scroll' => 'Scroll', 'Fixed' => 'fixed'));
$options1[] = array("id" => "tmpmela_bkg_color",
    "label" => "Body Background Color",
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => "Change your body background color.");
$options1[] = array("id" => "tmpmela_bodyfont_color",
    "label" => "Body Font Color",
    "std" => "000000",
    "type" => "textbox-1",
    "description" => "Change your body font color.");
$options1[] = array("id" => "tmpmela_bodyfont",
    "label" => "Body Font",
    "type" => "select",
    "description" => "Change your body font.",
    "options" => array('Roboto' => 'Roboto', 'please-select' => 'please-select', 'Poppins' => 'Poppins', 'Raleway' => 'Raleway', 'Nunito' => 'Nunito', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Droid+Sans' => 'Droid Sans', 'Oswald' => 'Oswald', 'Play' => 'Play', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Roboto' => 'Roboto', 'Other+Fonts' => 'Other Fonts'));
$options1[] = array("id" => "tmpmela_bodyfont_other",
    "label" => "Specified Other Body Font",
    "type" => "textbox",
    "description" => "Change your specified body font Like Arail,verdana etc.");
$options1[] = array("label" => "Button Settings",
    "title" => "Button Settings",
    "type" => "Title-1");
$options1[] = array("id" => "tmpmela_button_font_family",
    "label" => "Button  Font",
    "type" => "select",
    "description" => "Change your button font.",
    "options" => array('Roboto' => 'Roboto', 'please-select' => 'please-select', 'Poppins' => 'Poppins', 'Raleway' => 'Raleway', 'Nunito' => 'Nunito', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Droid+Sans' => 'Droid Sans', 'Oswald' => 'Oswald', 'Play' => 'Play', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Roboto' => 'Roboto', 'Other+Fonts' => 'Other Fonts'));
$options1[] = array("id" => "tmpmela_button_bkg_color",
    "label" => "Button Background Color",
    "type" => "textbox-1",
    "std" => "2fad4a",
    "description" => "Change your button Background color.");
$options1[] = array("id" => "tmpmela_button_text_color",
    "label" => "Buttons Text Color",
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => "Change your buttons text color.");
$options1[] = array("id" => "tmpmela_buttonhover_bkg_color",
    "label" => "Button Background hover Color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "Change your button hover Background color.");
$options1[] = array("id" => "tmpmela_button_hover_text_color",
    "label" => "Buttons hover Text Color",
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => "Change your buttons hover text color.");
/*===================================================================================================================
=============================================== Header Settings ====================================================
=================================================================================================================== */
$options2 = array(array());
$options2[] = array("id" => "tmpmela_header_background_upload",
    "label" => "Upload Header Background Image",
    "type" => "upload-1",
    "description" => "Upload Your Header Background Image.");
$options2[] = array("id" => "tmpmela_header_back_repeat",
    "label" => "Header Image Background Repeat",
    "type" => "select",
    "description" => "Choose Header Image Background repeate.",
    "options" => array('no-repeat' => 'no-repeat', 'repeat' => 'repeat', 'repeat-x' => 'repeat-x', 'repeat-y' => 'repeat-y'));
$options2[] = array("id" => "tmpmela_header_back_position",
    "label" => "Header Image Background Position",
    "type" => "select",
    "description" => "Choose Header Image Backgroung position.",
    "options" => array('top+left' => 'top left', 'top+center' => 'top center', 'top+right' => 'top right', 'center+right' => 'center right', 'center+left' => 'center left', 'center+center' => 'center center', 'bottom+right' => 'bottom right', 'bottom+center' => 'bottom center', 'bottom+left' => 'bottom left'));
$options2[] = array("id" => "tmpmela_header_back_attachment",
    "label" => "Header Image Background Attachment",
    "type" => "select",
    "description" => "Choose Header Image Background attachment.",
    "options" => array('scroll' => 'Scroll', 'Fixed' => 'fixed'));
$options2[] = array("id" => "tmpmela_header_bkg_color",
    "label" => "Header Background Color",
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => "Change your header background color. ");
$options2[] = array("id" => "tmpmela_header_bkg_opacity",
    "label" => "Header Background Opacity",
    "type" => "textbox",
    "std" => "1",
    "description" => "Change your header background opacity e.g. ( 0.0 to 1 )");
$options2[] = array("label" => "Navigation Menu Setting",
    "title" => "Navigation Menu Setting",
    "type" => "Title-1");
$options2[] = array("id" => "tmpmela_menu_text_color",
    "label" => "Menu text color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "Change your text color of top menu");
$options2[] = array("id" => "tmpmela_menu_texthover_color",
    "label" => "Menu text hover color",
    "type" => "textbox-1",
    "std" => "2fad4a",
    "description" => "Change your text hover color of top menu");
/*===================================================================================================================
=============================================== Content Settings ====================================================
=================================================================================================================== */
$options3[] = array("id" => "tmpmela_h1font",
    "label" => "H1 Font",
    "type" => "select",
    "description" => "Change your H1 font.",
    "options" => array('Roboto' => 'Roboto', 'please-select' => 'please-select', 'Poppins' => 'Poppins', 'Raleway' => 'Raleway', 'Nunito' => 'Nunito', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Droid+Sans' => 'Droid Sans', 'Oswald' => 'Oswald', 'Play' => 'Play', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Roboto' => 'Roboto', 'Other+Fonts' => 'Other Fonts'));
$options3[] = array("id" => "tmpmela_h1font_other",
    "label" => "Specified Other H1 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H1 font.");
$options3[] = array("id" => "tmpmela_h1color",
    "label" => "H1 Color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "Change your H1 font color.");
$options3[] = array("id" => "tmpmela_h2font",
    "label" => "H2 Font",
    "type" => "select",
    "description" => "Change your H2 Font.",
    "options" => array('Roboto' => 'Roboto', 'please-select' => 'please-select', 'Poppins' => 'Poppins', 'Raleway' => 'Raleway', 'Nunito' => 'Nunito', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Droid+Sans' => 'Droid Sans', 'Oswald' => 'Oswald', 'Play' => 'Play', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Roboto' => 'Roboto', 'Other+Fonts' => 'Other Fonts'));
$options3[] = array("id" => "tmpmela_h2font_other",
    "label" => "Specified Other H2 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H2 font.");
$options3[] = array("id" => "tmpmela_h2color",
    "label" => "H2 Color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "Change your H2 font color.");
$options3[] = array("id" => "tmpmela_h3font",
    "label" => "H3 Font",
    "type" => "select",
    "description" => "Change your H3 font.",
    "options" => array('Roboto' => 'Roboto', 'please-select' => 'please-select', 'Poppins' => 'Poppins', 'Raleway' => 'Raleway', 'Nunito' => 'Nunito', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Droid+Sans' => 'Droid Sans', 'Oswald' => 'Oswald', 'Play' => 'Play', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Roboto' => 'Roboto', 'Other+Fonts' => 'Other Fonts'));
$options3[] = array("id" => "tmpmela_h3font_other",
    "label" => "Specified Other H3 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H3 font.");
$options3[] = array("id" => "tmpmela_h3color",
    "label" => "H3 Color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "Change your H3 font color.");
$options3[] = array("id" => "tmpmela_h4font",
    "label" => "H4 Font",
    "type" => "select",
    "description" => "Change your H4 font.",
    "options" => array('Roboto' => 'Roboto', 'please-select' => 'please-select', 'Poppins' => 'Poppins', 'Raleway' => 'Raleway', 'Nunito' => 'Nunito', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Droid+Sans' => 'Droid Sans', 'Oswald' => 'Oswald', 'Play' => 'Play', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Roboto' => 'Roboto', 'Other+Fonts' => 'Other Fonts'));
$options3[] = array("id" => "tmpmela_h4font_other",
    "label" => "Specified Other H4 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H4 font.");
$options3[] = array("id" => "tmpmela_h4color",
    "label" => "H4 Color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "Change your H4 font color.");
$options3[] = array("id" => "tmpmela_h5font",
    "label" => "H5 Font",
    "type" => "select",
    "description" => "Change your H5 font.",
    "options" => array('Roboto' => 'Roboto', 'please-select' => 'please-select', 'Poppins' => 'Poppins', 'Raleway' => 'Raleway', 'Nunito' => 'Nunito', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Droid+Sans' => 'Droid Sans', 'Oswald' => 'Oswald', 'Play' => 'Play', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Roboto' => 'Roboto', 'Other+Fonts' => 'Other Fonts'));
$options3[] = array("id" => "tmpmela_h5font_other",
    "label" => "Specified Other H5 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H5 font.");
$options3[] = array("id" => "tmpmela_h5color",
    "label" => "H5 Color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "change your H5 font color.");
$options3[] = array("id" => "tmpmela_h6font",
    "label" => "H6 Font",
    "type" => "select",
    "description" => "Change your H6 font.",
    "options" => array('Roboto' => 'Roboto', 'please-select' => 'please-select', 'Poppins' => 'Poppins', 'Raleway' => 'Raleway', 'Nunito' => 'Nunito', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Droid+Sans' => 'Droid Sans', 'Oswald' => 'Oswald', 'Play' => 'Play', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Roboto' => 'Roboto', 'Other+Fonts' => 'Other Fonts'));
$options3[] = array("id" => "tmpmela_h6font_other",
    "label" => "Specified Other H6 Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified H6 font.");
$options3[] = array("id" => "tmpmela_h6color",
    "label" => "H6 Color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "Change your H6 font color.");
$options3[] = array("id" => "tmpmela_link_color",
    "label" => "Link Color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "Change your link color.");
$options3[] = array("id" => "tmpmela_hoverlink_color",
    "label" => "Link Hover Color",
    "type" => "textbox-1",
    "std" => "2FAD4A",
    "description" => "Change your link Hover color.");
/*===================================================================================================================
=============================================== Sidebar Settings ====================================================
=================================================================================================================== */
$options8 = array(array());
$options8[] = array("id" => "tmpmela_sidebar_text_color",
    "label" => "Sidebar Text Color",
    "type" => "textbox",
    "std" => "838383",
    "description" => "Change Your Sidebar Banner Text Color. ");
$options8[] = array("id" => "tmpmela_sidebar_text_hover_color",
    "label" => "Sidebar Text Hover Color",
    "type" => "textbox",
    "std" => "838383",
    "description" => "Change Your Sidebar Banner Text hover Color. ");
$options8[] = array("label" => "Sidebar setting for other pages",
    "title" => "Sidebar setting for other pages",
    "type" => "Title-1");
$options8[] = array("id" => "tmpmela_page_sidebar",
    "label" => "Display sidebar on other page?",
    "type" => "select",
    "description" => "Enable or Disable sidebar on other page. ",
    "options" => array('yes' => 'Yes', 'no' => 'No'));
/*===================================================================================================================
=============================================== Footer Settings ====================================================
=================================================================================================================== */
$options4 = array(array());
$options4[] = array("id" => "tmpmela_footer_bkg_color",
    "label" => "Footer Background Color",
    "type" => "textbox-1",
    "std" => "FFFFFF",
    "description" => "Change your footer background color. ");
$options4[] = array("id" => "tmpmela_footer_background_upload",
    "label" => "Upload Footer  Background Image",
    "type" => "upload-1",
    "description" => "Upload Your Footer Background Image.");
$options4[] = array("id" => "tmpmela_footer_back_repeat",
    "label" => "Footer Image  Background Repeat",
    "type" => "select",
    "description" => "Choose Header Image Background repeate.",
    "options" => array('no-repeat' => 'no-repeat', 'repeat' => 'repeat', 'repeat-x' => 'repeat-x', 'repeat-y' => 'repeat-y'));
$options4[] = array("id" => "tmpmela_footer_back_position",
    "label" => "Footer Image  Background Position",
    "type" => "select",
    "description" => "Choose Header Image Backgroung position.",
    "options" => array('top+left' => 'top left', 'top+center' => 'top center', 'top+right' => 'top right', 'center+right' => 'center right', 'center+left' => 'center left', 'center+center' => 'center center', 'bottom+right' => 'bottom right', 'bottom+center' => 'bottom center', 'bottom+left' => 'bottom left'));
$options4[] = array("id" => "tmpmela_footerheader_back_attachment",
    "label" => "Footer Image  Background Attachment",
    "type" => "select",
    "description" => "Choose Header Image Background attachment.",
    "options" => array('scroll' => 'Scroll', 'Fixed' => 'fixed'));
$options4[] = array("id" => "tmpmela_footerlink_color",
    "label" => "Footer Link Color",
    "type" => "textbox-1",
    "std" => "000000",
    "description" => "Change your footer link color.");
$options4[] = array("id" => "tmpmela_footerhoverlink_color",
    "label" => "Footer Link Hover Color",
    "type" => "textbox-1",
    "std" => "2FAD4A",
    "description" => "Change your footer link hover color.");
$options4[] = array("id" => "tmpmela_footerfont",
    "label" => "Footer Font Family",
    "type" => "select",
    "description" => "Change your Footer font.",
    "options" => array('Roboto' => 'Roboto', 'please-select' => 'please-select', 'Poppins' => 'Poppins', 'Poppins' => 'Poppins', 'Raleway' => 'Raleway', 'Nunito' => 'Nunito', 'Antic' => 'Antic', 'Bitter' => 'Bitter', 'Droid+Serif' => 'Droid Serif', 'Philosopher' => 'Philosopher', 'Oxygen' => 'Oxygen', 'Rokkitt' => 'Rokkitt', 'Galdeano' => 'Galdeano', 'Droid+Sans' => 'Droid Sans', 'Oswald' => 'Oswald', 'Play' => 'Play', 'Cabin' => 'Cabin', 'Cuprum' => 'Cuprum', 'Varela' => 'Varela', 'Andika' => 'Andika', 'Ubuntu' => 'Ubuntu', 'Roboto' => 'Roboto', 'Other+Fonts' => 'Other Fonts'));
$options4[] = array("id" => "tmpmela_footerfont_other",
    "label" => "Specified Other Footer Font",
    "type" => "textbox-3",
    "std" => "Arial",
    "description" => "Change your specified Footer font.");
$options4[] = array("id" => "tmpmela_footer_slog",
    "label" => "Footer copyright",
    "type" => "textbox",
    "description" => "Enter your copyright statement here.",
    "std" => "Templatemela.");
//=============================================== Shop Settings ==================================================================
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) :
    $options7 = array(array());
    $options7[] = array("label" => "Product setting",
        "title" => "Product setting",
        "type" => "Title-1");
    $options7[] = array("id" => "tmpmela_related_items",
        "label" => "Related Products",
        "type" => "textbox",
        "std" => "12",
        "description" => "Dispaly total number of Related products on single product page");
    $options7[] = array("id" => "tmpmela_upsells_items",
        "label" => "Upsell Products",
        "type" => "textbox",
        "std" => "12",
        "description" => "Dispaly total number of Upsell products on single product page");
    $options7[] = array("id" => "tmpmela_crosssell_items",
        "label" => "Cross Sell Products",
        "type" => "textbox",
        "std" => "12",
        "description" => "Dispaly total number of Cross sell products on checkout page");
    $options7[] = array("label" => "Sidebar setting for Single product page",
        "title" => "Sidebar setting for Single product page",
        "type" => "Title-1");
    $options7[] = array("id" => "tmpmela_secondaryimage",
        "label" => "Do you want secondary image on product?",
        "type" => "select",
        "description" => "Enable or Disable secondary image for product.",
        "options" => array('yes' => 'Yes', 'no' => 'No'));
    $options7[] = array("id" => "tmpmela_shop_sidebar",
        "label" => "Display sidebar on Single product page?",
        "type" => "select",
        "description" => "Enable or Disable  sidebar on Single product page.",
        "options" => array('no' => 'No', 'yes' => 'Yes'));
endif;
?>
<!-- =========================================== Call Font Script =========================================== -->
<div class="main-block">
    <div id="wpbody-content">
        <div class="wrap">
            <div class="icon-templatemela">
                <img src="<?php echo esc_url(get_option('siteurl')) . '/wp-content/themes/' . get_option('template') . '/templatemela/logo.png'; ?>"/>
            </div>
            <div class="tmpmela_contents">
                <div class="entry-content">
                    <p><a target="_Self" href="#"
                          title="<?php esc_attr_e('Templatemela', 'starbella'); ?>">TemplateMela</a> <br/>
                    <h3>Extremely Customizable, Responsive and fluid theme framework </h3>
                    Make your site shine in few minutes by choosing from any of our high-quality premium WordPress
                    themes.<br/>
                    With our hundreds of WordPress themes to choose from, you'll have a stylishly professional site
                    that's sure to impress.
                    </p>
                </div>
            </div>
            <div id="ajax-response"></div>
        </div>
    </div>
    <h2 class="title-themeset">TemplateMela - Theme Settings</h2>
    <?php global $result;
    if ($result == 'success')
        echo '<div class="updated settings-error" id="setting-error-settings_updated"><p><strong>Settings saved.</strong></p></div>';
    ?>
    <div class="tab_main">
        <!-- =========================================== Start Tab =============================================== -->
        <div id="tab-container" class='tab-container'>
            <ul class='etabs'>
                <li class="tab first">
                    <a href="#General" title="<?php esc_attr_e('General Settings', 'starbella'); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/general_setting.png"
                                alt="<?php echo esc_attr_e('general', 'starbella'); ?>"/>
                        <span class="title">
                            <?php echo esc_attr_e('General', 'starbella'); ?>
                        </span>
                    </a>
                </li>
                <li class="tab header">
                    <a href="#Header">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/header_setting.png"
                                alt="<?php echo esc_attr_e('header', 'starbella'); ?>"/>
                        <span class="title">
                            <?php echo esc_attr_e('Header', 'starbella'); ?>
                        </span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#Content">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/content_settings.png"
                                alt="<?php echo esc_attr_e('content', 'starbella'); ?>"/>
                        <span class="title">
                            <?php echo esc_attr_e('Content', 'starbella'); ?>
                        </span>
                    </a>
                </li>
                <li class="tab sidebar">
                    <a href="#Sidebar">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/sidebar_setting.jpg"
                             alt="<?php echo esc_attr_e('sidebar', 'starbella'); ?>"/>
                        <span class="title">
                            <?php echo esc_attr_e('Sidebar', 'starbella'); ?>
                        </span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#Footer">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/footer_settings.png"
                                alt="<?php esc_attr_e('footer', 'starbella'); ?>"/>
                        <span class="title">
                            <?php echo esc_attr_e('Footer', 'starbella'); ?>
                        </span>
                    </a>
                </li>
                <?php if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) : ?>
                    <li class="tab">
                        <a href="#product">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/product_setting.png"
                                    alt="<?php echo esc_attr_e('product', 'starbella'); ?>"/>
                            <span class="title">
                                <?php echo esc_attr_e('Product', 'starbella'); ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
            <!-- Start Panel-container -->
            <div class='panel-container'>
                <!-- =========================================== Start General Setting =========================================== -->
                <div id="General">
                    <form enctype="multipart/form-data" method="post" id="settingForm1" name="settingForm1">
                        <input type="hidden" name="action" value="save_options1"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset1'])) {
                            $_REQUEST['reset1'] = '';
                        }
                        if ('save_options1' == $_REQUEST['action']) {
                            foreach ($options1 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset1' == $_REQUEST['reset1']) {
                            foreach ($options1 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <?php
                            $i = 0;
                            foreach ($options1
                            as $value) {
                            if (!isset($value['type'])) {
                                $value['type'] = '';
                            }
                            switch ($value['type']) {
                            case 'textbox': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                               id="<?php echo esc_attr($value['id']); ?>" type="text"
                                               value="<?php if (get_option($value['id']) != "") {
                                                   echo esc_attr(stripslashes(get_option($value['id'])));
                                               } else {
                                                   if (!isset($value['std'])) {
                                                       $value['std'] = '';
                                                   }
                                                   echo esc_attr(stripslashes($value['std']));
                                               } ?>"/>
                                        <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                    </div>
                                </div>
                                <!--odd-even-->
                                <?php
                                break;
                                case 'upload': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                            <br/>
                                            <br/>
                                            <?php if (get_option('tmpmela_logo_image') != '') { ?>
                                                <img src="<?php echo esc_url(get_option('tmpmela_logo_image')); ?>" id="slider_logodisplay"/>&nbsp;
                                                <a id="slider_remove_link1" href="javascript:tmpmela_removeImage1();">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png"/>
                                                </a>
                                            <?php } ?>
                                            <script>
                                                function tmpmela_removeImage1() {
                                                    document.getElementById("tmpmela_logo_image").value = "";
                                                    document.getElementById("slider_logodisplay").src = "";
                                                    document.getElementById("slider_remove_link1").innerHTML = "";
                                                }
                                            </script>
                                        </div>
                                        <div class="content">
                                            <input style=" <?php if ($value['id'] != 'tmpmela_logo_image') {
                                                echo 'display:none';
                                            } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                   value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                            <input id="upload_image_button" class="button-primary" type="button"
                                                   value="Upload Logo"/>
                                            <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                        </div>
                                    </div>
                                    <!--even odd setting-->
                                    <?php break;
                                    case 'upload-6': ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                <br/>
                                                <br/>
                                                <?php if (get_option('tmpmela_mob_logo_image') != '') { ?>
                                                    <img src="<?php echo esc_url(get_option('tmpmela_mob_logo_image')); ?>" id="slider_mob_logodisplay"/>&nbsp;
                                                    <a id="slider_remove_mob_link" href="javascript:tmpmela_removemobImage();">
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png"/>
                                                    </a>
                                                <?php } ?>
                                                <script>
                                                    function tmpmela_removemobImage() {
                                                        document.getElementById("tmpmela_mob_logo_image").value = "";
                                                        document.getElementById("slider_mob_logodisplay").src = "";
                                                        document.getElementById("slider_remove_mob_link").innerHTML = "";
                                                    }
                                                </script>
                                            </div>
                                            <div class="content">
                                                <input style=" <?php if ($value['id'] != 'tmpmela_mob_logo_image') {
                                                    echo 'display:none';
                                                } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                       id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                       value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                <input id="upload_image_button" class="button-primary" type="button"
                                                       value="Upload Logo"/>
                                                <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                            </div>
                                        </div>
                                            <!--even odd setting-->
                                            <?php break;
                                            case 'select': ?>
                                            <?php if ($i % 2 != 0) { ?>
                                            <div class="odd setting_main">
                                                <?php } else { ?>
                                                <div class="even setting_main">
                                                    <?php } ?>
                                                    <div class="title">
                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                    </div>
                                                    <div class="content">
                                                        <select class="select_input"
                                                                name="<?php echo esc_attr($value['id']); ?>"
                                                                id="<?php echo esc_attr($value['id']); ?>">
                                                            <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                                <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                                    echo ' selected="selected"';
                                                                } ?>><?php echo esc_attr($suboption); ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                                    </div>
                                                </div>
                                                <!--even-Odd-->
                                                <?php break; //end Switch
                                                case 'textbox-1': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                <div class="odd setting_main">
                                                    <?php } else { ?>
                                                    <div class="even setting_main">
                                                        <?php } ?>
                                                        <div class="title">
                                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                        </div>
                                                        <div class="content">
                                                            <?php if (get_option($value['id']) != "") {
                                                                $stylecolor = stripslashes(get_option($value['id']));
                                                            } else {
                                                                $stylecolor = stripslashes($value['std']);
                                                            }
                                                            $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                                            <input class="regular-text1"
                                                                   name="<?php echo esc_attr($value['id']); ?>"
                                                                   id="<?php echo esc_attr($value['id']); ?>"
                                                                   type="text"
                                                                   value="<?php if (get_option($value['id']) != "") {
                                                                       echo esc_attr(stripslashes(get_option($value['id'])));
                                                                   } else {
                                                                       echo esc_attr(stripslashes($value['std']));
                                                                   } ?>" <?php echo wp_kses_post($stylecolor); ?> />
                                                            <span class="description">
                                                                <?php echo esc_attr($value['description']);
                                                                echo esc_attr(get_option($value['id'])); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--odd-even-->
                                                    <?php break;
                                                    case 'upload-3': ?>
                                                    <?php if ($i % 2 != 0) { ?>
                                                    <div class="odd setting_main">
                                                        <?php } else { ?>
                                                        <div class="even setting_main">
                                                            <?php } ?>
                                                            <div class="title">
                                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                                <br/>
                                                                <br/>
                                                                <?php if (get_option('tmpmela_background_upload') != '') { ?>
                                                                    <img src="<?php echo esc_url(get_option('tmpmela_background_upload')); ?>" id="slider_backgrounddisplay"/>&nbsp;
                                                                    <a id="slider_remove_link3" href="javascript:tmpmela_removeImage3();">
                                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png"/>
                                                                    </a>
                                                                <?php } ?>
                                                                <script>
                                                                    function tmpmela_removeImage3() {
                                                                        document.getElementById("tmpmela_background_upload").value = "";
                                                                        document.getElementById("slider_backgrounddisplay").src = "";
                                                                        document.getElementById("slider_remove_link3").innerHTML = "";
                                                                    }
                                                                </script>
                                                            </div>
                                                            <div class="content">
                                                                <input style=" <?php if ($value['id'] != 'tmpmela_background_upload') {
                                                                    echo 'display:none';
                                                                } ?> " class="regular-text"
                                                                       name="<?php echo esc_attr($value['id']); ?>"
                                                                       id="<?php echo esc_attr($value['id']); ?>"
                                                                       type="text"
                                                                       value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                                <input id="upload_backgroundimage_button"
                                                                       class="button-primary" type="button"
                                                                       value="Upload Image"/>
                                                                <span class="description"><?php echo esc_attr($value['description']); ?></span><br/>
                                                            </div>
                                                        </div>
                                                        <!--even odd setting-->
                                                        <?php break;
                                                        case 'texture':
                                                        ?>
                                                        <?php if ($i % 2 != 0) { ?>
                                                        <div class="odd setting_main">
                                                            <?php } else { ?>
                                                            <div class="even setting_main">
                                                                <?php }
                                                                $img_dir = get_template_directory_uri() . '/images/megnor/colorpicker/pattern/';
                                                                ?>
                                                                <div class="title">
                                                                    <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                                </div>
                                                                <div class="content">
                                                                    <div class="tmpmela_content">
                                                                        <div class="thumb-sel">
                                                                            <img class="thumb"
                                                                                 src="<?php if (get_option($value['id']) != "") {
                                                                                            echo esc_url($img_dir . get_option($value['id']));
                                                                                        } else {
                                                                                            echo esc_url($img_dir . $value['std']);
                                                                                        } ?>"/>
                                                                            <span id="switch" class="close"></span>
                                                                        </div>
                                                                        <div class="thumb-list">
                                                                            <ul>
                                                                                <?php foreach ($value['options'] as $opt_key => $opt_val) {
                                                                                    if (get_option($value['id']) != "") {
                                                                                        if ($opt_key == get_option($value['id'])) {
                                                                                            $checked = "checked=\"checked\"";
                                                                                        } else {
                                                                                            $checked = "";
                                                                                        }
                                                                                    } else {
                                                                                        if ($opt_key == ($value['std'])) {
                                                                                            $checked = "checked=\"checked\"";
                                                                                        } else {
                                                                                            $checked = "";
                                                                                        }
                                                                                    } ?>
                                                                                    <li>
                                                                                        <input type="radio" name="<?php echo esc_attr($value['id']); ?>"
                                                                                               value="<?php echo esc_attr($opt_key); ?>" <?php echo esc_attr($checked); ?>/>
                                                                                        <img class="thumb" src="<?php echo esc_url($img_dir . $opt_key); ?>"
                                                                                             title="<?php echo esc_attr($opt_val); ?>"/>
                                                                                    </li>
                                                                                <?php } ?>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                                                </div>
                                                            </div>
                                                            <?php break;
                                                            case 'Title-1':
                                                                if (!isset($value['id'])) {
                                                                    $value['id'] = '';
                                                                }
                                                                ?>
                                                                <div class="background-title">
                                                                    <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                                </div>
                                                                <?php break;
                                                            }
                                                            $i++;
                                                            } ?>
                                                        </div>
                                                        <!--from-table-->
                                                        <div class="submit">
                                                            <input type="submit" value="Save Changes" class="button-primary" name="Submit">
                                                        </div>
                    </form>
                    <!--mainform-->
                    <!-- reset Button -->
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm1" name="settingFormx">
                            <p class="submit">
                                <input type="hidden" name="reset1" value="reset1"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- End Reset Button -->
                </div>
                <!--general-setting-->
                <div style="clear:both"></div>
                <!-- =========================================== End General Settings =========================================== -->
                <!-- =========================================== Start Shop Settings =========================================== -->
                <?php if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) : ?>
                    <div id="product">
                        <form enctype="multipart/form-data" method="post" id="settingForm7" name="settingForm7">
                            <input type="hidden" name="action" value="save_options7"/>
                            <?php
                            if (!isset($_REQUEST['action'])) {
                                $_REQUEST['action'] = '';
                            }
                            if (!isset($_REQUEST['reset7'])) {
                                $_REQUEST['reset7'] = '';
                            }
                            if ('save_options7' == $_REQUEST['action']) {
                                foreach ($options7 as $value) {
                                    if (!isset($value['id'])) {
                                        $value['id'] = '';
                                    }
                                    if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                        update_option($value['id'], $_REQUEST[$value['id']]);
                                    }
                                }
                            } else if ('reset7' == $_REQUEST['reset7']) {
                                foreach ($options7 as $value) {
                                    if (!isset($value['id'])) {
                                        $value['id'] = '';
                                    }
                                    delete_option($value['id']);
                                }
                            }
                            ?>
                            <div class="form-table">
                                <?php
                                foreach ($options7
                                as $value) {
                                if (!isset($value['type'])) {
                                    $value['type'] = '';
                                }
                                switch ($value['type']) {
                                case 'textbox': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                        </div>
                                        <div class="content">
                                            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                   value="<?php if (get_option($value['id']) != "") {
                                                       echo esc_attr(stripslashes(get_option($value['id'])));
                                                   } else {
                                                       echo esc_attr(stripslashes($value['std']));
                                                   } ?>"/>
                                            <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                        </div>
                                    </div>
                                    <!--odd-even-->
                                    <?php break;
                                    case 'select': ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                                <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
                                                    <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                        <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                            echo ' selected="selected"';
                                                        } ?>><?php echo esc_attr($suboption); ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                            </div>
                                        </div>
                                        <!--even-Odd-->
                                        <?php break; //end Switch
                                        case 'Title-1':
                                            if (!isset($value['id'])) {
                                                $value['id'] = '';
                                            }
                                            ?>
                                            <div class="background-title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                            </div>
                                            <?php break;
                                        case 'radio':
                                            ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                            </div>
                                            <div class="content cont-layout">
                                                <?php
                                                foreach ($value['options'] as $key => $option) {
                                                    if (get_option($value['id']) != "") {
                                                        if ($key == get_option($value['id'])) {
                                                            $checked = "checked=\"checked\"";
                                                        } else {
                                                            $checked = "";
                                                        }
                                                    } else {
                                                        if ($key == ($value['std'])) {
                                                            $checked = "checked=\"checked\"";
                                                        } else {
                                                            $checked = "";
                                                        }
                                                    } ?>
                                                    <div class="cont-layout-option">
                                                        <input type="radio" name="<?php echo esc_attr($value['id']); ?>"
                                                               value="<?php echo esc_attr($key); ?>" <?php echo esc_attr($checked); ?> />
                                                        <br/>
                                                        <?php if ($key == '1') { ?>
                                                            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header1.png' ?>"
                                                                 alt="<?php echo esc_attr_e('header1', 'starbella'); ?>"/>
                                                        <?php } ?>
                                                        <?php if ($key == '2') { ?>
                                                            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header2.png' ?>"
                                                                 alt="<?php echo esc_attr_e('header2', 'starbella'); ?>"/>
                                                        <?php } ?>
                                                        <?php if ($key == '3') { ?>
                                                            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header3.png' ?>"
                                                                 alt="<?php echo esc_attr_e('header3', 'starbella'); ?>"/>
                                                        <?php } ?>
                                                        <?php if ($key == '4') { ?>
                                                            <img src="<?php echo esc_attr(get_template_directory_uri()) . '/images/megnor/admin/header4.png' ?>"
                                                                 alt="<?php echo esc_attr_e('header4', 'starbella'); ?>"/>
                                                        <?php } ?>
                                                        <br/>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <?php break;
                                        }
                                        $i++;
                                        }
                                        ?>
                                    </div>
                                    <!--form-table-->
                                    <div class="submit">
                                        <input type="submit" value="Save Changes" class="button-primary" name="Submit">
                                    </div>
                        </form>
                        <!-- reset Button -->
                        <div class="reset-option">
                            <form enctype="multipart/form-data" method="post" id="settingForm7" name="settingFormx">
                                <p class="submit">
                                    <input type="hidden" name="reset7" value="reset7"/>
                                    <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                                </p>
                            </form>
                        </div>
                        <!-- End Reset Button -->
                    </div>
                <?php endif; ?>
                <!-- =========================================== End Shop Settings =========================================== -->
                <!-- =========================================== Start Header Settings =========================================== -->
                <div id="Header">
                    <form enctype="multipart/form-data" method="post" id="settingForm2" name="settingForm2">
                        <input type="hidden" name="action" value="save_options2"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset2'])) {
                            $_REQUEST['reset2'] = '';
                        }
                        if ('save_options2' == $_REQUEST['action']) {
                            foreach ($options2 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset2' == $_REQUEST['reset2']) {
                            foreach ($options2 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <div class="background-title">
                                <label>
                                    <?php echo esc_attr_e('Header Settings', 'starbella'); ?>
                                </label>
                            </div>
                            <?php
                            foreach ($options2
                            as $value) {
                            if (!isset($value['type'])) {
                                $value['type'] = '';
                            }
                            switch ($value['type']) {
                            case 'select': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
                                            <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                    echo ' selected="selected"';
                                                } ?>><?php echo esc_attr($suboption); ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                    </div>
                                </div>
                                <!--even-Odd-->
                                <?php break; //end Switch
                                case 'textbox-3': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                        </div>
                                        <div class="content">
                                            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                   value="<?php if (get_option($value['id']) != "") {
                                                       echo esc_attr(stripslashes(get_option($value['id'])));
                                                   } else {
                                                       echo esc_attr(stripslashes($value['std']));
                                                   } ?>"/>
                                            <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                        </div>
                                    </div>
                                    <!--odd-even-->
                                    <?php
                                    break;
                                    case 'textbox': ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                                <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                       id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                       value="<?php if (get_option($value['id']) != "") {
                                                           echo esc_attr(stripslashes(get_option($value['id'])));
                                                       } else {
                                                           echo esc_attr(stripslashes($value['std']));
                                                       } ?>"/>
                                                <span class="description">
                                                    <?php echo esc_attr($value['description']);
                                                    echo esc_attr(get_option($value['id'])); ?>
                                                </span>
                                            </div>
                                        </div>
                                        <?php
                                        break;
                                        case 'textbox-1': ?>
                                        <?php if ($i % 2 != 0) { ?>
                                        <div class="odd setting_main">
                                            <?php } else { ?>
                                            <div class="even setting_main">
                                                <?php } ?>
                                                <div class="title">
                                                    <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                </div>
                                                <div class="content">
                                                    <?php if (get_option($value['id']) != "") {
                                                        $stylecolor = stripslashes(get_option($value['id']));
                                                    } else {
                                                        $stylecolor = stripslashes($value['std']);
                                                    }
                                                    $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                                    <input class="regular-text1"
                                                           name="<?php echo esc_attr($value['id']); ?>"
                                                           id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                           value="<?php if (get_option($value['id']) != "") {
                                                               echo stripslashes(get_option($value['id']));
                                                           } else {
                                                               echo stripslashes($value['std']);
                                                           } ?>" <?php echo wp_kses_post($stylecolor); ?> />
                                                    <span class="description">
                                                        <?php echo esc_attr($value['description']);
                                                        echo esc_attr(get_option($value['id'])); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--odd-even-->
                                            <?php
                                            break;
                                            case 'texture':
                                            ?>
                                            <?php if ($i % 2 != 0) { ?>
                                            <div class="odd setting_main">
                                                <?php } else { ?>
                                                <div class="even setting_main">
                                                    <?php }
                                                    $img_dir = get_template_directory_uri() . '/templatemela/images/';
                                                    ?>
                                                    <div class="title">
                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                    </div>
                                                    <div class="content">
                                                        <div class="tmpmela_content">
                                                            <div class="thumb-sel">
                                                                <img class="thumb"
                                                                    src="<?php if (get_option($value['id']) != "") {
                                                                        echo esc_url($img_dir . get_option($value['id']));
                                                                    } else {
                                                                        echo esc_url($img_dir . $value['std']);
                                                                    } ?>"/>
                                                                <span id="switch" class="close"></span>
                                                            </div>
                                                            <div class="thumb-list">
                                                                <ul>
                                                                    <?php foreach ($value['options'] as $opt_key => $opt_val) {
                                                                        if (get_option($value['id']) != "") {
                                                                            if ($opt_key == get_option($value['id'])) {
                                                                                $checked = "checked=\"checked\"";
                                                                            } else {
                                                                                $checked = "";
                                                                            }
                                                                        } else {
                                                                            if ($opt_key == ($value['std'])) {
                                                                                $checked = "checked=\"checked\"";
                                                                            } else {
                                                                                $checked = "";
                                                                            }
                                                                        } ?>
                                                                        <li>
                                                                            <input type="radio"
                                                                                   name="<?php echo esc_attr($value['id']) ?>"
                                                                                   value="<?php echo esc_attr($opt_key); ?>" <?php echo esc_attr($checked); ?>/>
                                                                            <img class="thumb"
                                                                                 src="<?php echo esc_url($img_dir . $opt_key); ?>"
                                                                                 title="<?php echo esc_attr($opt_val); ?>"/>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                                    </div>
                                                </div>
                                                <?php
                                                break;
                                                case 'upload': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                <div class="odd setting_main">
                                                    <?php } else { ?>
                                                    <div class="even setting_main">
                                                        <?php } ?>
                                                        <div class="title">
                                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                        </div>
                                                        <div class="content">
                                                            <input style=" <?php if ($value['id'] != 'tmpmela_background_upload') {
                                                                echo 'display:none';
                                                            } ?> " class="regular-text"
                                                                   name="<?php echo esc_attr($value['id']); ?>"
                                                                   id="<?php echo esc_attr($value['id']); ?>"
                                                                   type="text"
                                                                   value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                            <input id="upload_image_button1" class="button-primary" type="button" value="Upload Image"/>
                                                            <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                                        </div>
                                                    </div>
                                                    <!--even odd setting-->
                                                    <?php break;
                                                    case 'upload-1': ?>
                                                    <?php if ($i % 2 != 0) { ?>
                                                    <div class="odd setting_main">
                                                        <?php } else { ?>
                                                        <div class="even setting_main">
                                                            <?php } ?>
                                                            <div class="title">
                                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                                <br/>
                                                                <br/>
                                                                <?php if (get_option('tmpmela_header_background_upload') != '') { ?>
                                                                    <img src="<?php echo esc_url(get_option('tmpmela_header_background_upload')); ?>" id="slider_backgrounddisplay1" class="thumb"/>&nbsp;
                                                                    <a id="slider_remove_link31" href="javascript:tmpmela_removeImage31();">
                                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png"/>
                                                                    </a>
                                                                <?php } ?>
                                                                <script>
                                                                    function tmpmela_removeImage31() {
                                                                        document.getElementById("tmpmela_header_background_upload").value = "";
                                                                        document.getElementById("slider_backgrounddisplay1").src = "";
                                                                        document.getElementById("slider_remove_link31").innerHTML = "";
                                                                    }
                                                                </script>
                                                            </div>
                                                            <div class="content">
                                                                <input style=" <?php if ($value['id'] != 'tmpmela_header_background_upload') {
                                                                    echo 'display:none';
                                                                } ?> " class="regular-text"
                                                                       name="<?php echo esc_attr($value['id']); ?>"
                                                                       id="<?php echo esc_attr($value['id']); ?>"
                                                                       type="text"
                                                                       value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                                <input id="upload_backgroundimage_button"
                                                                       class="button-primary" type="button"
                                                                       value="Upload Image"/>
                                                                <span class="description"><?php echo esc_attr($value['description']); ?></span><br/>
                                                            </div>
                                                        </div>
                                                        <!--even odd setting-->
                                                        <?php break;
                                                        case 'Title-1':
                                                            if (!isset($value['id'])) {
                                                                $value['id'] = '';
                                                            }
                                                            ?>
                                                            <div class="background-title">
                                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                            </div>
                                                            <?php break;
                                                        case 'radio':
                                                            ?>
                                                            <div class="title">
                                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                            </div>
                                                            <div class="content cont-layout">
                                                                <?php
                                                                foreach ($value['options'] as $key => $option) {
                                                                    if (get_option($value['id']) != "") {
                                                                        if ($key == get_option($value['id'])) {
                                                                            $checked = "checked=\"checked\"";
                                                                        } else {
                                                                            $checked = "";
                                                                        }
                                                                    } else {
                                                                        if ($key == ($value['std'])) {
                                                                            $checked = "checked=\"checked\"";
                                                                        } else {
                                                                            $checked = "";
                                                                        }
                                                                    } ?>
                                                                    <div class="cont-layout-option">
                                                                        <input type="radio" name="<?php echo esc_attr($value['id']); ?>"
                                                                               value="<?php echo esc_attr($key); ?>" <?php echo esc_attr($checked); ?> />
                                                                        <br/>
                                                                        <?php if ($key == '1') { ?>
                                                                            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header1.png' ?>"
                                                                                 alt="<?php echo esc_html_e('header1', 'starbella'); ?>"/>
                                                                        <?php } ?>
                                                                        <?php if ($key == '2') { ?>
                                                                            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header2.png' ?>"
                                                                                 alt="<?php echo esc_html_e('header2', 'starbella'); ?>"/>
                                                                        <?php } ?>
                                                                        <?php if ($key == '3') { ?>
                                                                            <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header3.png' ?>"
                                                                                 alt="<?php echo esc_html_e('header3', 'starbella'); ?>"/>
                                                                        <?php } ?>
                                                                        <?php if ($key == '4') { ?>
                                                                            <img src="<?php echo esc_attr(get_template_directory_uri()) . '/images/megnor/admin/header4.png' ?>"
                                                                                 alt="<?php echo esc_html_e('header4', 'starbella'); ?>"/>
                                                                        <?php } ?>
                                                                        <br/>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                            <?php break;
                                                        }
                                                        $i++;
                                                        }
                                                        ?>
                                                    </div>
                                                    <!--form table-->
                                                    <div class="submit">
                                                        <input type="submit" value="Save Changes" class="button-primary"
                                                               name="Submit">
                                                    </div>
                    </form>
                    <!-- reset Button -->
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm2" name="settingFormx">
                            <p class="submit">
                                <input type="hidden" name="reset2" value="reset2"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- End Reset Button -->
                </div>
                <!---#color-->
                <script type="text/javascript">
                    function Ajax() {
                        var xmlHttp;
                        try {
                            xmlHttp = new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
                        } catch (e) {
                            try {
                                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
                            } catch (e) {
                                try {
                                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (e) {
                                    alert("No AJAX!?");
                                    return false;
                                }
                            }
                        }
                        xmlHttp.onreadystatechange = function () {
                            if (xmlHttp.readyState == 4) {
                                document.getElementById('tab_main').innerHTML = xmlHttp.responseText;
                                return false;
                            }
                        }
                        xmlHttp.send(null);
                    }
                    window.onload = function () {
                    }
                </script>
                <!-- =========================================== Start Content Settings =========================================== -->
                <div id="Content">
                    <form enctype="multipart/form-data" method="post" id="settingForm3" name="settingForm3">
                        <input type="hidden" name="action" value="save_options3"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset3'])) {
                            $_REQUEST['reset3'] = '';
                        }
                        if ('save_options3' == $_REQUEST['action']) {
                            foreach ($options3 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset3' == $_REQUEST['reset3']) {
                            foreach ($options3 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <div class="background-title">
                                <label>
                                    <?php echo esc_attr_e('Content Settings', 'starbella'); ?>
                                </label>
                            </div>
                            <?php
                            foreach ($options3
                            as $value) {
                            switch ($value['type']) {
                            case 'select':
                            ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
                                            <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                    echo ' selected="selected"';
                                                } ?>><?php echo esc_attr($suboption); ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                    </div>
                                </div>
                                <?php
                                break;
                                case 'textbox-3': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                        </div>
                                        <div class="content">
                                            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                   value="<?php if (get_option($value['id']) != "") {
                                                       echo esc_attr(stripslashes(get_option($value['id'])));
                                                   } else {
                                                       echo esc_attr(stripslashes($value['std']));
                                                   } ?>"/>
                                            <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                        </div>
                                    </div>
                                    <!--odd-even-->
                                    <?php
                                    break;
                                    case 'Title-1':
                                        if (!isset($value['id'])) {
                                            $value['id'] = '';
                                        }
                                        ?>
                                        <div class="background-title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                        </div>
                                        <?php break;
                                    case 'textbox-1': ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                            </div>
                                            <div class="content">
                                                <?php if (get_option($value['id']) != "") {
                                                    $stylecolor = stripslashes(get_option($value['id']));
                                                } else {
                                                    $stylecolor = stripslashes($value['std']);
                                                }
                                                $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                                <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                       value="<?php if (get_option($value['id']) != "") {
                                                           echo esc_attr(stripslashes(get_option($value['id'])));
                                                       } else {
                                                           echo esc_attr(stripslashes($value['std']));
                                                       } ?>" <?php echo wp_kses_post($stylecolor); ?> />
                                                <span class="description">
                                                    <?php echo esc_attr($value['description']);
                                                    echo esc_attr(get_option($value['id'])); ?>
                                                </span>
                                            </div>
                                        </div>
                                        <!--odd-even-->
                                        <?php
                                        break;
                                        case 'textbox': ?>
                                        <?php if ($i % 2 != 0) { ?>
                                        <div class="odd setting_main">
                                            <?php } else { ?>
                                            <div class="even setting_main">
                                                <?php } ?>
                                                <div class="title">
                                                    <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                </div>
                                                <div class="content">
                                                    <input class="regular-text"
                                                           name="<?php echo esc_attr($value['id']); ?>"
                                                           id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                           value="<?php if (get_option($value['id']) != "") {
                                                               echo esc_attr(stripslashes(get_option($value['id'])));
                                                           } else {
                                                               echo esc_attr(stripslashes($value['std']));
                                                           } ?>"/>
                                                    <span class="description"><?php echo esc_attr($value['description']);
                                                        echo esc_attr(get_option($value['id'])); ?></span></div>
                                            </div>
                                            <!--odd-even-->
                                            <?php
                                            break;
                                            }
                                            $i++;
                                            }
                                            ?>
                                        </div>
                                        <!--form-table-->
                                        <div class="submit">
                                            <input type="submit" value="Save Changes" class="button-primary" name="Submit">
                                        </div>
                    </form>
                    <!-- reset Button -->
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm3" name="settingFormx">
                            <p class="submit">
                                <input type="hidden" name="reset3" value="reset3"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- End Reset Button -->
                </div>
                <!--Font-->
                <!-- =========================================== Start Side bar Settings =========================================== -->
                <div id="Sidebar">
                    <form enctype="multipart/form-data" method="post" id="settingForm8" name="settingForm8">
                        <input type="hidden" name="action" value="save_options8"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset8'])) {
                            $_REQUEST['reset8'] = '';
                        }
                        if ('save_options8' == $_REQUEST['action']) {
                            foreach ($options8 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset8' == $_REQUEST['reset8']) {
                            foreach ($options8 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <div class="background-title">
                                <label>
                                    <?php echo esc_attr_e('Sidebar Settings', 'starbella'); ?>
                                </label>
                            </div>
                            <?php
                            foreach ($options8
                            as $value) {
                            if (!isset($value['type'])) {
                                $value['type'] = '';
                            }
                            switch ($value['type']) {
                            case 'select': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <select class="select_input" name="<?php echo esc_attr($value['id']); ?>"
                                                id="<?php echo esc_attr($value['id']); ?>">
                                            <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                    echo ' selected="selected"';
                                                } ?>><?php echo esc_attr($suboption); ?></option>
                                            <?php } ?>
                                        </select>
                                        <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                    </div>
                                </div>
                                <!--even-Odd-->
                                <?php break; //end Switch
                                case 'textbox': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                        </div>
                                        <div class="content">
                                            <?php if (get_option($value['id']) != "") {
                                                $stylecolor = stripslashes(get_option($value['id']));
                                            } else {
                                                $stylecolor = stripslashes($value['std']);
                                            }
                                            $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                            <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                   value="<?php if (get_option($value['id']) != "") {
                                                       echo esc_attr(stripslashes(get_option($value['id'])));
                                                   } else {
                                                       echo esc_attr(stripslashes($value['std']));
                                                   } ?>" <?php echo wp_kses_post($stylecolor); ?> />
                                            <span class="description"><?php echo esc_attr($value['description']);
                                                echo esc_attr(get_option($value['id'])); ?></span></div>
                                    </div>
                                    <!--odd-even-->
                                    <?php
                                    break;
                                    case 'Title-1':
                                        if (!isset($value['id'])) {
                                            $value['id'] = '';
                                        }
                                        ?>
                                        <div class="background-title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                        </div>
                                        <?php break;
                                    }
                                    $i++;
                                    }
                                    ?>
                                </div>
                                <!--form table-->
                                <div class="submit">
                                    <input type="submit" value="Save Changes" class="button-primary" name="Submit">
                                </div>
                    </form>
                    <!-- reset Button -->
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm8" name="settingForm8">
                            <p class="submit">
                                <input type="hidden" name="reset8" value="reset8"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- End Reset Button -->
                </div>
                <!---#color-->
                <script type="text/javascript">
                    function Ajax() {
                        var xmlHttp;
                        try {
                            xmlHttp = new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
                        } catch (e) {
                            try {
                                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
                            } catch (e) {
                                try {
                                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (e) {
                                    alert("No AJAX!?");
                                    return false;
                                }
                            }
                        }
                        xmlHttp.onreadystatechange = function () {
                            if (xmlHttp.readyState == 4) {
                                document.getElementById('tab_main').innerHTML = xmlHttp.responseText;
                                return false;
                            }
                        }
                        xmlHttp.send(null);
                    }
                    window.onload = function () {
                    }
                </script>
                <div style="clear:both"></div>
                <!-- =========================================== End Side bar Settings =========================================== -->
                <!-- =========================================== Start Footer Settings =========================================== -->
                <div id="Footer">
                    <form enctype="multipart/form-data" method="post" id="settingForm4" name="settingForm4">
                        <input type="hidden" name="action" value="save_options4"/>
                        <?php
                        if (!isset($_REQUEST['action'])) {
                            $_REQUEST['action'] = '';
                        }
                        if (!isset($_REQUEST['reset4'])) {
                            $_REQUEST['reset4'] = '';
                        }
                        if ('save_options4' == $_REQUEST['action']) {
                            foreach ($options4 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                if (isset($value['id']) && isset($_REQUEST[$value['id']])) {
                                    update_option($value['id'], $_REQUEST[$value['id']]);
                                }
                            }
                        } else if ('reset4' == $_REQUEST['reset4']) {
                            foreach ($options4 as $value) {
                                if (!isset($value['id'])) {
                                    $value['id'] = '';
                                }
                                delete_option($value['id']);
                            }
                        }
                        ?>
                        <div class="form-table">
                            <div class="background-title">
                                <label>
                                    <?php echo esc_attr_e('Footer Settings', 'starbella'); ?>
                                </label>
                            </div>
                            <?php
                            foreach ($options4
                            as $value) {
                            if (!isset($value['type'])) {
                                $value['type'] = '';
                            }
                            switch ($value['type']) {
                            case 'select': ?>
                            <?php if ($i % 2 != 0) { ?>
                            <div class="odd setting_main">
                                <?php } else { ?>
                                <div class="even setting_main">
                                    <?php } ?>
                                    <div class="title">
                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                    </div>
                                    <div class="content">
                                        <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
                                            <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                                                <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) {
                                                    echo ' selected="selected"';
                                                } ?>><?php echo esc_attr($suboption); ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                    </div>
                                </div>
                                <!--even-Odd-->
                                <?php break; //end Switch
                                case 'upload-1': ?>
                                <?php if ($i % 2 != 0) { ?>
                                <div class="odd setting_main">
                                    <?php } else { ?>
                                    <div class="even setting_main">
                                        <?php } ?>
                                        <div class="title">
                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                            <br/>
                                            <br/>
                                            <?php if (get_option('tmpmela_footer_background_upload') != '') { ?>
                                                <img src="<?php echo esc_url(get_option('tmpmela_footer_background_upload')); ?>" id="slider_backgrounddisplay1" class="thumb"/>&nbsp;
                                                <a id="slider_remove_link31" href="javascript:tmpmela_removeImage31();">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png"/>
                                                </a>
                                            <?php } ?>
                                            <script>
                                                function tmpmela_removeImage31() {
                                                    document.getElementById("tmpmela_footer_background_upload").value = "";
                                                    document.getElementById("slider_backgrounddisplay1").src = "";
                                                    document.getElementById("slider_remove_link31").innerHTML = "";
                                                }
                                            </script>
                                        </div>
                                        <div class="content">
                                            <input style=" <?php if ($value['id'] != 'tmpmela_footer_background_upload') {
                                                echo 'display:none';
                                            } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                   id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                   value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                            <input id="upload_backgroundimage_button" class="button-primary" type="button" value="Upload Image"/>
                                            <span class="description"><?php echo esc_attr($value['description']); ?></span><br/>
                                        </div>
                                    </div>
                                    <!--even odd setting-->
                                    <?php break;
                                    case 'upload-2': ?>
                                    <?php if ($i % 2 != 0) { ?>
                                    <div class="odd setting_main">
                                        <?php } else { ?>
                                        <div class="even setting_main">
                                            <?php } ?>
                                            <div class="title">
                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                <br/>
                                                <br/>
                                                <?php if (get_option('tmpmela_footerheader_background_upload') != '') { ?>
                                                    <img src="<?php echo esc_url(get_option('tmpmela_footerheader_background_upload')); ?>" id="slider_backgrounddisplay1" class="thumb"/>&nbsp;
                                                    <a id="slider_remove_link31" href="javascript:tmpmela_removeImage31();">
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png"/>
                                                    </a>
                                                <?php } ?>
                                                <script>
                                                    function tmpmela_removeImage31() {
                                                        document.getElementById("tmpmela_footerheader_background_upload").value = "";
                                                        document.getElementById("slider_backgrounddisplay1").src = "";
                                                        document.getElementById("slider_remove_link31").innerHTML = "";
                                                    }
                                                </script>
                                            </div>
                                            <div class="content">
                                                <input style=" <?php if ($value['id'] != 'tmpmela_footerheader_background_upload') {
                                                    echo 'display:none';
                                                } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                       id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                       value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                <input id="upload_backgroundimage_button" class="button-primary" type="button" value="Upload Image"/>
                                                <span class="description"><?php echo esc_attr($value['description']); ?></span><br/>
                                            </div>
                                        </div>
                                        <!--even odd setting-->
                                        <?php break;
                                        case 'textbox-3': ?>
                                        <?php if ($i % 2 != 0) { ?>
                                        <div class="odd setting_main">
                                            <?php } else { ?>
                                            <div class="even setting_main">
                                                <?php } ?>
                                                <div class="title">
                                                    <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                </div>
                                                <div class="content">
                                                    <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>"
                                                           id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                           value="<?php if (get_option($value['id']) != "") {
                                                               echo esc_attr(stripslashes(get_option($value['id'])));
                                                           } else {
                                                               echo esc_attr(stripslashes($value['std']));
                                                           } ?>"/>
                                                    <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                                </div>
                                            </div>
                                            <!--odd-even-->
                                            <?php
                                            break;
                                            case 'textbox-1': ?>
                                            <?php if ($i % 2 != 0) { ?>
                                            <div class="odd setting_main">
                                                <?php } else { ?>
                                                <div class="even setting_main">
                                                    <?php } ?>
                                                    <div class="title">
                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                    </div>
                                                    <div class="content">
                                                        <?php if (get_option($value['id']) != "") {
                                                            $stylecolor = stripslashes(get_option($value['id']));
                                                        } else {
                                                            $stylecolor = stripslashes($value['std']);
                                                        }
                                                        $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                                        <input class="regular-text1"
                                                               name="<?php echo esc_attr($value['id']); ?>"
                                                               id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                               value="<?php if (get_option($value['id']) != "") {
                                                                   echo esc_attr(stripslashes(get_option($value['id'])));
                                                               } else {
                                                                   echo esc_attr(stripslashes($value['std']));
                                                               } ?>" <?php echo wp_kses_post($stylecolor); ?> />
                                                        <span class="description">
                                                            <?php echo esc_attr($value['description']);
                                                            echo esc_attr(get_option($value['id'])); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--odd-even-->
                                                <?php
                                                break;
                                                case 'textbox-2': ?>
                                                <?php if ($i % 2 != 0) { ?>
                                                <div class="odd setting_main">
                                                    <?php } else { ?>
                                                    <div class="even setting_main">
                                                        <?php } ?>
                                                        <div class="title">
                                                            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                        </div>
                                                        <div class="content">
                                                            <?php if (get_option($value['id']) != "") {
                                                                $stylecolor = stripslashes(get_option($value['id']));
                                                            } else {
                                                                $stylecolor = stripslashes($value['std']);
                                                            }
                                                            $stylecolor = 'style="background-color:#' . $stylecolor . '"'; ?>
                                                            <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text"
                                                                   value="<?php if (get_option($value['id']) != "") {
                                                                       echo esc_attr(stripslashes(get_option($value['id'])));
                                                                   } else {
                                                                       echo esc_attr(stripslashes($value['std']));
                                                                   } ?>" <?php echo wp_kses_post($stylecolor); ?> />
                                                            <span class="description">
                                                                <?php echo esc_attr($value['description']);
                                                                echo esc_attr(get_option($value['id'])); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--odd-even-->
                                                    <?php
                                                    break;
                                                    case 'texture':
                                                    ?>
                                                    <?php if ($i % 2 != 0) { ?>
                                                    <div class="odd setting_main">
                                                        <?php } else { ?>
                                                        <div class="even setting_main">
                                                            <?php }
                                                            $img_dir = get_template_directory_uri() . '/images/megnor/admin/';
                                                            ?>
                                                            <div class="title">
                                                                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                            </div>
                                                            <div class="content">
                                                                <div class="tmpmela_content">
                                                                    <div class="thumb-sel">
                                                                        <img class="thumb"
                                                                            src="<?php if (get_option($value['id']) != "") {
                                                                                echo esc_url($img_dir . get_option($value['id']));
                                                                            } else {
                                                                                echo esc_url($img_dir . $value['std']);
                                                                            } ?>"/>
                                                                        <span id="switch" class="close"></span>
                                                                    </div>
                                                                    <div class="thumb-list">
                                                                        <ul>
                                                                            <?php foreach ($value['options'] as $opt_key => $opt_val) {
                                                                                if (get_option($value['id']) != "") {
                                                                                    if ($opt_key == get_option($value['id'])) {
                                                                                        $checked = "checked=\"checked\"";
                                                                                    } else {
                                                                                        $checked = "";
                                                                                    }
                                                                                } else {
                                                                                    if ($opt_key == ($value['std'])) {
                                                                                        $checked = "checked=\"checked\"";
                                                                                    } else {
                                                                                        $checked = "";
                                                                                    }
                                                                                } ?>
                                                                                <li>
                                                                                    <input type="radio"
                                                                                           name="<?php echo esc_attr($value['id']) ?>"
                                                                                           value="<?php echo esc_attr($opt_key) ?>" <?php echo esc_attr($checked); ?>/>
                                                                                    <img class="thumb"
                                                                                         src="<?php echo esc_url($img_dir . $opt_key) ?>"
                                                                                         title="<?php echo esc_attr($opt_val) ?>"/>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                                            </div>
                                                        </div>
                                                        <?php break;
                                                        case 'upload': ?>
                                                        <?php if ($i % 2 != 0) { ?>
                                                        <div class="odd setting_main">
                                                            <?php } else { ?>
                                                            <div class="even setting_main">
                                                                <?php } ?>
                                                                <div class="title">
                                                                    <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                                </div>
                                                                <div class="content">
                                                                    <input style=" <?php if ($value['id'] != 'tmpmela_background_upload') {
                                                                        echo 'display:none';
                                                                    } ?> " class="regular-text"
                                                                           name="<?php echo esc_attr($value['id']); ?>"
                                                                           id="<?php echo esc_attr($value['id']); ?>"
                                                                           type="text"
                                                                           value="<?php echo esc_attr(get_option($value['id'])); ?>"/>
                                                                    <input id="upload_image_button1"
                                                                           class="button-primary" type="button"
                                                                           value="Upload Image"/>
                                                                    <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                                                </div>
                                                            </div>
                                                            <!--even odd setting-->
                                                            <?php break;
                                                            case 'textbox': ?>
                                                            <?php if ($i % 2 != 0) { ?>
                                                            <div class="odd setting_main">
                                                                <?php } else { ?>
                                                                <div class="even setting_main">
                                                                    <?php } ?>
                                                                    <div class="title">
                                                                        <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
                                                                    </div>
                                                                    <div class="content">
                                                                        <input class="regular-text"
                                                                               name="<?php echo esc_attr($value['id']); ?>"
                                                                               id="<?php echo esc_attr($value['id']); ?>"
                                                                               type="text"
                                                                               value="<?php if (get_option($value['id']) != "") {
                                                                                   echo esc_attr(stripslashes(get_option($value['id'])));
                                                                               } else {
                                                                                   echo esc_attr(stripslashes($value['std']));
                                                                               } ?>"/>
                                                                        <span class="description"><?php echo esc_attr($value['description']); ?></span>
                                                                    </div>
                                                                </div>
                                                                <!--odd-even-->
                                                                <?php
                                                                break;
                                                                }
                                                                $i++;
                                                                }
                                                                ?>
                                                            </div>
                                                            <!--form table-->
                                                            <div class="submit">
                                                                <input type="submit" value="Save Changes" class="button-primary" name="Submit">
                                                            </div>
                    </form>
                    <!-- reset Button -->
                    <div class="reset-option">
                        <form enctype="multipart/form-data" method="post" id="settingForm4" name="settingFormx">
                            <p class="submit">
                                <input type="hidden" name="reset4" value="reset4"/>
                                <input type="submit" value="Set Default" class="button-primary" name="reset"/>
                            </p>
                        </form>
                    </div>
                    <!-- End Reset Button -->
                </div>
                <div id="ajax-response"></div>
                <br class="clear">
            </div>
        </div>
        <div id="ajax-response"></div>