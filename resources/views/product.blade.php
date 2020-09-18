<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product List') }}
        </h2>
        <a href="{{route('product.add')}}" class="btn btn-info">Add</a>
        @if(Session::has('product-created'))
            <div>
            <h4>Product created Successfully</h4>
            </div>
        @endif
    </x-slot>


    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">


{{--                        {{dd($products)}}--}}

                        <table class="table">
                            <thead>
                            <tr>
{{--                                <th scope="col">ID</th>--}}
                                <th scope="col">Name</th>
                                <th scope="col">SKU</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
{{--                                    <td>{{$product->id}}</td>--}}
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->qty}}</td>
                                    <td>{{$product->image}}</td>
                                    <td><a href="/product/edit/{{$product->id}}" class="btn btn-success">edit</a> | <a href="/delete-product/{{$product->id}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>


