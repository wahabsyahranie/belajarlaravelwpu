<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="/posts" class="text-sm hover:underline inline-flex items-center font-medium text-blue-600">&laquo;
              Back to All Posts
            </a>
            <address class="flex items-center my-6 not-italic">
                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                    <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->user->name }}">
                    <div>
                        <a href="/posts?author={{ $post->user->username }}" rel="author" class="lg:text-xl font-bold text-gray-900 dark:text-white text-sm">{{ $post->user->name }}</a>
                        <p class="text-sm lg:text-xl text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{ $post->created_at->diffForHumans() }}</time></p>
                        <a href="/posts?category={{ $post->category->slug }}">
                          <span class="bg-blue-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">{{ $post->category->name }}</span>
                        </a>
                    </div>
                </div>
            </address>
            <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post['title'] }}</h1>
          </header>
            <p class="lead">{{ $post['body'], 100 }}</p>
        </article>
    </div>
  </main>

</x-layout>