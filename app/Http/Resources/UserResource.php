<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
      //  return parent::toArray($request); // return all data
      return [
        'id' => $this->id,
        'name' => $this->name,
         'email' => $this->email,
        // 'created_at' => $this->created_at,
        // 'updated_at' => $this->updated_at,
      
        // "post_title" => optional($this->post)->title, //???
    //    "extra_inf" => "with UserCollection we can add extra info like status",
      //  "post" => $this->posts,
     //   'posts' => PostResource::collection($this->posts),

    ];
    }
}
