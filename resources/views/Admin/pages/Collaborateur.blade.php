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
                        <div class="card-title">Ajout de collaborateur</div>
                        <form action="{{route('inviter')}}" method="post">
                            @csrf
                            <input type="hidden" name="dossier_id" value="@php print_r(request('id')); @endphp">
                            <div class="mb-3">
                                <select class="form-select form-select-lg" name="user_id" id="">
                                    <option selected>Selectionner un utilisateur</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->nom . " " . $user->prenom }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex p-3 mt-3">
                                <button style="margin-left: 25px; margin-right:25px" type="submit" class=" btn btn-rounded btn-success mb-4" >Valider</button>
                                <a href="" style="margin-right: 25px" class="btn btn-rounded btn-danger mb-4" type="button">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
