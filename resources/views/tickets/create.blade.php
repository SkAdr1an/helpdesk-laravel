<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Ticket
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('tickets.store') }}" class="space-y-4">
                        @csrf

                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input id="title" name="title" type="text"
                                   class="mt-1 block w-full rounded border-gray-300"
                                   required maxlength="255">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" name="description" rows="5"
                                      class="mt-1 block w-full rounded border-gray-300"
                                      required></textarea>
                        </div>

                        <div style="display:flex; gap:12px; align-items:center;">
                            <input type="submit"
                                   value="Create Ticket"
                                   style="all: unset; cursor:pointer; padding:8px 16px; border-radius:6px; background:#2563eb; color:white;" />

                            <a href="{{ route('tickets.index') }}"
                               style="display:inline-block; padding:8px 16px; border-radius:6px; border:1px solid #d1d5db; color:#111827; text-decoration:none;">
                                Cancel
                            </a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
