@extends('layouts.layout')

('header')






@section('content')
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>kode</th>
            <th>Nama</th>
            <th>kategori</th>
            <th>stok</th>
            <th>harga</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->kode_kasir }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->kategori->nama_kategori }}</td>
                <td>{{ $item->stok}}</td>
                <td>{{ $item->harga}}</td>
                <td>
                    <a href="/kasir/{{ $item->id }}/edit">Edit</a>
                    <a href="/kasir/{{ $item->id }}/delete">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    @endsection
