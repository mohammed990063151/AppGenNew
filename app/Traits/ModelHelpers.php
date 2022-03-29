<?php
namespace App\Traits;
trait ModelHelpers {
    public function StatusWithSpan(){
        if($this->status ){
            return ' <span class="badge bg-gradient-success whait-text">active</span>';
        }else{
            return ' <span class="badge bg-gradient-warning whait-text">in active</span>';
        }
    }
}
