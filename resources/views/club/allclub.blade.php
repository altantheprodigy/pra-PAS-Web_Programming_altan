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
               @foreach($club as $klub)
               
               <tr>
               <td>{{$no}}</td>
               <td>{{ $klub->nama }}</td>
               <td>{{ $klub->trophy}}</td>
               <td>{{ $klub->desc }}</td>
               <td>
                <a href="/detailclub/{{ $klub->id }}">
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


