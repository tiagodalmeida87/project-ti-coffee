@extends('layouts.default')

@section('content')
    <section class="text-gray-600 overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="foto produto" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                style="max-height:275px" src="{{ $product->cover }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                    <p class="leading-relaxed">{{ $product->description }}</p>
                    @if ($product->stock)
                        <div class="my-3">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">Em estoque</span>
                        </div>
                    @endif
                    <div class="flex border-t-2 border-gray-100 mt-6 pt-6">
                        <span class="title-font font-medium text-2xl text-gray-900">R$ {{ $product->price }}</span>
                        <a class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Comprar</a>

                            {{-- add to Cart --}}
                            {{-- <add-to-cart-button product-id="{{$product->id}}"
                                user-id="{{auth()->user()->id ?? 0}}"
                            /> --}}
                            <a href="{{ route('product', $product->slug) }}"
                                
                                style="margin-left: 3%" class="inline-flex items-center bg-gray-100 border-0 py-1 px-1 focus:outline-none hover:bg-gray-200 rounded text-base md:mt-0">Carrinho 
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                
                                {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg> --}}
                            </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
