<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('content')

<body>
    <x-header />
    <div class="flex fixed">
        <x-dashboard />
    </div>
    <div class="ml-40 t-20 " style="margin-top: 80px;">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Payroll Management</h1>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                    <i class="fas fa-dollar-sign"></i>
                    Process Payroll
                </button>
            </div>

            <div class="bg-white rounded-lg shadow-sm">
                <div class="p-4 border-b">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <i class="fas fa-calendar absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5"></i>
                            <input
                                type="month"
                                class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                value="{{ isset($selectedMonth) ? $selectedMonth->format('Y-m') : '' }}" />
                        </div>
                        <div class="relative flex-1">
                            <input
                                type="text"
                                placeholder="Search employees..."
                                class="w-full pl-10 pr-4 py-2 border rounded-lg" />
                        </div>
                        <select class="border rounded-lg px-4 py-2">
                            <option>All Departments</option>
                            <option>Engineering</option>
                            <option>Marketing</option>
                            <option>Sales</option>
                        </select>
                        <select class="border rounded-lg px-4 py-2">
                            <option>All Status</option>
                            <option>Processed</option>
                            <option>Pending</option>
                            <option>Failed</option>
                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Employee
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Department
                                </th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Base (USD)
                                </th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Base (ZIG)
                                </th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Net (USD)
                                </th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Net (ZIG)
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        @foreach ($payroll as $PayrollRecord)
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                            {{strtoupper(substr($PayrollRecord['employee']['name'], 0, 1))}}
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{$PayrollRecord['employee']['name']}}</div>
                                            <div class="text-sm text-gray-500">{{$PayrollRecord['employee']['position']}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{$PayrollRecord['employee']['department']}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-right">
                                    ${{ number_format($PayrollRecord['salary']['baseSalaryUSD'], 2) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-right">
                                    {{ number_format($PayrollRecord['salary']['baseSalaryZIG'], 2) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-right">
                                    ${{ number_format($PayrollRecord['salary']['netSalaryUSD'], 2) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-right">
                                    {{ number_format($PayrollRecord['salary']['netSalaryZIG'], 2) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Processed
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button
                                        onclick="setShowPayslip(true)"
                                        class="text-blue-600 hover:text-blue-900">
                                        View Payslip
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Payslip -->
    <div id="modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full mt-10">
        <div class="relative top-30 mx-auto p-5 border w-11/12 md:w-1/2 shadow-lg rounded-md bg-white">
            <div class="text-center">
                <x-payslip :PayrollRecord="$PayrollRecord" />
                
            </div>
        </div>
    </div>
</body>

<script>
    function setShowPayslip(show) {
        const modal = document.getElementById('modal');
        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }
</script>
@endsection