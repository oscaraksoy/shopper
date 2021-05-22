@extends('shopper::layouts.default')
@section('title', __('Dashboard'))

@section('content')

    <div class="flex items-center space-x-2">
        <svg class="h-8 w-8 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8 3.6a1.2 1.2 0 1 1 2.4 0v6.6a.6.6 0 1 0 1.2 0V4.8a1.2 1.2 0 1 1 2.4 0v5.4a.6.6 0 1 0 1.2 0v-3a1.2 1.2 0 1 1 2.4 0v6a8.401 8.401 0 0 1-16.16 3.215A8.4 8.4 0 0 1 3.6 13.2v-2.4a1.2 1.2 0 0 1 2.4 0v3a.6.6 0 1 0 1.2 0v-9a1.2 1.2 0 0 1 2.4 0v5.4a.6.6 0 1 0 1.2 0V3.6z" />
        </svg>
        <h2 class="text-3xl leading-8 font-bold text-gray-900 dark:text-white sm:leading-9 sm:truncate">
            @lang('shopper::messages.dashboard.title')
        </h2>
    </div>

    <div class="my-8 bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
        <div class="p-6 border-b border-gray-200 dark:border-gray-600">
            <div class="text-xl text-gray-900 dark:text-white font-medium">
                {{ __('Start with the basic for your online store') }}
            </div>

            <div class="mt-4 text-gray-500 dark:text-gray-400">
                @lang('shopper::messages.dashboard.description')
            </div>
        </div>

        <div class="bg-gray-50 dark:bg-gray-700 grid grid-cols-1 md:grid-cols-2">
            <div class="px-6 py-5">
                <div class="flex items-center">
                    <x-heroicon-o-code class="w-6 h-6 text-blue-600" />
                    <h4 class="ml-4 text-base text-gray-900 dark:text-white leading-6 font-medium">Documentation</h4>
                </div>

                <div class="ml-10">
                    <div class="mt-4 text-sm text-gray-500 dark:text-gray-400">
                        {{ __('Get to know Laravel Shopper by understanding its capabilities the right way, whether you are new to the framework or have already worked on it. This documentation is made for you.') }}
                    </div>

                    <a href="https://docs.laravelshopper.io" class="group">
                        <div class="mt-3 flex items-center text-sm font-medium text-blue-600">
                            <span>{{ __('Visit the documentation') }}</span>

                            <span class="ml-1 text-blue-500 transform translate-x-0 group-hover:translate-x-1 transition duration-200 ease-in-out">
                                <x-heroicon-o-arrow-narrow-right class="w-5 h-5" />
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="px-6 py-5 border-t border-gray-200 dark:border-gray-600 sm:border-t-0">
                <div class="flex items-center">
                    <x-heroicon-o-film class="w-6 h-6 text-blue-600" />
                    <h4 class="ml-4 text-base text-gray-900 dark:text-white leading-6 font-medium">{{ __('Screencasts') }}</h4>
                </div>

                <div class="ml-10">
                    <div class="mt-4 text-sm text-gray-500 dark:text-gray-400">
                        {{ __('Learn how to Learn to build a professional online store from start to finish with complete Shopper video lessons and sample codes to quickly set up your store.') }}
                    </div>

                    <a href="https://docs.laravelshopper.io/screencasts" class="group">
                        <div class="mt-3 flex items-center text-sm font-medium text-blue-600">
                            <span>{{ __('Start watching Shopper') }}</span>

                            <span class="ml-1 text-blue-500 transform translate-x-0 group-hover:translate-x-1 transition duration-200 ease-in-out">
                                <x-heroicon-o-arrow-narrow-right class="w-5 h-5" />
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="px-6 py-5 border-t border-gray-200 dark:border-gray-600">
                <div class="flex items-center">
                    <x-heroicon-o-color-swatch class="w-6 h-6 text-blue-600" />
                    <h4 class="ml-4 text-base text-gray-900 dark:text-white leading-6 font-medium">{{ __('Themes') }}</h4>
                </div>

                <div class="ml-10">
                    <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        {{ __('Your store is the website for your products. Get up and running quickly with an available theme, specially created for Shopper. Edit as needed or create your own theme.') }}
                    </div>

                    <a href="#" class="group">
                        <div class="mt-3 flex items-center text-sm font-medium text-blue-600">
                            <span>{{ __('Find a Theme') }}</span>

                            <span class="ml-1 text-blue-500 transform translate-x-0 group-hover:translate-x-1 transition duration-200 ease-in-out">
                                <x-heroicon-o-arrow-narrow-right class="w-5 h-5" />
                            </span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="px-6 py-5 border-t border-gray-200 dark:border-gray-600">
                <div class="flex items-center">
                    <x-heroicon-o-book-open class="w-6 h-6 text-blue-600" />
                    <h4 class="ml-4 text-base text-gray-900 dark:text-white leading-6 font-medium">{{ __('Add product') }}</h4>
                </div>

                <div class="ml-10">
                    <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        {{ __("Add products and prices to start selling. Tailor it to your store's needs with an unlimited number of products (depending on the size of your store), brands, collections, and variations.") }}
                    </div>

                    @can('add_products')
                        <a href="{{ route('shopper.products.create') }}" class="group">
                            <div class="mt-3 flex items-center text-sm font-medium text-blue-600">
                                <span>{{ __('Add product to your store') }}</span>

                                <span class="ml-1 text-blue-500 transform translate-x-0 group-hover:translate-x-1 transition duration-200 ease-in-out">
                                    <x-heroicon-o-arrow-narrow-right class="w-5 h-5" />
                                </span>
                            </div>
                        </a>
                    @endcan
                </div>
            </div>
        </div>
    </div>

@endsection
