<div id="{{'trial-' . $trial->id}}" class="trial">
    <div class="trial-movie">
        @component('components.instagram')
            @slot('url', 'https://www.instagram.com/p/Bw4TGbqlSoZ/')
        @endcomponent
    </div>
    <div class="trial-content">
        {{ $trial->content }}
    </div>
    <div class="trial-buttons">
        <div class="trial-like"></div>
    </div>
    <div class="trial-comments">
        <details>
            <summary>Comments</summary>
            <form action="{{ url('comments') }}" method="post">
                @csrf {{-- CSRF保護 --}}
                @method('POST') {{-- 疑似フォームメソッド --}}
                <div class="form-group">
                    <input id="comment" type="text" class="form-control" name="comment" required autofocus>
                </div>
                <input type="hidden" name="trial_id"　value="{{ $trial->id }}">
                <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </form>
            @foreach ($trial->comments as $comment)
            <div class="trial-comment">
                <div class="trial-comment-content">{{ $comment->comment }}</div>
                <div class="trial-comment-user">{{ $comment->user->name }}</div>
            </div>
            @endforeach
        </details>
    </div>
</div>
