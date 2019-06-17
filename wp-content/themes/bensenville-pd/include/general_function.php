<?php
function inn_wrong_login() {
return 'Wrong username or password.';
}
function wpt_remove_version() {  
return '';  
}  
// Disable support for comments and trackbacks in post types
function bensenville_disable_comments_post_types_support() {
  $post_types = get_post_types();
  foreach ($post_types as $post_type) {
    if(post_type_supports($post_type, 'comments')) {
      remove_post_type_support($post_type, 'comments');
      remove_post_type_support($post_type, 'trackbacks');
    }
  }
}

// Close comments on the front-end
function bensenville_disable_comments_status() {
  return false;
}

// Hide existing comments
function bensenville_disable_comments_hide_existing_comments($comments) {
  $comments = array();
  return $comments;
}

// Remove comments page in menu
function bensenville_disable_comments_admin_menu() {
  remove_menu_page('edit-comments.php');
}

// Redirect any user trying to access comments page
function bensenville_disable_comments_admin_menu_redirect() {
  global $pagenow;
  if ($pagenow === 'edit-comments.php') {
    wp_redirect(admin_url()); exit;
  }
}

// Remove comments metabox from dashboard
function bensenville_disable_comments_dashboard() {
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}

// Remove comments links from admin bar
function bensenville_disable_comments_admin_bar() {
  if (is_admin_bar_showing()) {
    remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
  }
}

//Remove Draft Code
function remove_draft_archive_link($options, $field, $the_post) {
$options['post_status'] = array('publish');
return $options;
}


function blog_limitText($string,$limit){
  if(!empty($string)) {
    if (strlen(strip_tags(html_entity_decode($string))) > $limit) {
      $stringCut = substr($string, 0, $limit);
      $string = substr($stringCut, 0, strrpos($stringCut, ' ')) ; 
    }
    return $string;
  }else {
    return false; 
  }
}

function add_featured_image_instruction($content) {
global $post;
$post_type = get_post_type();
if($post_type == 'tribe_events'){
$content .= '<p><b>Recommended 400 * 300 Pixel</b></p>';
}else if($post_type == "page" && get_page_template_slug() != 'tp-home.php' && get_page_template_slug() != 'tp-waterpark.php'){
$content .= '<p><b>Recommended 1920 * 307 pixel</b></p>';
}
return $content;
}

function cc_mime_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}

function isMobile(){
return preg_match("/(android|iphone|\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}