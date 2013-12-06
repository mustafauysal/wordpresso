<?php
// 4sq map gorsel linkleri arasindaki x degerinin oldugu gibi kalmasi icin
// tesekkurler @aligundogdu

add_filter("the_title","unhtmlentities");

function unhtmlentities ($string)  {
    $trans_tbl = get_html_translation_table (HTML_ENTITIES);
    $trans_tbl = array_flip ($trans_tbl);
    $ret = strtr ($string, $trans_tbl);
    return  preg_replace('/\&\#([0-9]+)\;/me', "chr('\\1')",$ret);
}

function get_section($section_name)
{
    return  get_template_part('pages/Section' . $section_name);
}