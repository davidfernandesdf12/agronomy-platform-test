@extends('layouts.app')

@section('content')
    <!-- Modal Add Video -->
    <a class="waves-effect waves-light btn modal-trigger btn-add" href="{{route('admin.reports.create')}}" ><i class="large material-icons">description</i> Gerar</a>


    <div class="row">
        <div id="man" class="col s12">
            <div class="card material-table">
                <div class="table-header">
                    <span class="table-title">Lista de relatórios</span>
                    <div class="actions">
                        <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
                    </div>
                </div>
                <table id="datatable">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($reports))
                        @foreach($reports as $report)
                            <tr>
                                <td>{{$report->title}}</td>
                                <td>dd
                                    <a  target="_blank" href="{{route('admin.reports.pdf', ['id_report' => $report->id])}}" >
                                        <i class="material-icons">visibility</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



