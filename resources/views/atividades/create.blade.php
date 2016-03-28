@extends ('layouts.site')

<?php
$layout['title']        = 'Adicionar atividade';
$layout['form']         = ['route' => 'atividades.store'];
$layout['entrega']      = \Carbon\Carbon::now();
$layout['descricao']    = NULL;
$layout['selected']     = NULL;
?>

@section('content')
    @include ('atividades.layout')
@endsection
