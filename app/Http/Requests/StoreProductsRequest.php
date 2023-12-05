<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'category_id' => 'required',
            'product_code' => 'required|unique:products,product_code',
            'price' => 'required',
            'unit' => 'required',
            'stock' => 'required',
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => ':attribute tidak Boleh Kosong',
            'category_id.required' => ':attribute tidak Boleh Kosong',
            'product_code.required' => ':attribute tidak Boleh Kosong',
            'product_code.unique' => ':attribute Kode Produk Sudah Ada',
            'price.required' => ':attribute tidak Boleh Kosong',
            'unit.required' => ':attribute tidak Boleh Kosong',
            'stock.required' => ':attribute tidak Boleh Kosong',
            'description.required' => ':attribute tidak Boleh Kosong',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Nama produk',
            'category_id' => 'Kategory produk',
            'product_code' => 'Kode produk',
            'price' => 'Harga produk',
            'unit' => 'Satuan produk',
            'stock' => 'Stok produk',
            'description' => 'Deskripsi produk',
        ];
    }
}
