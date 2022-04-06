<?php
namespace App\Traits;
trait ModelHelpers {
    public function StatusWithSpan(){
        if($this->status ){
            return ' <span class="badge bg-success whait-text">active</span>';
        }else{
            return ' <span class="badge bg-warning whait-text">in active</span>';
        }
    }
}
