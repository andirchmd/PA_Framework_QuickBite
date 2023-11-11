@extends('layouts.global')
@section('title')
    Tambah Data Makanan
@endsection

@section('content')
<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">
      <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Tambah Makanan</h2>
      <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
        <form action="{{route('penjual.pushMakanan')}}" method="post" enctype="multipart/form-data" class="w-full flex flex-col items-start">
            @csrf
            <p class="text-black text-[25px] font-bold font-['Kantumruy'] mx-auto">Tambah Data Barang</p>
             @if ($errors->any())
                <div class="bg-red-500 text-white p-2 rounded-md">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <div class="mb-5 w-full">
            <label for="name" class="block mb-2 font-bold text-gray-600">Nama</label>
            <input type="text" name="nama" placeholder="Nama Makanan" class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>

          <div class="mb-5 w-full">
            <label for="twitter" class="block mb-2 font-bold text-gray-600">Harga</label>
            <input type="number" name="harga" placeholder="Harga...." class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>

          <div class="mb-5 w-full">
            <label for="twitter" class="block mb-2 font-bold text-gray-600">Stock</label>
            <input type="number" name="stock" placeholder="Stock..." class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>

          <div class="mb-5 w-full">
            <label for="twitter" class="block mb-2 font-bold text-gray-600">Gambar</label>
            <input type="file" name="gambar" placeholder="Gambar...." required class="border border-gray-300 shadow p-3 w-full rounded mb-">
          </div>
          <div class="mb-5 w-full">
            <label for="twitter" class="block mb-2 font-bold text-gray-600">Gambar</label>
            <select type="file" name="id_menu" placeholder="Gambar...." required class="border border-gray-300 shadow p-3 w-full rounded mb-">
                <option value="" disabled selected>Jenis Product...</option>
                @foreach ($menusss as $menus)
                    <option value="{{$menus->id}}">{{$menus->nama_menu}}</option>
                @endforeach
            </select>
            @foreach ($tokosss as $toko)
            <input hidden="text" name="id_toko" placeholder="Nama Menu" value="{{$toko->id}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                <option value="{{$toko->id}}">{{$toko->nama_menu}}</option>
            @endforeach
          </div>

          <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
        </form>
      </div>
    </div>
  </div>

  </div>
