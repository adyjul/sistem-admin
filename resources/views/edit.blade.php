
@extends('template.layout')

@section('title','edit')


@section('content')


<div class="container-fluid">
    <form method="post" action="{{route('admin.update',[$product->id])}}" enctype="multipart/form-data">
        @CSRF
        @method('put')
           <div class="form-group">
               <label>Nama Product</label>
               <input type="text" name="nama_product" class="form-control" value="{{$product->nama_product}}">
           </div>
           <div class="form-group">
               <label>Deskripsi</label>
               <input type="text" name="deskripsi" class="form-control" value="{{$product->deskripsi}}">
           </div>
           <div class="form-group">
            <label>Picture</label>
            <input type="file" name="gambar" class="form-control" value="{{$product->gambar}}" >
            {{-- <input type="text" name="picture" class="form-control" value="{{$product->gambar}}"> --}}
           </div>
           <div class="form-group">
               <label>Harga</label>
               <input type="text" name="harga" class="form-control" value="{{$product->harga}}">
           </div>                                       
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
       </form>
</div>



@endsection



