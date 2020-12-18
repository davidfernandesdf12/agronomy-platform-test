@extends('layouts.app')

@section('content')
    <!-- Modal Add Video -->
    <a class="waves-effect waves-light btn modal-trigger btn-add" href="#addVideo" data-backdrop="static" data-keyboard="false"><i class="large material-icons">add</i>Adiconar</a>

    <!-- Modal Add Video Structure -->
    <div id="addVideo" class="modal" data-keyboard="false" data-backdrop="static">
        <form action="{{route('admin.videos.store')}}" method="POST" enctype="multipart/form-data" class="col s12">
            @csrf
        <div class="modal-content">
            <h4>Cadastrar Vídeo</h4>
            <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="title">Título</label>
                            <input value="" name="title" id="title" type="text" class="validate" required>
                        </div>
                        <div class="input-field col s12">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Video</span>
                                    <input name="video" id="video" type="file" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green white-text btn-flat red">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
                <i class="material-icons right">send</i>
            </button>
        </div>
        </form>

    </div>

    <div class="row">
        <div id="man" class="col s12">
            <div class="card material-table">
                <div class="table-header">
                    <span class="table-title">Lista de Vídeos</span>
                    <div class="actions">
                        <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
                    </div>
                </div>
                <table id="datatable">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Visualizar video</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($videos))
                        @foreach($videos as $video)
                            <tr>
                                <td>{{$video->title}}</td>
                                <td>
                                    <a  target="_blank" href="{{!empty($video->getFirstMedia('videos/')) ? $video->getFirstMedia('videos/')->getFullUrl() : null}}" >
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



