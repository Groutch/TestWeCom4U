<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HikeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
            'id'=>$this->id,
            'name'=>$this->name,
            'difficulty'=>$this->difficulty,
            'intro'=>$this->intro,
            'title1'=>$this->title1,
            'title2'=>$this->title2,
            'section1'=>$this->section1,
            'section2'=>$this->section2,
            'pic1'=>$this->pic1,
            'pic2'=>$this->pic2,
            'pic3'=>$this->pic3,
            'pic4'=>$this->pic4,
        ];
    }
}
