@extends('layouts.main')

@section('content')
    

    <div class="container mt-5">
       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Title</th>
                    <th scope="col">Club</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
            $no = 1;
        @endphp
               @foreach($pelatih as $coach)
               
               <tr>
               <td>{{$no}}</td>
               <td>{{ $coach->nama }}</td>
               <td>{{ $coach->title}}</td>
               <td>{{ $coach->club }}</td>
               <td>
                <a href="/ubah/{{ $coach->id }}">
                    <button class="btn btn-warning">Edit</button>
                </a>
                
                <button class="btn btn-danger" data-id="{{ $coach->id }}">Delete</button>
                <a href="/detil/{{ $coach->id }}">
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


