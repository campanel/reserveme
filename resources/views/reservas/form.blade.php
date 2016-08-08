
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('nome', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('nome', 'Título da reserva',['class' => 'mdl-textfield__label']) !!}

</div>
</br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::textarea('descricao', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('descricao', 'Descreva as atividades',['class' => 'mdl-textfield__label']) !!}
</div>
</br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

    {!! Form::select('sala_id', $listSalas, null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('sala', 'Sala',['class' => 'mdl-textfield__label']) !!}

</div>
</br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

    {!! Form::input('date', 'date',date("Y-m-d"), ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('data', 'Data:',['class' => 'mdl-textfield__label']) !!}

</div>
</br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

    {!! Form::select('hora', $horas, date("d"), ['id' => 'tag_list', 'class' => 'mdl-textfield__input']) !!}
    {!! Form::label('hora', 'Hora:',['class' => 'mdl-textfield__label']) !!}
</div>
</br>
</br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::submit($submitButtonText, ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white']) !!}
</div>

