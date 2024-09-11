<x-guest-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          @if($user)
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 shadow-lg" src="{{ asset($user->qrcode) }}" alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->nom }} {{ $user->prenom }}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->getRoleNames() }}</span>
                <div class="flex mt-4 md:mt-6">
                    <span class="text-sm text-gray-500 dark:text-gray-400"><a href="tel:{{ $user->telephone }}">{{ $user->telephone }}</a></span>
                </div>
                <div class="flex mt-2 md:mt-3">
                    <span class="text-sm text-gray-500 dark:text-gray-400"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></span>
                </div>
            </div>
            @else
            <h1>Oupps! L'utilisateur n'existe pas dans la base de données.</h1>
            
          @endif

        </div>
    </div>
</x-guest-layout>



