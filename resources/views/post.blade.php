<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md" >
      <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-950">{{ $post['title'] }}</h2>
    <div>
      By
      <a href="/authors/{{ $post->author->username }}" class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a> in <a class="hover:underline text-base text-gray-500">{{ $post->category->category }}</a> | <time>20 January 2024</time>
    </div class="text-gray-500">
    <p class="my-4 font-light">{{ $post['body'], 100 }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
  </article>




</x-layout>