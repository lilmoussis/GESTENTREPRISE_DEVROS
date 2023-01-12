@extends('Admin.Squelette')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row " style="width: 900px;display: grid; grid-template-columns: repeat(2, 1fr); grid-gap: 20px">
@foreach ( $invitations as $invitation)
                <div class="card p-3 col ">
                    <div class="card-body">
                        <a href="{{route('Fichier',$invitation->id)}}">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="big-wind" style="margin-right:10px">
                                        <img src="images/folder.png" width="50" alt="">
                                    </span>
                                    <div class="ms-3">
                                        <h4>{{$invitation->libelle}} </h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="mt-3">
                            <span class="fs-14 font-w400">Créé le : {{ $invitation->created_at }}</span>
                            <br>
                            <span class="fs-14 font-w400">Par : {{$invitation->nom . ' ' . $invitation->prenom}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
