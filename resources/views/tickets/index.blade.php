<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Tickets
            </h2>

            <a href="{{ route('tickets.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                + New Ticket
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('success'))
                        <div class="mb-4 rounded border border-green-200 bg-green-50 p-4 text-green-800">
                            {{ session('success') }}
                        </div>
                    @endif

                    @forelse ($tickets as $ticket)
                        <div class="border p-4 mb-4 rounded">
                            <h3 class="font-bold text-lg">{{ $ticket->title }}</h3>
                            <p class="mt-1">{{ $ticket->description }}</p>

                            <div class="flex items-center justify-between mt-3">
                                <span>Status: <b>{{ $ticket->status }}</b></span>

                                <div class="flex gap-3">
                                    <a href="{{ route('tickets.show', $ticket) }}"
                                       class="text-blue-600 underline">
                                        View
                                    </a>

                                    <a href="{{ route('tickets.edit', $ticket) }}"
                                       class="text-gray-700 underline">
                                        Edit
                                    </a>

                                    <form method="POST" action="{{ route('tickets.destroy', $ticket) }}"
                                          onsubmit="return confirm('Deletar este ticket?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600 underline" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No tickets found.</p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
