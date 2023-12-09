@if ($errors->any())
<div class="alert alert-danger" style="color: red;text-align:left">
    @foreach ($errors->all() as $errorItem)
    <h1 style="font-size: 16px;">{{ $errorItem }}</h1>
    @endforeach
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger" style="color: red;">
    {{ Session::get('error') }}
</div>
@endif

<!-- @if(Session::has('message'))
<div class="alert alert-info">
    {{ Session::get('message') }}
</div>
@endif -->

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif