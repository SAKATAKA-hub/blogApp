<x-layout>
    <x-slot name="title">
        {{ $post }} - My BBS
    </x-slot>

    {{-- 戻るボタン --}}
    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>
        <span>{{ $post->title }}</span>
        {{-- 編集ボタン --}}
        <a href="{{ route('posts.edit',$post) }}">[Edit]</a>
        <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete_post">
            @method('DELETE')
            @csrf
            <button class="btn">[×]</button>
        </form>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <h2>Coments</h2>
    <ul>
        <li>
            <form method="post" action="{{route('comment.store', $post)}}" class="comment_form">
                @csrf
                <input type="text" name="body">
                <button>Add</button>
            </form>
        </li>

        @foreach ($post->comments as $comment)
        <li>{{$comment->body}}</li>
        @endforeach
    </ul>

    <script>
        'use strict';

        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

                if (!confirm('Sure to delete?')) {
                    return;
                }

                e.target.submit();
            });
        }
    </script>
</x-layout>
