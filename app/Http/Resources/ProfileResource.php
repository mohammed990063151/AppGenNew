<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'Name'=>$this ->Name,
            'Email'=>$this ->Email,
            'Facebook'=>$this ->Facebook,
            'Snapchat'=>$this ->Snapchat,
            'Instgram'=>$this ->Instgram,
            'Twitter'=>$this ->Twitter,
            'TikTok'=>$this ->TikTok,
            'Social_Media_Icons_Color'=>$this ->Social_Media_Icons_Color,
            'is_active'=>$this ->is_active,
            'app_id'=>$this ->app_id,

                    ];
    }
}
