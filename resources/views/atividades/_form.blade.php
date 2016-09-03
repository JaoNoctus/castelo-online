<div class="form-group">
    {!! Form::label('disciplina', 'Disciplina', ['class' => 'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::select('disciplina', $disciplinas, NULL, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('entrega', 'Entrega', ['class' => 'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::date('entrega', $date, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('descricao', 'Descrição', ['class' => 'control-label col-md-2']) !!}
    <div class="col-md-10">
        {!! Form::textarea('descricao', NULL, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-10 col-md-offset-2">
        <button type="submit" class="btn btn-block btn-default">
            Salvar
        </button>
    </div>
</div>
