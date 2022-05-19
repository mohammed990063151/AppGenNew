<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Applction_BuildingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {


                   $Applction = $this->whenLoaded('app');


        return [
            'id' => $this->id,
            'id_Applction' => new ApplctionResource($Applction),



// 'id_Applction_Building'=>$this ->id,
// 'id_Applction'=>$this ->id,
// 'Logo'=>$this ->Logo,
// 'AppName'=>$this ->AppName,
// 'Link'=>$this ->Link,
// 'Discrptions'=>$this ->Discrptions,
// 'Phone'=>$this ->Phone,
// 'WhatsApp'=>$this ->WhatsApp,
// 'Splash_Screen'=>$this ->Splash_Screen,
// 'version'=>$this ->version,

// 'AppProfile_id'=>$this ->AppProfile_id,
// 'Name'=>$this ->Name,
// 'Email'=>$this ->Email,
// 'Facebook'=>$this ->Facebook,
// 'Snapchat'=>$this ->Snapchat,
// 'Instgram'=>$this ->Instgram,
// 'Twitter'=>$this ->Twitter,
// 'TikTok'=>$this ->TikTok,
// 'Social_Media_Icons_Color'=>$this ->Social_Media_Icons_Color,
// 'is_active'=>$this ->is_active,
// 'app_id_prfile'=>$this ->app_id_prfile,

// // 'Screen_id'=>$this ->Screen

// 'id_screen' => $this->id_screen,
// 'screen_typeS1' => $this->screen_type,
// 'imageS1' => $this->image,
// 'Discrption1st_1' => $this->Discrption1st,
// 'ColorS1' => $this->Color,
// 'ContainarButtonBarColorS1' => $this->ContainarButtonBarColor,
// 'IconsBackgroundColorS1' => $this->IconsBackgroundColor,
// 'IconsColorS1' => $this->IconsColor,
// 'app_id_screens1' => $this->app_id_screen,
// 'profile_ids1'=>$this->profile_id,

// 'scrensS2' => $this->id_screen_tow,
// 'images2' => $this->image_tow,
// 'Discrption1sts2' => $this->Discrption1st_tow,
// 'Colors2' => $this->Color_tow,
// 'ContainarButtonBarColors2' => $this->ContainarButtonBarColor_tow,
// 'IconsBackgroundColors2' => $this->IconsBackgroundColor_tow,
// 'IconsColors2' => $this->IconsColor_tow,
// 'app_ids2' => $this->app_id_screen_tow,

// 'scrensS3' => $this->id_screen_three,
// 'images3' => $this->image_three,
// 'Discrption1sts3' => $this->Discrption1st_three,
// 'Colors3' => $this->Color_three,
// 'ContainarButtonBarColors3' => $this->ContainarButtonBarColor_three,
// 'IconsBackgroundColors3' => $this->IconsBackgroundColor_three,
// 'IconsColors3' => $this->IconsColor_three,
// 'app_ids3' => $this->app_id_screen_three,
// 'APK' => $this->APK,

        ];
    }
}
