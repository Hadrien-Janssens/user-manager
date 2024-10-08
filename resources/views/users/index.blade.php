<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="flex items-center gap-3 mb-5">
             <h1 class="text-2xl font-bold ">Liste des Utilisateurs</h1>
           <a class="text-white" href="{{route('users.create')}}" :active="request()->routeIs('dashboard')">
            <button class="bg-blue-500 rounded-sm px-2 transition hover:bg-blue-600">       Créer</button>
            </a>
        </div>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nom</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Rôle</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->role }}</td>
                    <td class="py-2 px-4 border-b">
                        <button class="px-2 p-0.5"><a href="{{ route('users.show', $user->id) }}" class="text-blue-500">Voir</a></button>
                        
                        <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500 ml-2">Modifier</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>