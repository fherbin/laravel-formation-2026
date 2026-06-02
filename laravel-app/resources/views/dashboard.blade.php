<x-app-layout header="Tableau de bord">
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
