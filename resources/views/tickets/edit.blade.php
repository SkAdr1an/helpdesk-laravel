<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Ticket #{{ $ticket->id }}
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

                    @if ($errors->any())
                        <div class="mb-4 rounded border border-red-200 bg-red-50 p-4 text-red-800">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('tickets.update', $ticket) }}" class="space-y-4">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input id="title" name="title" type="text"
                                   value="{{ old('title', $ticket->title) }}"
                                   class="mt-1 block w-full rounded border-gray-300"
                                   required maxlength="255">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" name="description" rows="6"
                                      class="mt-1 block w-full rounded border-gray-300"
                                      required>{{ old('description', $ticket->description) }}</textarea>
                        </div>

                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select id="status" name="status" class="mt-1 block w-full rounded border-gray-300" required>
                                <option value="open" @selected(old('status', $ticket->status) === 'open')>open</option>
                                <option value="closed" @selected(old('status', $ticket->status) === 'closed')>closed</option>
                            </select>
                        </div>

                        <div class="flex gap-3">
                            <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                Save
                            </button>

                            <a href="{{ route('tickets.show', $ticket) }}"
                               class="px-4 py-2 rounded border hover:bg-gray-100 transition">
                                Cancel
                            </a>
                        </div>
                    </form>

                    <hr class="my-6">

                    <form method="POST" action="{{ route('tickets.destroy', $ticket) }}"
                          onsubmit="return confirm('Tem certeza que deseja deletar este ticket?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                            Delete Ticket
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
