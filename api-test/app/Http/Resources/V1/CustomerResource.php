<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property mixed $name
 * @property mixed $type
 * @property mixed $email
 * @property mixed $address
 * @property mixed $city
 * @property mixed $state
 * @property mixed $postal_code
 */
class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'postalCode' => $this->postal_code,
            'invoices' => InvoiceResource::collection($this->whenLoaded('invoices'))
        ];
    }
}
