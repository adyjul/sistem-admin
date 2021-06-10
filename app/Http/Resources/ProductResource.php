<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
{
   return [
     'id' => $this->id,
     'nama_product' => $this->nama_product,
     'deskripsi' => $this->deskripsi,
     'harga' => $this->harga,
     'gambar' => $this->gambar,
  ];
}
}
