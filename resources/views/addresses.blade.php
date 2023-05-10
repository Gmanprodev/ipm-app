<x-layout class="app">
    <body>
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto">
                <h1 class="text-2xl font-bold text-center text-indigo-600 sm:text-3xl">
                    <p>Property Addresses</p>
                </h1>
                <div class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl">
                    <table class="table-auto w-full">
                        <thead class="text-left tracking-wider">
                            <tr>
                                <th class="p-4 ">Address</th>
                            </tr>
                            </thead>
                            
                            @forelse($addresses as $address)
                        
                                <tbody>
                                    <tr class="mt-6 rounded">
                                        <td class="p-4">{{ $address->address }}</td>
                                        <td class="p-4">
                                            <a href="/addresses/{{ $address->id }}/view" class="w-full justify-center items-center px-3 py-1 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                                                View
                                            </a>
                                        </td>
                                        <td class="p-4">
                                            <a href="/addresses/{{ $address->id }}/edit" class="w-full justify-center items-center px-3 py-1 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                                                Edit
                                            </a>
                                        </td>
                                        <td class="p-4">
                                            <form method="POST" action="/addresses/{{ $address->id }}/delete">
                                                @csrf
                                                <button type="submit" class="w-full justify-center items-center px-1 py-1 text-sm font-medium text-white bg-red-600 rounded-lg">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            
                            @empty
    
                                <p class="text-lg font-medium text-center">No addresses found!</p>
    
                            @endforelse

                    </table>
                </div>
                <div class="flex flex-col items-center justify-center mt-10">
                    <a href="/addresses/create" class="text-center w-1/2 mb-5 px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">Add New Address</a>
                    
                    <a href="/logout" class="text-center w-1/2 px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        @csrf
                    </form>    
                </div>
            </div>
        </div>
    </body>
</x-layout>