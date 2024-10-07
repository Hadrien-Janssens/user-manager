<x-app-layout>
    
    <article class="w-[500px] rounded-md mx-auto mt-20">
       <h2 class="text-2xl font-bold">Fiche utilisateur :</h2>
       <hr>
  <p> Nom : <span class=" font-semibold">{{ $user->name}}</span></p>
  <p>Email : <span class=" font-semibold">{{ $user->email}}</span></p>
  <p>Rôle : <span class=" font-semibold">{{ $user->role}}</span></p>
     </article>
</x-app-layout>