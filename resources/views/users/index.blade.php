<x-app-layout>
    <div class="container mx-auto py-8">
        <form action="{{ route('users.index')}}" method="GET"  class="flex gap-3">
            <input type="text" class="rounded" name="search" value="{{request()->input('search')}}">
            <button class="bg-blue-500 rounded-sm px-2 transition hover:bg-blue-60 text-white">Rechercher</button>
        </form>
        <div class="flex items-center gap-3 mb-5">
             <h1 class="text-2xl font-bold   dark:text-white">Liste des Utilisateurs</h1>
           <a class="text-white" href="{{route('users.create')}}" >
            <button class="bg-blue-500 rounded-sm px-2 transition hover:bg-blue-600 ">       Créer</button>
            </a>
        </div>
        @if(session('success'))
            <div class="bg-green-100 border border-green-300 text-green-500 p-2 my-2 rounded font-bold">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-200 dark:text-white dark:bg-transparent">
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
                    <td class="py-2 px-4 border-b flex flex-col gap-1  ">
                       <a href="{{ route('users.show', $user->id) }}" class="text-blue-500 border border-blue-500 rounded px-1 ml-2 text-center">Voir</a>

                        <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500 ml-2 border border-yellow-500 rounded px-1 text-center">Modifier</a>


                        <form class="flex " action="{{ route('users.destroy', $user->id) }}" method="POST" >
                            @method('DELETE')
                            @csrf
                            <button class="text-red-500 ml-2 border border-red-500 rounded px-1 text-center w-full">
                            Supprimer
                        </button></form>
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
