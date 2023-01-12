@extends('Admin.Squelette')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <button type="button" class="btn btn-rounded btn-info mb-4" data-bs-toggle="modal" data-bs-target="#ajoutdossierModalCenter" ><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
        </span>Ajouter un dosier</button>
        <div class="modal fade" id="ajoutdossierModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajout de dossier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <form action="{{route('CreeDossier')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label class="mb-1"><strong>Nom du dossier</strong></label>
                                    <input type="text" name="libelle" id="dossier" class="form-control" placeholder="....">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if ($message = Session::get('succes.add'))
                    <div class="alert alert-success solid alert-dismissible fade show">
                        <svg viewbox="0 0 24 24" width="24 " height="24" stroke="currentColor"
                            stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            class="me-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        </button>
                    </div>
        @endif
        @if ($message = Session::get('succes.update'))
                    <div class="alert alert-success solid alert-dismissible fade show">
                        <svg viewbox="0 0 24 24" width="24 " height="24" stroke="currentColor"
                            stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            class="me-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        </button>
                    </div>
        @endif
        @if ($message = Session::get('succes.destroy'))
                    <div class="alert alert-success solid alert-dismissible fade show">
                        <svg viewbox="0 0 24 24" width="24 " height="24" stroke="currentColor"
                            stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            class="me-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        </button>
                    </div>
        @endif
        <div class="row " style="width: 900px;display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 20px">
            @foreach ( $dossiers as $dossier )
                <div class="card p-3 col ">
                    <div class="card-body">
                        <a href="{{route('Fichier',$dossier->id)}}">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="big-wind" style="margin-right:10px">
                                        <img src="images/folder.png" width="50" alt="">
                                    </span>
                                    <div class="ms-3">
                                        <h4>{{ $dossier->libelle }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="projects">
                            <a href="{{ route('dossier.edit', $dossier->id)}}" style="margin-right: 15px" class="badge bgl-warning text-warning font-w700 me-3">
                                <span>Modifier</span>
                            </a>
                            <a type="button" style="margin-right: 15px" href="{{ route('SupprimerDossier', $dossier->id) }} " class="badge bgl-danger text-danger font-w700 btn btn-warning btn sweet-confirm">Supprimer</a>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex align-items-end mt-3 pb-3 justify-content-between">
                                <span class="fs-14 font-w400">Créé le : {{ $dossier->created_at }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
