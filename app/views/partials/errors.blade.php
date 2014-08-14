@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
           <ul>{{ $error }}</ul>
        @endforeach
    </div>
@endif


