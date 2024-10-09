<x-app-layout>

    <article class="w-[500px] rounded-md mx-auto mt-20 flex flex-col">
       <h2 class="text-2xl font-bold">Fiche utilisateur :</h2>
       <hr>
  <p> Nom : <span class=" font-semibold">{{ $user->name}}</span></p>
  <p>Email : <span class=" font-semibold">{{ $user->email}}</span></p>
  <p>Rôle : <span class=" font-semibold">{{ $user->role}}</span></p>
  <div class="border px-2 py-0.5 rounded-sm shadow hover:bg-neutral-200 mt-4 transition text-center">

    <a href="{{ route('users.edit', $user->id) }}" >Modifier</a>
</div>
     </article>
</x-app-layout>
