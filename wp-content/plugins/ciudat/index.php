<?php
/*
    Plugin Name: CocoPlugin
    Plugin URI:  http://www.pc-info.ro
    Description: Plugin-ul meu de test :)
    Author:      Carmen Popescu
    Author URI:  http://www.pc-info.ro
*/

add_shortcode('afisare_text','kwp_afisare_text');
add_filter('the_content','kwp_facebook_like');
add_filter('the_title','kwp_change_title');

function kwp_afisare_text(){
    echo 'Ana are multe mere';    
}

function kwp_facebook_like($content){
    echo $content;
    echo '<br/><center><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Flegofun2016%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></center>';
}

function kwp_change_title($title){
    echo $title . ':)';
}