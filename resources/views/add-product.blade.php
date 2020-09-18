<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <form method="POST" action="{{route('product.create')}}">
                            @csrf
                            <div>
                                <label class="block font-medium text-sm text-gray-700">
                                    Name
                                </label>

                                <input class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="name"
                                       required="required" autofocus="autofocus" autocomplete="name">

                            </div>

                            <div class="mt-4">
                                <label class="block font-medium text-sm text-gray-700">
                                    SKU
                                </label>

                                <input class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="sku"
                                       required="required">

                            </div>

                            <div class="mt-4">
                                <label class="block font-medium text-sm text-gray-700">
                                    Price
                                </label>

                                <input class="form-input rounded-md shadow-sm block mt-1 w-full" type="text"
                                       name="price" required="required">

                            </div>

                            <div class="mt-4">
                                <label class="block font-medium text-sm text-gray-700">
                                    Category
                                </label>
                                <select class="form-input rounded-md shadow-sm block mt-1 w-full" name="category">
                                    <option>category 1</option>
                                    <option>category 2</option>
                                    <option>category 3</option>
                                </select>

                            </div>

                            <div class="mt-4">
                                <label class="block font-medium text-sm text-gray-700">
                                    Quantity
                                </label>

                                <input class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="qty">

                            </div>

                            <div class="mt-4">
                                <label class="block font-medium text-sm text-gray-700">
                                    Image
                                </label>

                                <input class="form-input rounded-md shadow-sm block mt-1 w-full" type="file"
                                       name="image">

                            </div>

                            <div class="flex items-center justify-end mt-4">

                                <button type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                                    Create
                                </button>

                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </main>

</x-app-layout>


