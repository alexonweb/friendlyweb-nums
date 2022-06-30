<?php
/**
 * Human readable numbers
 */

 namespace FriendlyWeb;

 class Nums
 {

    // Beautiful idea: https://laracasts.com/discuss/channels/laravel/human-readable-file-size-and-time?page=1&replyId=115767

    public function format($num)
    {

        $units = ['', 'k', 'm', 'b', 't'];

        for ($i = 0; $num >= 1000; $i++) {

            $num /= 1000;

        }

        return round($num, 1) . $units[$i];

    }

 }

?>
