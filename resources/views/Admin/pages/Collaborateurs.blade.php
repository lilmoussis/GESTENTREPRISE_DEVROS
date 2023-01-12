@extends('Admin.Squelette')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
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
                                    <th><strong>PRENOM(S)</strong></th>
                                    <th><strong>GENRE</strong></th>
                                    <th><strong>ADRESSE MAIL</strong></th>
                                    <th><strong>TELEPHONE</strong></th>
                                    <th><strong>ACTIONS</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fichiers as $fichier)
                                    <tr>
                                        <td>{{ $fichier->libelle }}</td>
                                        <td>{{$fichier->created_at}} </td>
                                        <td></td>
                                        <td>
                                            <a href="#" title="Supprimer le fichier" class="btn btn-danger shadow btn-xs sharp me-1">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
