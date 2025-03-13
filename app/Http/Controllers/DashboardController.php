<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $currentTime = now()->format('H:i');
        $employees = $this->getEmployees();
        return view('home', compact('currentTime', 'employees'));
    }

    public function employees()
    {
        $employees = $this->getEmployees();
        return view('employees', compact('employees'));
    }

    public function payroll()
    {
        $payroll = $this->getPayroll();
        return view('payroll', compact('payroll'));
    }

    private function getEmployees()
    {
        return [
            [
                'id' => 1,
                'name' => 'Alexander Thompson',
                'email' => 'email@gmail.com',
                'position' => 'Senior Developer',
                'department' => 'Engineering',
                'status' => 'active',
                'attendance' => 'present',
                'image' => 'https://public.readdy.ai/ai/img_res/8158738786169008273df89f997802a9.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Isabella Martinez',
                'email' => 'email@gmail.com',
                'position' => 'HR Manager',
                'department' => 'Human Resources',
                'status' => 'active',
                'attendance' => 'present',
                'image' => 'https://public.readdy.ai/ai/img_res/f399551728fe1f7ae8b76f456ad53003.jpg',
            ],
            [
                'id' => 3,
                'name' => 'William Chen',
                'email' => 'email@gmail.com',
                'position' => 'Product Manager',
                'department' => 'Product',
                'status' => 'active',
                'attendance' => 'late',
                'image' => 'https://public.readdy.ai/ai/img_res/d2eb0f21b18b084f8f3305cd45f6687b.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Emily Richardson',
                'email' => 'email@gmail.com',
                'position' => 'Marketing Director',
                'department' => 'Marketing',
                'status' => 'on leave',
                'attendance' => 'absent',
                'image' => 'https://public.readdy.ai/ai/img_res/3ba90e91274bf48f25cac0e3ce17c97f.jpg',
            ],
        ];
    }

    private function getPayroll()
    {
        return [
            [
                'employee' => [
                    'name' => 'John Doe',
                    'position' => 'Senior Developer',
                    'department' => 'Engineering',
                    'employeeId' => 'EMP001',
                ],
                'salary' => [
                    'baseSalaryUSD' => 5000.00,
                    'baseSalaryZIG' => 150000.00,
                    'exchangeRate' => 30,
                    'benefits' => [
                        'healthInsurance' => 200.00,
                        'transportAllowance' => 150.00,
                        'housingAllowance' => 300.00,
                        'mealAllowance' => 100.00,
                    ],
                    'deductions' => [
                        'tax' => 500.00,
                        'pension' => 250.00,
                        'healthInsurance' => 200.00,
                    ],
                    'netSalaryUSD' => 4600.00,
                    'netSalaryZIG' => 138000.00,
                ],
                'period' => 'March 2024',
            ],
            [
                'employee' => [
                    'name' => 'John Smith',
                    'position' => 'Senior Developer',
                    'department' => 'Engineering',
                    'employeeId' => 'EMP001',
                ],
                'salary' => [
                    'baseSalaryUSD' => 5000.00,
                    'baseSalaryZIG' => 150000.00,
                    'exchangeRate' => 30,
                    'benefits' => [
                        'healthInsurance' => 200.00,
                        'transportAllowance' => 150.00,
                        'housingAllowance' => 300.00,
                        'mealAllowance' => 100.00,
                    ],
                    'deductions' => [
                        'tax' => 500.00,
                        'pension' => 250.00,
                        'healthInsurance' => 200.00,
                    ],
                    'netSalaryUSD' => 4600.00,
                    'netSalaryZIG' => 138000.00,
                ],
                'period' => 'March 2024',
            ],
            [
                'employee' => [
                    'name' => 'John Doe',
                    'position' => 'Senior Developer',
                    'department' => 'Engineering',
                    'employeeId' => 'EMP001',
                ],
                'salary' => [
                    'baseSalaryUSD' => 5000.00,
                    'baseSalaryZIG' => 150000.00,
                    'exchangeRate' => 30,
                    'benefits' => [
                        'healthInsurance' => 200.00,
                        'transportAllowance' => 150.00,
                        'housingAllowance' => 300.00,
                        'mealAllowance' => 100.00,
                    ],
                    'deductions' => [
                        'tax' => 500.00,
                        'pension' => 250.00,
                        'healthInsurance' => 200.00,
                    ],
                    'netSalaryUSD' => 4600.00,
                    'netSalaryZIG' => 138000.00,
                ],
                'period' => 'March 2024',
            ],
            [
                'employee' => [
                    'name' => 'John Doe',
                    'position' => 'Senior Developer',
                    'department' => 'Engineering',
                    'employeeId' => 'EMP001',
                ],
                'salary' => [
                    'baseSalaryUSD' => 5000.00,
                    'baseSalaryZIG' => 150000.00,
                    'exchangeRate' => 30,
                    'benefits' => [
                        'healthInsurance' => 200.00,
                        'transportAllowance' => 150.00,
                        'housingAllowance' => 300.00,
                        'mealAllowance' => 100.00,
                    ],
                    'deductions' => [
                        'tax' => 500.00,
                        'pension' => 250.00,
                        'healthInsurance' => 200.00,
                    ],
                    'netSalaryUSD' => 4600.00,
                    'netSalaryZIG' => 138000.00,
                ],
                'period' => 'March 2024',
            ],
            [
                'employee' => [
                    'name' => 'John Doe',
                    'position' => 'Senior Developer',
                    'department' => 'Engineering',
                    'employeeId' => 'EMP001',
                ],
                'salary' => [
                    'baseSalaryUSD' => 5000.00,
                    'baseSalaryZIG' => 150000.00,
                    'exchangeRate' => 30,
                    'benefits' => [
                        'healthInsurance' => 200.00,
                        'transportAllowance' => 150.00,
                        'housingAllowance' => 300.00,
                        'mealAllowance' => 100.00,
                    ],
                    'deductions' => [
                        'tax' => 500.00,
                        'pension' => 250.00,
                        'healthInsurance' => 200.00,
                    ],
                    'netSalaryUSD' => 4600.00,
                    'netSalaryZIG' => 138000.00,
                ],
                'period' => 'March 2024',
            ],
            [
                'employee' => [
                    'name' => 'John Doe',
                    'position' => 'Senior Developer',
                    'department' => 'Engineering',
                    'employeeId' => 'EMP001',
                ],
                'salary' => [
                    'baseSalaryUSD' => 5000.00,
                    'baseSalaryZIG' => 150000.00,
                    'exchangeRate' => 30,
                    'benefits' => [
                        'healthInsurance' => 200.00,
                        'transportAllowance' => 150.00,
                        'housingAllowance' => 300.00,
                        'mealAllowance' => 100.00,
                    ],
                    'deductions' => [
                        'tax' => 500.00,
                        'pension' => 250.00,
                        'healthInsurance' => 200.00,
                    ],
                    'netSalaryUSD' => 4600.00,
                    'netSalaryZIG' => 138000.00,
                ],
                'period' => 'March 2024',
            ],
            [
                'employee' => [
                    'name' => 'John Doe',
                    'position' => 'Senior Developer',
                    'department' => 'Engineering',
                    'employeeId' => 'EMP001',
                ],
                'salary' => [
                    'baseSalaryUSD' => 5000.00,
                    'baseSalaryZIG' => 150000.00,
                    'exchangeRate' => 30,
                    'benefits' => [
                        'healthInsurance' => 200.00,
                        'transportAllowance' => 150.00,
                        'housingAllowance' => 300.00,
                        'mealAllowance' => 100.00,
                    ],
                    'deductions' => [
                        'tax' => 500.00,
                        'pension' => 250.00,
                        'healthInsurance' => 200.00,
                    ],
                    'netSalaryUSD' => 4600.00,
                    'netSalaryZIG' => 138000.00,
                ],
                'period' => 'March 2024',
            ],
            [
                'employee' => [
                    'name' => 'John Doe',
                    'position' => 'Senior Developer',
                    'department' => 'Engineering',
                    'employeeId' => 'EMP001',
                ],
                'salary' => [
                    'baseSalaryUSD' => 5000.00,
                    'baseSalaryZIG' => 150000.00,
                    'exchangeRate' => 30,
                    'benefits' => [
                        'healthInsurance' => 200.00,
                        'transportAllowance' => 150.00,
                        'housingAllowance' => 300.00,
                        'mealAllowance' => 100.00,
                    ],
                    'deductions' => [
                        'tax' => 500.00,
                        'pension' => 250.00,
                        'healthInsurance' => 200.00,
                    ],
                    'netSalaryUSD' => 4600.00,
                    'netSalaryZIG' => 138000.00,
                ],
                'period' => 'March 2024',
            ],
            [
                'employee' => [
                    'name' => 'John Doe',
                    'position' => 'Senior Developer',
                    'department' => 'Engineering',
                    'employeeId' => 'EMP001',
                ],
                'salary' => [
                    'baseSalaryUSD' => 5000.00,
                    'baseSalaryZIG' => 150000.00,
                    'exchangeRate' => 30,
                    'benefits' => [
                        'healthInsurance' => 200.00,
                        'transportAllowance' => 150.00,
                        'housingAllowance' => 300.00,
                        'mealAllowance' => 100.00,
                    ],
                    'deductions' => [
                        'tax' => 500.00,
                        'pension' => 250.00,
                        'healthInsurance' => 200.00,
                    ],
                    'netSalaryUSD' => 4600.00,
                    'netSalaryZIG' => 138000.00,
                ],
                'period' => 'March 2024',
            ],
        ];
    }
}
