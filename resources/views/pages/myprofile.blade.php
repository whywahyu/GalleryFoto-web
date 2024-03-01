@extends('include.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')

    <section class="mt-32">
        @csrf
        @if ($message = Session::get('success'))
        <div class="flex justify-center mt-4">
            <div id="toast-undo" class="flex items-center justify-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="text-sm font-normal text-blue-600">
                {{ $message }}
                </div>
                <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-undo" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
        @endif
        <div class="items-center max-w-screen-md mx-auto mt-3">
            <h3 class="text-5xl text-center font-hurricane">Profile</h3>
        </div>
    </section>
    <section>
        <div>
        </div>
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
            <div>
                <img src="" alt="" class="w-24 h-24 rounded-full" id="fotoprofile">
            </div>
            <h3 class="text-xl font-semibold" id="nama"></h3>
            <div class="flex gap-3">
                <a href="/ubahprofile">
                    <p class="px-3 py-0 bg-blue-300 rounded-md mt-2 text-white">
                        Edit Profile
                    </p>

                </a>
                <a href="/album">
                    <p class="px-3 py-0 bg-green-300 rounded-md mt-2 text-white">
                        Album
                    </p>

                </a>
            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="dataprofile">

            </div>
        </div>
    </section>

@endsection
@push('footerjsexternal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="/javascript/profile.js"></script>
@endpush

