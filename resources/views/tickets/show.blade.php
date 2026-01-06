<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ticket #{{ $ticket->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('success'))
                        <div class="mb-4 rounded border border-green-200 bg-green-50 p-4 text-green-800">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="space-y-2">
                        <div>
                            <div class="text-sm text-gray-500">Title</div>
                            <div class="font-semibold">{{ $ticket->title }}</div>
                        </div>

                        <div>
                            <div class="text-sm text-gray-500">Description</div>
                            <div>{{ $ticket->description }}</div>
                        </div>

                        <div>
                            <div class="text-sm text-gray-500">Status</div>
                            <div class="font-semibold">{{ $ticket->status }}</div>
                        </div>
                    </div>

                    <div class="mt-6 flex gap-3">

            
                        <form method="POST" action="{{ route('tickets.destroy', $ticket) }}"
                              onsubmit="return confirm('Tem certeza que deseja deletar este ticket?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-4 py-2 rounded bg-red-600 text-white hover:bg-red-700 transition">
                                Delete
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
