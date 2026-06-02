<x-app-layout header="Tableau de bord">
    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif
    <p class="mb-4">
        Bienvenue, {{ auth()->user()->name }}
        @role('admin')
            <span class="text-xs bg-red-100 text-red-700 px-2 py-0.5 rounded">admin</span>
        @else
            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded">user</span>
        @endrole
    </p>
    <a href="{{ route('posts.index') }}" class="text-blue-600 underline">→ Gérer les articles</a>
</x-app-layout>
