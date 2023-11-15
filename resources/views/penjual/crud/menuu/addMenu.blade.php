@extends('layouts.global')
@section('title')
    Tambah Data Makanan
@endsection

@section('content')
<div class="bg-blue-200 min-h-screen flex items-center">
    <div class="w-full">

      <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
        <form action="{{route('penjual.pushMenu')}}" method="post" class="w-full flex flex-col items-start">
            @csrf
            <p class="text-black text-[25px] font-bold text-2xl mx-auto">Tambah Data Menu</p>
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
            <input type="text" name="nama_menu" placeholder="Nama Menu" class="border border-gray-300 shadow p-3 w-full rounded mb-">

            {{-- <input type="hidden" name="id_toko" value="{{$menu2->first()->id_user}}"> --}}
                    {{-- <option value="{{$menus->id}}">{{$menus->nama_menu}}</option> --}}
            @foreach ($menu2 as $menus)
            <input hidden="text" name="id_toko" placeholder="Nama Menu" value="{{$menus->id}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                <option value="{{$menus->id}}">{{$menus->nama_menu}}</option>
            @endforeach


          </div>
          {{-- <div class="mb-5 w-full">
            <label for="twitter" class="block mb-2 font-bold text-gray-600">Gambar</label>
            <select type="file" name="id_menu" placeholder="Gambar...." required class="border border-gray-300 shadow p-3 w-full rounded mb-">
                <option value="" disabled selected>Jenis Product...</option>
                @foreach ($menus as $menus)
                    <option value="{{$menus->id}}">{{$menus->nama_menu}}</option>
                @endforeach
            </select>
          </div> --}}

          <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
        </form>
      </div>
    </div>
  </div>

  </div>
