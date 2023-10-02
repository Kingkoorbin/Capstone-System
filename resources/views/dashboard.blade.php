<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SSS Contribution Archiving System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-4xl font-semibold mb-6">{{ __('Search Employee') }}</h2>
                <form class="flex items-center mb-6">
                    <input type="text" id="searchInput" placeholder="Enter employee name..." class="w-full max-w-md border rounded p-4 focus:outline-none">
                    <x-primary-button class="px-8 py-4 ml-4" onclick="searchEmployees()">
                        {{ __('Search') }}
                    </x-primary-button>
                </form>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="border p-4">Employee Name</th>
                            <th class="border p-4">SSS Number</th>
                        </tr>
                    </thead>
                    <tbody id="employeeTableBody">
                        <!-- Table rows will be dynamically added here based on search results -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        const employees = [
            { name: "John Doe", sssNumber: "123456789" },
            { name: "Jane Smith", sssNumber: "987654321" },
            { name: "Parker Leal", sssNumber: "848986669" },
            { name: "Oaklynn Madden", sssNumber: "231000550" },
            { name: "Ryan Howe", sssNumber: "650074021" },
            { name: "Amirah Pruitt", sssNumber: "485702242" },
            { name: "Phoebe Chase", sssNumber: "298819768" },
            { name: "Bailey Conner", sssNumber: "441896134" },
            { name: "Joanna Lu", sssNumber: "522753817" },
            { name: "Alivia Berry", sssNumber: "618924787" },
            // Add more dummy data here
        ];

        function searchEmployees() {
            const searchInput = document.getElementById("searchInput").value.toLowerCase();
            const filteredEmployees = employees.filter(employee => {
                return employee.name.toLowerCase().includes(searchInput);
            });

            const tableBody = document.getElementById("employeeTableBody");
            tableBody.innerHTML = "";

            filteredEmployees.forEach(employee => {
                const row = document.createElement("tr");
                const nameCell = document.createElement("td");
                nameCell.textContent = employee.name;
                nameCell.className = "border p-4";
                const sssNumberCell = document.createElement("td");
                sssNumberCell.textContent = employee.sssNumber;
                sssNumberCell.className = "border p-4";

                row.appendChild(nameCell);
                row.appendChild(sssNumberCell);
                tableBody.appendChild(row);
            });
        }
    </script>
</x-app-layout>
