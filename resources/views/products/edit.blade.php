@extends('layouts.main')
@section('konten')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-body">
                            <h3>Form Edit Produk</h3>
                            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('products.index') }}'">
                                <i class="fas fa-arrow-left">Kembali</i>
                            </button>
                            <form action="{{ url('products/'.$id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $id }}">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Produk</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Produk" value="{{ $name }}">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Kategori Produk</label>
                                            <input type="text" name="category_id" class="form-control @error('category_id') is-invalid @enderror" placeholder="Nama Produk" value="{{ $category_id }}">
                                                @error('category_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Kode Produk</label>
                                        <input type="text" name="product_code" class="form-control @error('product_code') is-invalid @enderror" placeholder="Kode Produk" value="{{ $product_code }}">
                                        @error('product_code')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Harga</label>
                                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Harga" value="{{ $price }}">
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Satuan Unit</label>
                                        <input type="text" name="unit" class="form-control @error('unit') is-invalid @enderror" placeholder="Satuan Unit" value="{{ $unit }}">
                                        @error('unit')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Stok</label>
                                        <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Stok" value="{{ $stock }}">
                                        @error('stock')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Deskripsi</label>
                                        <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi">{{ $description }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="image">Foto Produk:</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                                </div>
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection