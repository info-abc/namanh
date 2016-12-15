@if (count($errors->all()) > 0)
<div class="alert alert-warning">
	{{ HTML::ul($errors->all()) }}
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success">
    @if(is_array($message))
    @foreach ($message as $m)
    {{ $m }}
    @endforeach
    @else
    {{ $message }}
    @endif
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning">
    @if(is_array($message))
    @foreach ($message as $m)
    {{ $m }}
    @endforeach
    @else
    {{ $message }}
    @endif
</div>
@endif
