@extends ('layouts.site')

<?php
$layout['title']		= 'Adicionar prova';
$layout['form']			= ['route' => 'provas.store'];
$layout['data']			= \Carbon\Carbon::now();
$layout['descricao']	= NULL;
$layout['selected']		= NULL;
?>

@section('content')
    @include ('provas.layout')
@endsection
