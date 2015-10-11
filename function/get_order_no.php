<?php
/**
 * 生成订单号n @woolong (http://www.phping.net)
 **/
if(! function_exists('get_order_no')) {
    function get_order_no(){
        $yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
        $orderNo = $yCode[intval(date('Y')) - 2015] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
        return $orderNo;
    }
}
?>