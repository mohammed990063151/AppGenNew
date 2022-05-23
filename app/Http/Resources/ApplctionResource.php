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

               'id' => $this->id,
            'AppProfile_id' => Applction_BuildingResource::collection($this->whenLoaded('app_profile')),




// 'id'=>$this ->id,
// 'Logo'=>$this ->Logo,
// 'AppName'=>$this ->AppName,
// 'Link'=>$this ->Link,
// 'Discrptions'=>$this ->Discrptions,
// 'Phone'=>$this ->Phone,
// 'WhatsApp'=>$this ->WhatsApp,
// 'Splash_Screen'=>$this ->Splash_Screen,

// 'AppProfile_id'=>$this ->AppProfile->id,
// 'Name'=>$this ->AppProfile->Name,
// 'Email'=>$this ->AppProfile->Email,
// 'Facebook'=>$this ->AppProfile->Facebook,
// 'Snapchat'=>$this ->AppProfile->Snapchat,
// 'Instgram'=>$this ->AppProfile->Instgram,
// 'Twitter'=>$this ->AppProfile->Twitter,
// 'TikTok'=>$this ->AppProfile->TikTok,
// 'Social_Media_Icons_Color'=>$this ->AppProfile->Social_Media_Icons_Color,
// 'is_active'=>$this ->AppProfile->is_active,
// 'app_id'=>$this ->AppProfile->app_id,

// // 'Screen_id'=>$this ->Screen

// 'scrensS1' => $this->Screen[0]->id,
// 'screen_typeS1' => $this->Screen[0]->screen_type,
// 'imageS1' => $this->Screen[0]->image,
// 'Discrption1st_1' => $this->Screen[0]->Discrption1st,
// 'ColorS1' => $this->Screen[0]->Color,
// 'ContainarButtonBarColorS1' => $this->Screen[0]->ContainarButtonBarColor,
// 'IconsBackgroundColorS1' => $this->Screen[0]->IconsBackgroundColor,
// 'IconsColorS1' => $this->Screen[0]->IconsColor,
// 'profile_idS1' => $this->Screen[0]->profile_id,
// 'scrensS2' => $this->Screen[1]->id,
// 'screen_types2' => $this->Screen[1]->screen_type,
// 'images2' => $this->Screen[1]->image,
// 'Discrption1sts2' => $this->Screen[1]->Discrption1st,
// 'Colors2' => $this->Screen[1]->Color,
// 'ContainarButtonBarColors2' => $this->Screen[1]->ContainarButtonBarColor,
// 'IconsBackgroundColors2' => $this->Screen[1]->IconsBackgroundColor,
// 'IconsColors2' => $this->Screen[1]->IconsColor,
// 'profile_ids2' => $this->Screen[1]->profile_id,
// 'scrensS3' => $this->Screen[2]->id,
// 'screen_types3' => $this->Screen[2]->screen_type,
// 'images3' => $this->Screen[2]->image,
// 'Discrption1sts3' => $this->Screen[2]->Discrption1st,
// 'Colors3' => $this->Screen[2]->Color,
// 'ContainarButtonBarColors3' => $this->Screen[2]->ContainarButtonBarColor,
// 'IconsBackgroundColors3' => $this->Screen[2]->IconsBackgroundColor,
// 'IconsColors3' => $this->Screen[2]->IconsColor,
// 'profile_ids3' => $this->Screen[2]->profile_id

        ];
    }
}
