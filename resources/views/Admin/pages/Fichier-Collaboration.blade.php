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
                                        placeholder="">
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
                                        <th><strong>DATE DE CREATION</strong></th>
                                        <th><strong>COLLABORATEURS</strong></th>
                                        <th><strong>ACTIONS</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fichiers as $fichier)
                                        <tr>
                                            <td>{{ $fichier->libelle }}</td>
                                            <td> {{$fichier->created_at}} </td>
                                            <td>
                                                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                                    data-bs-target=".bd-example-modal-lg">Voir les collaborateurs</button>
                                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Liste des collaborateurs</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table id="" class="display"
                                                                    style="min-width: 700px">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th><strong>Nom & Prénom</strong></th>
                                                                            <th><strong>Genre</strong></th>
                                                                            <th><strong>Email</strong></th>
                                                                            <th><strong>Téléphone</strong></th>
                                                                            <th><strong>Action</strong></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><img class="rounded-circle" width="35"
                                                                                    src="images/profile/small/pic1.jpg"
                                                                                    alt=""></td>
                                                                            <td>Moussa Diafara</td>
                                                                            <td>Masculin</td>
                                                                            <td>moussa@moussa.com</td>
                                                                            <td>90000000</td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="btn btn-danger shadow btn-xs sharp"><i
                                                                                        class="fa fa-trash"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" title="Supprimer le fichier"
                                                        class="btn btn-danger shadow btn-xs sharp me-1"><i
                                                            class="fa fa-trash"></i></a>
                                                    <a href="#" title="Voir les versions disponibles du fichier"
                                                        class="btn btn-success shadow btn-xs sharp me-1"
                                                        data-bs-toggle="modal" data-bs-target=".vue-modal-lg"><i
                                                            class="fa fa-eye"></i></a>
                                                    <div class="modal fade vue-modal-lg" tabindex="-1" role="dialog"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Versions de fichier(s)</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal">
                                                                    </button>

                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="file" name=""
                                                                        style="display: none;" id="file">
                                                                    <label for="file" class="btn btn-rounded btn-success mb-4" style="margin: left 500px; ; width: 150px; display: flex; justify-content: center; align-items: center;"><i class="fa fa-file-download me-2"> </i>Mettre à jour fichier</label>
                                                                    <table id="example1" class="display"
                                                                        style="min-width: 750px">
                                                                        <thead>
                                                                            <tr>
                                                                                <th><strong>Version No</strong></th>
                                                                                <th><strong>Ajouté par</strong></th>
                                                                                <th><strong>Date</strong></th>
                                                                                <th><strong>Actions</strong></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>01</td>
                                                                                <td>Tiger Nixon</td>
                                                                                <td>2011/04/25</td>
                                                                                <td><a href="#"
                                                                                        class="btn btn-warning shadow btn-xs sharp me-2"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target=".bd-example-modal-lg"><i
                                                                                            class="fa fa-download"></i></a>
                                                                                    <a href="#"
                                                                                        title="Supprimer le fichier"
                                                                                        class="btn btn-danger shadow btn-xs sharp me-1"><i
                                                                                            class="fa fa-trash"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>02</td>
                                                                                <td>Garrett Winters</td>
                                                                                <td>2011/07/25</td>
                                                                                <td><a href="#"
                                                                                        class="btn btn-warning shadow btn-xs sharp me-2"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target=".bd-example-modal-lg"><i
                                                                                            class="fa fa-download"></i></a>
                                                                                    <a href="#"
                                                                                        title="Supprimer le fichier"
                                                                                        class="btn btn-danger shadow btn-xs sharp me-1"><i
                                                                                            class="fa fa-trash"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>03</td>
                                                                                <td>Ashton Cox</td>
                                                                                <td>2009/01/12</td>
                                                                                <td><a href="#"
                                                                                        class="btn btn-warning shadow btn-xs sharp me-2"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target=".bd-example-modal-lg"><i
                                                                                            class="fa fa-download"></i></a>
                                                                                    <a href="#"
                                                                                        title="Supprimer le fichier"
                                                                                        class="btn btn-danger shadow btn-xs sharp me-1"><i
                                                                                            class="fa fa-trash"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
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
