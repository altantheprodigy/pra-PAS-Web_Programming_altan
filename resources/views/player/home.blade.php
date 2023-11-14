@extends('layouts.main')

@section('content')
    

    <div class="container mt-5">
       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NoPung</th>
                    <th scope="col">Club</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
            $no = 1;
        @endphp
               @foreach($pemain as $player)
               
               <tr>
               <td>{{$no}}</td>
               <td>{{ $player->nama }}</td>
               <td>{{ $player->nopung }}</td>
               <td>{{ $player->club }}</td>

               <td>
                <a href="edit/{{ $player->id }}">
                    <button class="btn btn-warning">Edit</button>
                </a>
                
                <button class="btn btn-danger" data-id="{{ $player->id }}">Delete</button>
                <a href="detail/{{ $player->id }}">
                    <button class="btn btn-primary">Detail</button>
                </a>
            </td>
            </tr> 
           
           @php
            $no++;
            @endphp
               @endforeach
            </tbody>
        </table>
    </div>
@endsection


