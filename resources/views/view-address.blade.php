<x-layout.app>
    <body>
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto">
                <h1 class="text-2xl font-bold text-center text-indigo-600 sm:text-3xl">
                    <p>{{ $address->address }}</p>
                </h1>    
            </div>
        </div>
        <div class="grid-cols-1 sm:grid md:grid-cols-2 ">
            <div class="mx-12 mt-6 flex flex-col self-start rounded-lg bg-white rounded-lg shadow-2xl dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
                <a href="#!">
                    <div class="p-6">
                        <i class="fa-solid fa-calculator fa-2xl rounded-t-lg mt-6 text-cyan-500" style="font-size: 60px;""></i>
                        <h5 class="mb-2 mt-6 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Tax Returns
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            Here you can upload, store, and view your tax returns and payments.
                        </p>
                    </div>
                </a>
            </div>
            <div class="mx-12 mt-6 flex flex-col self-start rounded-lg bg-white rounded-lg shadow-2xl dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
                <a href="#!">
                    <div class="p-6">
                        <i class="fa-solid fa-file-invoice-dollar fa-2xl rounded-t-lg mt-6 text-cyan-500" style="font-size: 60px;"></i>
                        <h5 class="mb-2 mt-6 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Invoices & Receipts
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            Here you can upload, store, view, and manage your invoices and receipts. 
                        </p>
                    </div>
                </a>
            </div>
            <div class="mx-12 mt-6 mb-12 flex flex-col self-start rounded-lg bg-white rounded-lg shadow-2xl dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
                <a href="#!">
                    <div class="p-6">
                        <i class="fa-solid fa-pen-to-square fa-2xl rounded-t-lg mt-6 text-cyan-500" style="font-size: 60px;""></i>
                        <h5 class="mb-2 mt-6 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                            Regulatory Certificates
                        </h5>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            Here you can upload, store, and view your required landlord certifications.
                        </p>
                    </div>
                </a>
            </div>
            <div class="mx-12 mt-6 mb-12 flex flex-col self-start rounded-lg bg-white rounded-lg shadow-2xl dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
                <a href="#!">
                <div class="p-6">
                    <i class="fa-solid fa-file-signature fa-2xl rounded-t-lg mt-6 text-cyan-500" style="font-size: 60px;""></i>
                    <h5 class="mb-2 mt-6 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        Tenancy Agreements
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        Here you can upload, store, and view your tenancy agreements.
                    </p>
                </div>
                </a>
            </div>
        </div>
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto">
                <a href="/addresses" class="block text-center px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
                    Back to Addresses
                </a>  
            </div>
        </div>
    </body>
</x-layout.app>