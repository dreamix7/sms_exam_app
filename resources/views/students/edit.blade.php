```blade
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Student Information
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h3 class="text-lg font-semibold mb-6">
                    Edit Student
                </h3>

                <form method="POST"
                      action="{{ route('students.update', $student->id) }}">

                    @csrf
                    @method('PUT')

                    {{-- Full Name --}}
                    <div class="mb-4">
                        <label for="full_name"
                               class="block font-medium text-sm text-gray-700">
                            Full Name
                        </label>

                        <input type="text"
                               name="full_name"
                               id="full_name"
                               value="{{ old('full_name', $student->full_name) }}"
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
                               value="{{ old('registration_number', $student->registration_number) }}"
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
                               value="{{ old('course', $student->course) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('course')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Gender --}}
                    <div class="mb-6">
                        <label for="gender"
                               class="block font-medium text-sm text-gray-700">
                            Gender
                        </label>

                        <select name="gender"
                                id="gender"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                            <option value="">Select Gender</option>

                            <option value="Male"
                                {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>
                                Male
                            </option>

                            <option value="Female"
                                {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>
                                Female
                            </option>

                        </select>

                        @error('gender')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Buttons --}}
                    <div class="flex gap-3">

                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Update Student
                        </button>

                        <a href="{{ route('students.index') }}"
                           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                            Cancel
                        </a>

                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>
```
