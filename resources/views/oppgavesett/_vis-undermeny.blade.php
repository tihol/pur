@extends('_undermeny')

@section('menuleft')
    <li>
        {!! Form::open(['route' => ['oppgavesett.test', $oppgavesett], 'method' => 'POST', 'class' => 'form-inline']) !!}
        <button type="submit" class="btn-menu" data-toggle="tooltip" data-placement="bottom"
                data-container="body" title="Test oppgavesett"><span class="fa fa-binoculars"></span> Test oppgavesett
        </button>
        {!! Form::close() !!}
    </li>
    @unless($oppgavesett->erPublisert())
        <li>
            <a id="submenuitem1" href="{{ URL::route('oppgavesett.rediger', $oppgavesett) }}" data-toggle="tooltip"
               data-placement="bottom" data-container="body" title="Rediger oppgavesett"><span
                        class="fa fa-plus"></span> Rediger oppgavesett</a>
        </li>
        <li>
            {!! Form::open(['route' => ['oppgavesett.slett', $oppgavesett], 'method' => 'DELETE', 'class' => 'form-inline']) !!}
            <button type="submit" class="btn-menu bekreft-slett" data-toggle="tooltip" data-placement="bottom"
                    data-container="body" title="Slett oppgavesett"><span class="fa fa-trash"></span> Slett oppgavesett
            </button>
            {!! Form::close() !!}
        </li>
    @endunless
@endsection
