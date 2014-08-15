@extends('master')

@section('content')

    <div class="container">

        <h1 class="text-center">Best of moods</h1>

      <div class="col-md-6">


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

        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item disabled">Latest entries</li>
                @foreach ($latest as $late)
                <li class="list-group-item">
                    <span class="badge">{{ $late->created_at->diffForHumans() }}</span>
                    <p>{{{ $late->type }}}

                </li>
                @endforeach
            </ul>
            <p>Number of mood's:</p>

                <h1 class="number-moods"><span class="counter">{{ $total }}</span></h1>


            {{ HTML::link('/', 'Back', ['class' => 'btn btn-primary'])}}


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
