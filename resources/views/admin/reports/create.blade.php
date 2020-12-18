@extends('layouts.app')

@section('content')
    <!-- Modal Comment -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Comentario</h4>
            <div class="input-field col s6">
                <input placeholder="comentario" id="comment" type="text" class="validate">
                <label for="comment">Título</label>
            </div>        </div>
        <div class="modal-footer">
            <a href="#" class="modal-close waves-effect waves-green btn-flat btn-confirm-comment">Confirmar</a>
        </div>
    </div>


    <h3>Gerar Relatório</h3>
    <div class="row">
        <form method="post" id="send-report" enctype="multipart/form-data" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Título" id="title" type="text" class="validate">
                    <label for="first_name">Título</label>
                </div>
                <div class="input-field col s6">
                    <select>
                        <option value="" disabled selected>Escolha sua opção</option>
                        @foreach($videos as $video)
                            <option value="1">{{$video->title}}</option>
                        @endforeach

                    </select>
                    <label>Selecione o Vídeo</label>
                </div>
                <button class="btn waves-effect waves-light" style="margin: 10px;float: right;" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
        <div class="wrap">
            <video id="video" width="320" controls="true">
                <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4">
                <!-- FireFox 3.5 -->
                <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4">
                <!-- WebKit -->
                Your browser does not support HTML5 video tag. Please download FireFox 3.5 or higher.
            </video>
            <br/>
            <button id="cit" onclick="shoot()" class="button">Capture</button>
            <br/>
            <div id="output"></div>
        </div>

    </div>

    <div class="row">

    </div>

@endsection
