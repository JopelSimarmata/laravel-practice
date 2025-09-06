<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>


  @foreach ($posts as $post)

    <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post['id'] }}">
      <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-950">{{ $post['title'] }}</h2>
    </a>
    <div>
      <a href="#">{{ $post['author'] }}</a> | <time>20 January 2024</time>
    </div class="text-gray-500">
    <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
    <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
  </article>
    
  @endforeach




</x-layout>