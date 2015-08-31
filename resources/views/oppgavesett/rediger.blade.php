@extends('pur')
@section('content')

    @include('oppgavesett._rediger-undermeny')

    <div class="container">

        <h1>Rediger oppgavesett</h1>

        @include('_feilmeldinger')

        {!! Form::model($oppgavesett, ['route' => ['oppgavesett.oppdater', $oppgavesett->id], 'method' => 'PATCH']) !!}

        @include('oppgavesett._skjema', $oppgavesett)

        {!! Form::close() !!}
{{--
        <section class="padding">
            <h2>Oppgaver</h2>
            @include('oppgaver._liste', ['oppgaver' => $oppgavesett->oppgaver, 'kanOpprette' => true])
        </section>
--}}
    </div>

@endsection

