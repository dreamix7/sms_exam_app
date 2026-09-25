<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SMS Exam App - Student Directory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="text-2xl font-bold mb-2">
                        Student Registration
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Welcome to the Student Directory. Click the button below
                        to start registering a student.
                    </p>

                    <a href="{{ route('students.index') }}"
   class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
    Start Registration
</a>

                </div>
            </div>

        </div>
    </div>


</x-app-layout>

