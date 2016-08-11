@extends('app')

@section('content')

<div class="mdl-card__supporting-text">
    <a href="{{ URL::route('reservas.create') }}" id="new" class=" mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Nova Reserva</a>
</div>

<div class="mdl-card__supporting-text">
    @if ($reservas->count())
        @foreach ($reservas as $reserva)
            <div class="demo-card-square mdl-card_media mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">{{ $reserva->nome }}</h2>
                </div>
                <div class="mdl-card__supporting-text">

                    <li class="mdl-list__item mdl-list__item--three-line">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-text-body">
                                {{ $reserva->descricao }}
                            </span>
                            <span class="mdl-list__item-text-body">
                              {{ $reserva->data_inicio }}
                            </span>
                        </span>

                        <span class="mdl-list__item-secondary-content">
                            <i class="material-icons mdl-list__item-avatar ">person</i>
                            <span class="mdl-list__item-text-body">{{ $reserva->user_nome }}</span>
                        </span>
                    </li>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a href="{{ URL::route('reservas.show', array($reserva->id) )}}"
                       class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        Mais detalhes
                    </a>
                    @if($reserva->user_nome == $user)
                        <a href="{{ URL::route('reservas.edit', array($reserva->id) )}}"
                           class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            Editar
                        </a>
                    @endif
                </div>
            </div>
            <br>
        @endforeach

    @else
        Sem dados para exibir.
    @endif
</div>
@stop