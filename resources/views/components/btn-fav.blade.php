<form style="display:inline" action="{{ url('like_'.$model.'s') }}" method="post">
    @csrf
    @method('POST')
    <input type="hidden" name="{{$model.'_id'}}"　value="{{ $id }}">
    <button type="submit" class="btn btn-danger">
        {{ __('Fav') }}
    </button>
</form>