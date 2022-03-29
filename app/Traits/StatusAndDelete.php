<?php
namespace App\Traits;
trait StatusAndDelete {
    public function Delete($model , $id){
        $model::find($id)->delete();
        return redirect()->back();
    }

    public function StatusChange($model , $id){
        $active = $model::find($id);
        $active->status = !$active->status;
        $active->save();
        return redirect()->back();
    }
}
