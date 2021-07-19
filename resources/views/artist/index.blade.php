
@extends('layouts.app') 

@section('content') 
<div class="container">

    <h3>ARTIST</h3>
    <h4>
    <a href="{{ url('/artist/create') }}">Tambah Data</a>
    </h4>
    <table class="table table-bordered" >
        <tr>
            <th>Artist ID</th>
            <th>Nama Artist</th>
          
            <th>DELETE</th>
        </tr>
            @foreach($rows as $row)
        <tr>
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->artist_nama }}</td>
            
    <form action="{{ url('/artist/' . $row->artist_id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
        <button>Hapus</button>
    </form>
        </tr>
            @endforeach
    </table>
 </div> 
@endsection 