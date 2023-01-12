@extends('Admin.Squelette')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <button type="button" class="btn btn-rounded btn-info mb-4" data-bs-toggle="modal"
                data-bs-target="#ajoutfichierModalCenter"><span class="btn-icon-start text-info"><i
                        class="fa fa-plus color-info"></i>
                </span>Ajouter un fichier</button>
            <div class="modal fade" id="ajoutfichierModalCenter">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajout de fichier</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>

                        </div>
                        <form action="{{ route('CreationFichier') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" name="dossier_id" value="@php print_r(request('id')); @endphp">
                                <div class="mb-3">
                                    <label class="mb-1"><strong>Nom du fichier</strong></label>
                                    <input type="text" name="libelle" id="libelle" class="form-control"
                                        placeholder="...">
                                    <br>
                                    <label class="mb-1"><strong>Uploader le fichier</strong></label>
                                    <input type="file" name="path" id="path" class="form-control">
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
            {{-- @if($fichiers=count)
            @endif  
            @if ($fichiers[0]->user_id == Auth::User()->id) --}}
                    <a type="button" href="{{route('collaborateur',$dossiers->id)}}" class="btn btn-rounded btn-warning mb-4" ><span class="btn-icon-start text-warning"><i class="fa fa-user-plus color-warning"></i>
                                </span>Ajouter collaborateur(s)</a>
                                {{-- <a href="{{route('collaborateurs/'.$dossiers->id,$dossiers->id)}}" type="button" class="btn btn-primary mb-2">Voir les collaborateurs</a> --}}
            {{-- @endif --}}
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

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Liste des fichiers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th><strong>NOM</strong></th>
                                        <th><strong>DATE D'AJOUT</strong></th>
                                        <th><strong>AJOUTE PAR</strong></th>
                                        <th><strong>ACTIONS</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fichiers as $fichier)
                                        <tr>
                                            <td>{{ $fichier->libelle }}</td>
                                            <td> {{$fichier->created_at}} </td>
                                            <td>{{$fichier->user->nom . ' ' . $fichier->user->prenom}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('SupprimerFichier', $fichier->id) }}" title="Supprimer le fichier" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fa fa-trash"></i></a>
                                                    <a href="../Fichiers/{{$fichier->path}}" download="{{$fichier->libelle}}" title="Télécharger le fichier" class="btn btn-success shadow btn-xs sharp me-1"><i class="fa fa-file-download"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
