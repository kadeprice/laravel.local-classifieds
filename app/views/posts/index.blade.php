

@foreach($posts as $post)
    {{ $post->title }} - {{ $post->user->fname }} <br/>
    {{ $post->body }}<br/>
@endforeach