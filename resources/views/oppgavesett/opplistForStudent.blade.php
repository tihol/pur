@extends('pur')
@section('content')
    @include('_undermeny')
    <div class="container">
        <h1>Oppgavesett</h1>
        <section class="padding responsive-table">
            <h2>Alle oppgavesett</h2>

            <!-- TODO: Tilpass kolonner til visning for student -->

            <div class="list-group panel panel-primary" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel-heading hidden-xs">
                    <div class="row">
                        <div class="col-sm-2">
                            <b>Tittel:</b>
                        </div>
                        <div class="col-sm-2">
                            <b>Beskrivelse:</b>
                        </div>
                        <div class="col-sm-2">
                            <b>Status:</b>
                        </div>
                        <div class="col-sm-2">
                            <b>Åpen fra:</b>
                        </div>
                        <div class="col-sm-2">
                            <b>Åpen til:</b>
                        </div>
                        <div class="col-sm-2 actions">
                            <b>Handlinger:</b>
                        </div>
                    </div>
                </div>

                @foreach($oppgavesettsamling as $oppgavesett)
                    {!! Form::model($oppgavesett, ['route' => ['besvarelser.lagre', $oppgavesett], 'method' => 'POST']) !!}


                    <div class="list-group-item">
                        <div class="row">
                            <div class="col-sm-2">
                                <span class="visible-xs-inline">Tittel: </span>{{ $oppgavesett->tittel }}
                            </div>
                            <div class="col-sm-2">
                                <span class="visible-xs-inline">Beskrivelse: </span>{{ $oppgavesett->beskrivelse }}
                            </div>
                            <div class="col-sm-2">
                                <span class="visible-xs-inline">Status: </span>{{$oppgavesett->status()}}
                            </div>
                            <div class="col-sm-2">
                                <span class="visible-xs-inline">Åpen fra: </span>{{ $oppgavesett->tidAapent() }}
                            </div>
                            <div class="col-sm-2">
                                <span class="visible-xs-inline">Åpen til: </span>{{ $oppgavesett->tidLukket() }}
                            </div>

                            <div class="col-sm-2 actions">

                                <div class="pull-right">
                                    <!-- <a href="{{ URL::route('oppgavesett.vis', $oppgavesett) }}" class="btn btn-default"
                                   data-toggle="tooltip" data-placement="top" data-container="body"
                                   title="Vis statistikk">
                                    <span class="fa fa-bar-chart"></span>
                                </a> -->
                                @if($oppgavesett->erAapent())
                                    <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-container="body" title="Opprett besvarelse">
                                        <span class="fa fa-play"></span>
                                    </button>
                                @else
                                    <button type="button" class="btn btn-default disabled" data-toggle="tooltip" data-placement="top" data-container="body" title="Oppgavesettet er ikke åpent">
                                        <span class="fa fa-play"></span>
                                    </button>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}
                @endforeach
            </div>
        </section>
        @if( ! $besvarelser->isEmpty() )
            <section class="padding">
                <h2>Mine besvarelser</h2>
                @include('besvarelser._liste', $besvarelser)
            </section>
        @endif
    </div>



@endsection
