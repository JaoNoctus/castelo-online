@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-uppercase">
                        Editar atividade
                        <div class="btn-group pull-right">
                            <a href="{{ route('atividades.index') }}" class="btn btn-xs btn-default text-uppercase">Voltar</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($atividade, ['route' => ['atividades.update', $atividade], 'method' => 'put', 'class' => 'form-horizontal']) !!}
                            @include('atividades._form', ['date' => $atividade->entrega])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/lang/summernote-pt-BR.js"></script>
    <script>
    $(document).ready(function() {
        $('#descricao').summernote({
            lang: 'pt-BR',
            minHeight: 50,
            maxHeight: 220,
            focus: true,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                ['font', ['fontsize', 'color']],
                ['paragraph', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'table']],
                ['misc', ['codeview', 'fullscreen']]
            ]
        });
    });
    </script>
@endsection
