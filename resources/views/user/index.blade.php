<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des utilisateurs') }}
        </h2>
    </x-slot>

    <div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 text-gray-900">
                @php
                    $roles = Auth::user()->getRoleNames();
                @endphp
                @foreach ($roles as $row)
                    Vous êtes connecté en tant que <b>{{ $row }}</b>.
                @endforeach

                @if (session('status'))
                    <div class="mt-3 mb-1 py-4 px-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">{{ session('status') }}</span>
                    </div>
                @endif
                
            </div>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                QRCode
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nom
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Prénom
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Téléphone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Adresse mail
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Roles
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @if ($user->qrcode == null)
                                        <a href="{{ route('generate-qrcode', $user->id) }}"
                                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 
                                                focus:outline-none bg-white rounded-lg border border-gray-200 
                                                hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 
                                                focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 
                                                dark:text-gray-400 dark:border-gray-600 dark:hover:text-white 
                                                dark:hover:bg-gray-700">
                                            Générer
                                        </a>
                                    @else
                                        <a href="{{ route('generate-qrcode', $user->id) }}">
                                            <img src="{{ asset($user->qrcode) }}" height="40px" width="40px" />
                                        </a>
                                    @endif
                                </th>
                                <td class="px-6 py-4">
                                    {{ $user->nom }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->prenom }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->telephone }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4">
                                    @php
                                        $roles = $user->getRoleNames();
                                    @endphp
                                    @foreach ($roles as $row)
                                        <b>{{ $row }}</b> <br />
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    @role('Manager QRCode')
                                        @if (!isset($row->qrcode) && $user->qrcode != null)
                                            <a href="{{ route('delete-qrcode', $user) }}"
                                                class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                                                Supprimer le QRCode
                                            </a>
                                        @endif
                                    @endrole
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>
