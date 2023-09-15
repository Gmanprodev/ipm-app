<x-layout.app>
    <body>
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto">
                <h1 class="text-2xl font-bold text-center text-indigo-600 sm:text-3xl">
                    <p>Edit Address</p>
                </h1>
        
                <form action="/addresses/{{ $address->id }}/edit" method="POST" class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl">
                    @csrf
                    <p class="text-lg font-medium text-center">{{ $address->address }}</p>
                    <div>
                        <label class="text-sm font-medium">Address</label>
            
                        <div class="relative mt-1">
                            <input
                            type="text"
                            name="address"
                            value="{{ $address->address }}"
                            required
                            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                            />
                        </div>
                    </div>
                    <button type="submit" class="block w-full px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                        Update Address
                    </button>
                    
                    <a href="/addresses" class="block w-full text-center px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                        Back to Addresses
                    </a>  
                </form>
            </div>
        </div>
    </body>
</x-layout.app>