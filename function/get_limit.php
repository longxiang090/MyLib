<?php
/**
 * 权限拆分（1、2、4、8、16） @woolong (http://www.phping.net)
 * 弊端： 64位操作系统只支持63位，64位之后就报错；32位操作系统支持31位，32位之后就报错
 **/
function get_limit($number) {
    $bin_num = decbin($number);
    $bin_len = strlen($bin_num);
    $rs = array();
    for ($i = 0; $i < $bin_len; $i++) {
        if ($bin_num[$i] == 0) {
            continue;
        }
        $tmp_0 = '';
        $t = $bin_len - $i -1;
        for ($j = 0; $j < $t; $j++) {
            $tmp_0 .= '0';
        }
        $rs[] = bindec($bin_num[$i].$tmp_0);
    }
    return $rs;
}
?>