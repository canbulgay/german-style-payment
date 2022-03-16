<h1>
    Burası Dashboard!
    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
</h1>