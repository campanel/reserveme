
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descricao', 'Descrição:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('sala', 'Sala:') !!}

    {!! Form::select('sala_id', $listSalas, null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('data', 'Data:') !!}
    {!! Form::input('date', 'date',date("Y-m-d"), ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('hora', 'Hora:') !!}
    {!! Form::select('hora', $horas, date("d"), ['id' => 'tag_list', 'class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

