<div class="h-screen w-full flex flex-col">
    <div class="bg-white border-b border-gray-300 p-4">
        <div class="flex items-center justify-between">
            <div class="text-lg font-semibold">
                Welcome, {{ auth()->user()->name }}
            </div>
            <div>
                @livewire('dropdown') <!-- Include the dropdown component here -->
            </div>
        </div>
    </div>
    <div class="flex-grow bg-gray-100 flex flex-col  sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                List of Books
            </h2>
            <div class="mt-4">
                <table class="min-w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4 text-left">Title</th>
                            <th class="py-2 px-4 text-left">Author</th>
                            <th class="py-2 px-4 text-left">Publication Year</th>
                            <th class="py-2 px-4 text-left">Publisher</th>
                            <th class="py-2 px-4 text-left">ISBN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="border-b border-gray-300">
                                <td class="py-2 px-4">{{ $book->title }}</td>
                                <td class="py-2 px-4">{{ $book->author }}</td>
                                <td class="py-2 px-4">{{ $book->publication_year }}</td>
                                <td class="py-2 px-4">{{ $book->publisher }}</td>
                                <td class="py-2 px-4">{{ $book->isbn }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
