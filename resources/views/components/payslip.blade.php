@props(['PayrollRecord'])

<div class="top-20">
    <div class="bg-white rounded-lg max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6 border-b">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold">Payslip</h2>
                <div class="flex gap-4">
                    <button onclick="document.getElementById('modal').classList.add('hidden')" class="text-gray-500 hover:text-gray-700">
                        Close
                    </button>
                    <button class="flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-lg">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m-6-6l6 6m0 0l6-6" />
                        </svg>
                        Download PDF
                    </button>
                </div>
            </div>
        </div>

        <div class="p-6 space-y-6">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold mb-2">Employee Details</h3>
                    <div class="space-y-2 text-sm">
                        <p><span class="text-gray-500">Name:</span> {{ $PayrollRecord['employee']['name'] }}</p>
                        <p><span class="text-gray-500">Position:</span> {{ $PayrollRecord['employee']['position'] }}</p>
                        <p><span class="text-gray-500">Department:</span> {{ $PayrollRecord['employee']['department'] }}</p>
                        <p><span class="text-gray-500">Employee ID:</span> {{ $PayrollRecord['employee']['employeeId'] }}</p>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">Payment Details</h3>
                    <div class="space-y-2 text-sm">
                        <p><span class="text-gray-500">Period:</span> {{ $PayrollRecord['period'] }}</p>
                        <p><span class="text-gray-500">Payment Date:</span> {{ now()->format('F d, Y') }}</p>
                        <p><span class="text-gray-500">Exchange Rate:</span> 1 USD = {{ $PayrollRecord['salary']['exchangeRate'] }} ZIG</p>
                    </div>
                </div>
            </div>

            <div class="border rounded-lg overflow-hidden">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">USD</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">ZIG</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 text-sm">Base Salary</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-right">
                                ${{ number_format($PayrollRecord['salary']['baseSalaryUSD'], 2) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-right">
                                {{ number_format($PayrollRecord['salary']['baseSalaryZIG'], 2) }}
                            </td>
                        </tr>
                        <tr class="bg-green-50">
                            <td class="px-6 py-4 text-sm font-medium">Benefits</td>
                            <td colspan="2"></td>
                        </tr>
                        @foreach ($PayrollRecord['salary']['benefits'] as $key => $value)
                            <tr>
                                <td class="px-6 py-4 text-sm pl-10">
                                    {{ ucwords(str_replace('_', ' ', $key)) }}
                                </td>
                                <td class="px-6 py-4 text-sm text-right">
                                    ${{ number_format($value, 2) }}
                                </td>
                                <td class="px-6 py-4 text-sm text-right">
                                    {{ number_format($value * $PayrollRecord['salary']['exchangeRate'], 2) }}
                                </td>
                            </tr>
                        @endforeach
                        <tr class="bg-red-50">
                            <td class="px-6 py-4 text-sm font-medium">Deductions</td>
                            <td colspan="2"></td>
                        </tr>
                        @foreach ($PayrollRecord['salary']['deductions'] as $key => $value)
                            <tr>
                                <td class="px-6 py-4 text-sm pl-10">
                                    {{ ucwords(str_replace('_', ' ', $key)) }}
                                </td>
                                <td class="px-6 py-4 text-sm text-right">
                                    -${{ number_format($value, 2) }}
                                </td>
                                <td class="px-6 py-4 text-sm text-right">
                                    -{{ number_format($value * $PayrollRecord['salary']['exchangeRate'], 2) }}
                                </td>
                            </tr>
                        @endforeach
                        <tr class="bg-gray-50 font-medium">
                            <td class="px-6 py-4 text-sm">Net Salary</td>
                            <td class="px-6 py-4 text-sm text-right">
                                ${{ number_format($PayrollRecord['salary']['netSalaryUSD'], 2) }}
                            </td>
                            <td class="px-6 py-4 text-sm text-right">
                                {{ number_format($PayrollRecord['salary']['netSalaryZIG'], 2) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-blue-50 p-4 rounded-lg">
                <h3 class="font-semibold mb-2">Payment Summary</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Net Pay (USD)</p>
                        <p class="text-2xl font-bold">
                            ${{ number_format($PayrollRecord['salary']['netSalaryUSD'], 2) }}
                        </p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Net Pay (ZIG)</p>
                        <p class="text-2xl font-bold">
                            {{ number_format($PayrollRecord['salary']['netSalaryZIG'], 2) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
