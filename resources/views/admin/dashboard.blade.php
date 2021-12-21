@extends('layouts.master')

@section('title')
    Dashboard | Moz-Art
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Quotations</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>téléphone</th>
                            <th>véhicule</th>
                            <th>Année</th>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Services</th>
                            <th>Date/Heure</th>
                            <th>Email</th>
                            <th>MODIFIER</th>
                            <th>SUPPRIMER</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>blabla</td>
                                <td>blabla</td>
                                <td>blabla</td>
                                <td>blabla</td>
                                <td>blabla</td>
                                <td>blabla</td>
                                <td>blabla</td>
                                <td>blabla</td>
                                <td>blabla</td>
                                <td>blabla</td>
                                <td><a href="#" class="btn btn-success">MODIFIER</a> </td>
                                <td><a href="#" class="btn btn-danger">SUPPRIMER</a></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
