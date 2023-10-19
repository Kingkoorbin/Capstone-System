<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employee Information List') }}
        </h2>
        <script src="https://cdn.tailwindcss.com"></script>
    </x-slot><br><br>

<div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-3xl w-full">
            <h1 class="text-4xl font-semibold mb-8 text-center text-gray-800">Employee Information</h1>

            <div class="space-y-4">
                <div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-700">Personal Details</h2>
                    <p><strong>Name:</strong> John Doe</p>
                    <p><strong>Birthdate:</strong> January 15, 1985</p>
                    <p><strong>Present Address:</strong> 123 Main St, Cityville, State, 12345</p>
                    <p><strong>Permanent Address:</strong> 456 Elm St, Townsville, State, 67890</p>
                    <p><strong>Contact No:</strong> (123) 456-7890</p>
                    <p><strong>Email:</strong> johndoe@example.com</p>
                    <p><strong>Gender:</strong> Male</p>
                    <p><strong>Civil Status:</strong> Married</p>
                    <p><strong>Blood Type:</strong> O+</p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-700">Employment Details</h2>
                    <p><strong>Department:</strong> IT Department</p>
                    <p><strong>Personnel Category:</strong> College-FT</p>
                    <p><strong>Employment Type:</strong> Full Time</p>
                    <p><strong>Date Hired:</strong> February 20, 2010</p>
                    <p><strong>Date Resigned:</strong> May 15, 2021</p>
                    <p><strong>ID No:</strong> C18-0362</p>
                    <p><strong>TIN:</strong> 789-456-123</p>
                    <p><strong>SSS No:</strong> 987-654-321</p>
                    <p><strong>Philhealth No:</strong> 654321</p>
                    <p><strong>Pag-ibig No:</strong> 123-456-789</p>
                    <p><strong>RVM Retirement No:</strong> 789654</p>
                    <p><strong>BPI ATM Account No:</strong> 1234-5678-9012-3456</p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-700">Work History</h2>
                    <li>Jan 2010 - Mar 2015: Web Developer, ABC Company</li>
                    <li>Apr 2015 - Dec 2017: Senior Web Developer, XYZ Inc.</li>
                    <li>Jan 2018 - May 2021: Tech Lead, WebTech Solutions</li>
                </div>

                <div class="mt-8 flex justify-between">
                    <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-md transition duration-300 ease-in-out">
                        Edit
                    </a>

                    <a href="#" class="bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-md transition duration-300 ease-in-out">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
