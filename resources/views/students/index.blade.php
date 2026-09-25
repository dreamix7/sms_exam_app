<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Student Management
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Success Message --}}
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Registration Form --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">

                <h3 class="text-lg font-semibold mb-4">
                    Register Student
                </h3>

                <form method="POST" action="{{ route('students.store') }}">
                    @csrf

                    {{-- Full Name --}}
                    <div class="mb-4">
                        <label for="full_name"
                               class="block font-medium text-sm text-gray-700">
                            Full Name
                        </label>

                        <input type="text"
                               name="full_name"
                               id="full_name"
                               value="{{ old('full_name') }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('full_name')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Registration Number --}}
                    <div class="mb-4">
                        <label for="registration_number"
                               class="block font-medium text-sm text-gray-700">
                            Registration Number
                        </label>

                        <input type="text"
                               name="registration_number"
                               id="registration_number"
                               value="{{ old('registration_number') }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('registration_number')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Course --}}
                    <div class="mb-4">
                        <label for="course"
                               class="block font-medium text-sm text-gray-700">
                            Course
                        </label>

                        <input type="text"
                               name="course"
                               id="course"
                               value="{{ old('course') }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('course')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Gender --}}
                    <div class="mb-4">
                        <label for="gender"
                            class="block font-medium text-sm text-gray-700">
                            Gender
                        </label>

                        <select name="gender"
                                id="gender"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                            <option value="">Select Gender</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                Male
                            </option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                Female
                            </option>

                        </select>

                        @error('gender')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Register Student
                    </button>

                </form>

            </div>

            {{-- Students Table --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h3 class="text-lg font-semibold mb-4">
                    Registered Students
                </h3>

                <div class="overflow-x-auto">

                    <table class="min-w-full border border-gray-200">

                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 border">Name</th>
                                <th class="px-4 py-2 border">Reg No</th>
                                <th class="px-4 py-2 border">Course</th>
                                <th class="px-4 py-2 border">Gender</th>
                                <th class="px-4 py-2 border">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($students as $student)

                                <tr>
                                    <td class="px-4 py-2 border">
                                        {{ $student->full_name }}
                                    </td>

                                    <td class="px-4 py-2 border">
                                        {{ $student->registration_number }}
                                    </td>

                                    <td class="px-4 py-2 border">
                                        {{ $student->course }}
                                    </td>

                                    <td class="px-4 py-2 border">
                                        {{ $student->gender }}
                                    

<td class="px-4 py-2 border">
    <div class="flex items-center gap-2">

    


<a href="{{ route('students.edit', $student->id) }}"
class="px-3 py-2 bg-red-600 text-white rounded hover:bg-red-700">
    Edit
</a>







        <form method="POST"
            action="{{ route('students.destroy', $student->id) }}">
            @csrf
            @method('DELETE')

            <button type="submit"
                    onclick="return confirm('Are you sure you want to delete this student?')"
                    class="px-3 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                Delete
            </button>
        </form>

    </div>
</td>
```

```

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5"
                                        class="px-4 py-4 text-center text-gray-500">
                                        No students registered yet.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>