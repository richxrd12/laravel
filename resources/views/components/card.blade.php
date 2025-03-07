<div class="card">
    <h3>{{ $title }}</h3>
    <p>{{ $text }}</p>
    <a href="/blog/{{ $id }}">Ver post</a>
    {{ $slot }}
</div>