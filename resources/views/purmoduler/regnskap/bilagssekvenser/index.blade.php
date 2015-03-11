@extends('pur')
@section('content')

    <h1>Bilagssekvenser</h1>
    <div class="list-group panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-sm-5">
                    <b>Beskrivelse:</b>
                </div>
                <div class="col-sm-2">
                    <b>Sekvenstype:</b>
                </div>
                <div class="col-sm-2">
                    <b>Opprettet:</b>
                </div>
                <div class="col-sm-1">
                    <b>Laget av:</b>
                </div>
            </div>
        </div>
        @foreach($bilagssekvenser as $bilagssekvens)
            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-5">
                        <a href="{!! URL::route('bilagssekvens.show', $bilagssekvens->id) !!}">
                            {{ $bilagssekvens->oppgave->beskrivelse }}
                        </a>
                    </div>
                    <div class="col-sm-2">
                        {{ $bilagssekvens->sekvenstype }}
                    </div>
                    <div class="col-sm-2">
                        {{ $bilagssekvens->oppgave->tid_opprettet }}
                    </div>
                    <div class="col-sm-1">
                        {{ $bilagssekvens->oppgave->skaper->etternavn }}
                    </div>
                    <div class="col-sm-2">
                        <div class="btn-group">
                            <a href="{!! URL::route('bilagssekvens.show', $bilagssekvens->id) !!}"
                               class="btn btn-default">Vis</a>
                            <a href="{!! URL::route('bilagssekvens.show', $bilagssekvens->id . '/edit') !!}"
                               class="btn btn-default"><span class="fa fa-edit"></span> Rediger</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@section('scripts')


@endsection
@endsection