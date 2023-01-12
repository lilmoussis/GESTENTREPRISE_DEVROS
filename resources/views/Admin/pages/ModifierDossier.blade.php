@extends('Admin\Squelette')
@section('content')
@extends('Admin.Squelette')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid" style="margin-left: 200px">
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
                <div class="card w-50">
                    <div class="card-body pb-0 ">
                        <form action="{{route('ModifierDossier',$dossier->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="mb-1"><strong>Nom du dossier</strong></label>
                                    <input type="text" name="libelle" id="libelle" class="form-control" value="{{ $dossier->libelle }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-success light text-white">Sauvegarder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@endsection
