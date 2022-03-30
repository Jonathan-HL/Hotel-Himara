<?php

namespace App\Helper;

class PercentReview{

    public function percent($reviews, $note){
        $totalReview =count($reviews);
        $totalNote = count($note);
        if($totalNote != 0){

            return ($totalNote/$totalReview)*100;
        }
        return 0;
    }
}
