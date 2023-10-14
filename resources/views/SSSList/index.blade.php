<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin SSS Contribution List') }}
        </h2>
        <script src="https://cdn.tailwindcss.com"></script>
    </x-slot><br><br>

    <div class="flex justify-center mt-8">
        <button id="addButton" style="background-color: green; color: white;" class="font-bold py-2 px-4 rounded">
                Add
         </button>
    </div><br><br>

    <div class="flex justify-center mt-8">
        <div class="flex items-center mr-4">
            <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight" style="margin-right: 16px;">
                January 2023
            </h2>
        </div>
        <div class="ml-auto" style="margin-left: 400px;">
            <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                Payment Reference Number: XXXXXXXX
            </h2>
        </div>
    </div><br><br>


    <div class="flex justify-center mt-8">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="border-b px-4 py-2"></th>
                    <th class="border-b px-4 py-2">Name of Employee</th>
                    <th class="border-b px-4 py-2">SS Number</th>
                    <th class="border-b px-4 py-2">SS</th>
                    <th class="border-b px-4 py-2">EC</th>
                    <th class="border-b px-4 py-2">Total Contribution</th>
                    <th class="border-b px-4 py-2">Options</th>
                </tr>
            </thead>
                <tbody>
                    @php
                    $dummyData = [];
                    for ($i = 1; $i <= 58; $i++) {
                        $name = "Person " . $i;
                        $ssNumber = rand(100, 999) . '-' . rand(10, 99) . '-' . rand(1000, 9999);
                        $ss = number_format(rand(80, 200), 2);
                        $ec = number_format(rand(5, 20), 2);
                        $totalContribution = number_format($ss + $ec, 2);
                        $dummyData[] = [
                            'name' => $name,
                            'ssNumber' => $ssNumber,
                            'ss' => $ss,
                            'ec' => $ec,
                            'totalContribution' => $totalContribution
                        ];
                    }
                    @endphp

                    @foreach($dummyData as $index => $data)
                    <tr>
                        <td class="border-b px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border-b px-4 py-2 text-center">{{ $data['name'] }}</td>
                        <td class="border-b px-4 py-2 text-center">{{ $data['ssNumber'] }}</td>
                        <td class="border-b px-4 py-2 text-center">{{ $data['ss'] }}</td>
                        <td class="border-b px-4 py-2 text-center">{{ $data['ec'] }}</td>
                        <td class="border-b px-4 py-2 text-center">{{ $data['totalContribution'] }}</td>
                        <td class="border-b px-4 py-2 text-center">
                            <button style="background-color: green; color: white;" class="font-bold py-2 px-4 rounded">
                                View
                            </button>
                            <button style="background-color: blue; color: white;" class="font-bold py-2 px-4 rounded ml-2">
                                Edit
                            </button>
                            <button style="background-color: red; color: white;" class="font-bold py-2 px-4 rounded ml-2">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>



    <!-- Upload Modal -->
    <div id="uploadModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-container bg-white w-96 mx-auto rounded shadow-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Upload Image</h2>
                <form action="/upload" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-600">Select Image:</label>
                        <input type="file" id="image" name="image" accept="image/*" class="mt-1 p-2 border rounded w-full">
                    </div>
                </form>
                <button id="closeModalButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-4">
                    Close
                </button>
                <button id="nextButton" class="bg-gray-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded mt-4">
                    Next
                </button>
            </div>
        </div>
<!-- Form after upload modal -->
    <div id="formModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="modal-container bg-white w-96 mx-auto rounded shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Fill the Form</h2>
        <form id="form">
            <div class="mb-4">
                <label for="orNumber" class="block text-sm font-medium text-gray-600">OR Number:</label>
                <input type="text" id="orNumber" name="orNumber" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="orDate" class="block text-sm font-medium text-gray-600">OR Date:</label>
                <input type="date" id="orDate" name="orDate" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="referenceNumber" class="block text-sm font-medium text-gray-600">Reference Number:</label>
                <input type="text" id="referenceNumber" name="referenceNumber" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <button type="button" id="submitForm" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </form>
        <button id="closeFormModalButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-4">
            Close
        </button>
    </div>
</div>



        <script>
            const addButton = document.getElementById('addButton');
            const uploadModal = document.getElementById('uploadModal');
            const nextButton = document.getElementById('nextButton');
            const formModal = document.getElementById('formModal');
            const closeModalButton = document.getElementById('closeModalButton');
            const closeFormModalButton = document.getElementById('closeFormModalButton');

            addButton.addEventListener('click', () => {
                uploadModal.classList.remove('hidden');
            });

            nextButton.addEventListener('click', () => {
                uploadModal.classList.add('hidden');
                formModal.classList.remove('hidden');
            });

            closeFormModalButton.addEventListener('click', () => {
                formModal.classList.add('hidden');
            });

            closeModalButton.addEventListener('click', () => {
                uploadModal.classList.add('hidden');
            });
        </script>

</x-app-layout>
