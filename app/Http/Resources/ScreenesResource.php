<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScreenesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this ->id,
            'screen_type'=>$this ->screen_type,
            'image'=>$this ->image,
            'Discrption1st'=>$this ->Discrption1st,
            'Color'=>$this ->Color,
            'ContainarButtonBarColor'=>$this ->ContainarButtonBarColor,
            'IconsBackgroundColor'=>$this ->IconsBackgroundColor,
            'IconsColor'=>$this ->IconsColor,
            'profile_id'=>$this ->profile_id,

                    ];
    }
}
