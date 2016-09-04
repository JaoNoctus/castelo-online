@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md10">
            <div class="panel panel-default">
                <div class="panel-heading text-uppercase">Horários</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="active">
                                <th class="text-center">HORÁRIO</th>
                                <th class="text-center">SEGUNDA</th>
                                <th class="text-center">TERÇA</th>
                                <th class="text-center">QUARTA</th>
                                <th class="text-center">QUINTA</th>
                                <th class="text-center">SEXTA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center">7:30</th>
                                <td class="text-center">Biologia</td>
                                <td class="text-center">Português</td>
                                <td class="text-center">Geografia</td>
                                <td class="text-center">Ed. Física</td>
                                <td class="text-center">História</td>
                            </tr>
                            <tr>
                                <th class="text-center">8:20</th>
                                <td class="text-center">Biologia</td>
                                <td class="text-center">Português</td>
                                <td class="text-center">Geografia</td>
                                <td class="text-center">Filosofia</td>
                                <td class="text-center">História</td>
                            </tr>
                            <tr>
                                <th class="text-center">9:10</th>
                                <td class="text-center">Biologia</td>
                                <td class="text-center">Português</td>
                                <td class="text-center">Matemática</td>
                                <td class="text-center">Ing. / Esp.</td>
                                <td class="text-center">História</td>
                            </tr>
                            <tr>
                                <th class="text-center">10:00</th>
                                <td class="text-center">Química</td>
                                <td class="text-center">Redação</td>
                                <td class="text-center">Matemática</td>
                                <td class="text-center">Ing. / Esp.</td>
                                <td class="text-center">Português</td>
                            </tr>
                            <tr class="info">
                                <th class="text-center">10:50</th>
                                <td class="text-center">Intervalo</td>
                                <td class="text-center">Intervalo</td>
                                <td class="text-center">Intervalo</td>
                                <td class="text-center">Intervalo</td>
                                <td class="text-center">Intervalo</td>
                            </tr>
                            <tr>
                                <th class="text-center">11:10</th>
                                <td class="text-center">Química</td>
                                <td class="text-center">Redação</td>
                                <td class="text-center">Matemática</td>
                                <td class="text-center">Física</td>
                                <td class="text-center">Português</td>
                            </tr>
                            <tr>
                                <th class="text-center">12:00</th>
                                <td class="text-center">Química</td>
                                <td class="text-center">Redação</td>
                                <td class="text-center">Química</td>
                                <td class="text-center">Física</td>
                                <td class="text-center">Português</td>
                            </tr>
                            <tr class="danger">
                                <th class="text-center">12:50</th>
                                <td class="text-center">Saída</td>
                                <td class="text-center">Saída</td>
                                <td class="text-center">Saída</td>
                                <td class="text-center">Saída</td>
                                <td class="text-center">Saída</td>
                            </tr>
                            <tr>
                                <th class="text-center" rowspan="5" style="vertical-align:middle; border-bottom: 1px solid #ddd">14:00 - 17:20</th>
                                <td class="text-center">Biologia</td>
                                <td class="text-center">Matemática</td>
                                <td class="text-center">Geografia</td>
                                <td class="text-center" rowspan="5" style="vertical-align:middle; border-bottom: 1px solid #ddd">-</td>
                                <td class="text-center" rowspan="5" style="vertical-align:middle; border-bottom: 1px solid #ddd">Prova</td>
                            </tr>
                            <tr>
                                <td class="text-center">Matemática</td>
                                <td class="text-center">Matemática</td>
                                <td class="text-center">História</td>
                            </tr>
                            <tr>
                                <td class="text-center">Biologia</td>
                                <td class="text-center">Redação</td>
                                <td class="text-center">Geografia</td>
                            </tr>
                            <tr>
                                <td class="text-center">Física</td>
                                <td class="text-center">Religião</td>
                                <td class="text-center">Física</td>
                            </tr>
                            <tr>
                                <td class="text-center" style="border-bottom: 1px solid #ddd">Física</td>
                                <td class="text-center" style="border-bottom: 1px solid #ddd">Química</td>
                                <td class="text-center" style="border-bottom: 1px solid #ddd">Físcia</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
