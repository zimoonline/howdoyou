@extends('master')

@section('content')

    <div class="container">

        <h1 class="text-center">Best of moods</h1>

      <div class="col-md-4">
          <ul class="list-group">
              <li class="list-group-item disabled">Most popular</li>
              @foreach ($moods as $mood)
              <li class="list-group-item">
                      <span class="badge">{{ $mood->count }}</span>
                      <p>{{{ $mood->type }}}

                  </li>
              @endforeach
          </ul>
      </div>

        <div class="col-md-4">
            <ul class="list-group">
              <li class="list-group-item disabled">Entries in last 24h</li>
              @foreach ($newMoods as $new)
              <li class="list-group-item">
                  <p>{{{ $new->type }}}

              </li>
              @endforeach
          </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-group">
            <li class="list-group-item disabled">Latest 5 entries</li>

            @foreach ($latest as $late)
            <li class="list-group-item">
                <span class="badge">{{ $late->updated_at->diffForHumans() }}</span>
                {{{ $late->type }}} | <br><h6>From: {{ $late->ip }}</h6>
            </li>
            @endforeach

        </ul>

            <div class="col-md-4">
                <p>Number of moods:</p>
                    <h1 class="number-moods">
                        <span class="counter">{{ $total }}</span>
                    </h1>
                {{ HTML::link('/', 'Back', ['class' => 'btn btn-primary']) }}
            </div>

      </div>




    </div>
    <div class="text-center">
        {{ $moods->links() }}
        <div>
            {{ HTML::link('/', 'Home', ['class' => 'home']) }}
        </div>
        <div>Created by {{ HTML::mailto('sashafishte@gmail.com', 'sashafishter@gmail.com', ['class' => 'home']) }}</div>
    </div>

@stop
