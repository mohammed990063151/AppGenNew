<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplctionResource extends JsonResource
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
'Logo'=>$this ->Logo,
'AppName'=>$this ->AppName,
'Link'=>$this ->Link,
'Discrptions'=>$this ->Discrptions,
'Phone'=>$this ->Phone,
'WhatsApp'=>$this ->WhatsApp,
'Splash_Screen'=>$this ->Splash_Screen,

        ];
    }
}
