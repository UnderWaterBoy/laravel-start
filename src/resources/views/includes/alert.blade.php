@if(session()->pull('alert'))
    <div class="alert alert-success mb-0 rounded-0 text-center small py-2" role="alert">
        {{session('alert')}}
    </div>
@endif

