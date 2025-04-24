<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <article class="py-8 max-w-screen-md ">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div class="text-base text-gray-500">
      <a href="#">{{ $post->user->name }}</a> | {{ $post->created_at->format('j F Y') }}
    </div>
    <p class="my-4 font-light">{{ $post['body'], 100 }}</p>
    <a href="/posts" class="text-blue-500 font-medium hover:underline">&laquo;Back to Posts</a>
  </article>

</x-layout>