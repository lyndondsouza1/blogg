@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">all the bloggs</div>

                <div class="card-body">
                   <ul class="list-group">
                   @foreach($bloggs as $blogg)
                   <li class="list-group-item">
                   {{ $blogg -> name}}
                   </li>
                   @endforeach
                   </ul>
                </div>
               <div class="mt-2">
                   <a class="btn btn-success btn-m" href="/blogg/create"><i class="fas fa-plus-circle">Create new blogg</i></a>
               </div>
               <div class="mt-2">
                   <a class="btn btn-success btn-m" href="blogg/{blogg}"><i class="fas fa-plus-circle">Create new blogg</i></a>
            </div>
        </div>
    </div>
</div>
@endsection
