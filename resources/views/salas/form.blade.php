
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('nome', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('nome', 'Nome da Sala',['class' => 'mdl-textfield__label']) !!}

</div>
<br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::textarea('descricao', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('descricao', 'Descrição',['class' => 'mdl-textfield__label']) !!}
</div>
<br><br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::submit($submitButtonText, ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white']) !!}
</div>

