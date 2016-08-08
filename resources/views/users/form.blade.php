
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('username', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('username', 'Username:',['class' => 'mdl-textfield__label']) !!}
</div>
</br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('email', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('email', 'email:',['class' => 'mdl-textfield__label']) !!}
</div>
</br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input type="password" class="mdl-textfield__input" name="password">
    {!! Form::label('password', 'Senha:',['class' => 'mdl-textfield__label']) !!}

</div>
</br>
</br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::submit($submitButtonText, ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white']) !!}
</div>

