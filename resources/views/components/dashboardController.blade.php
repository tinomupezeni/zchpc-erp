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

    private function getEmployees()
    {
        return [
            [
                'id' => 1,
                'name' => 'Alexander Thompson',
                'role' => 'Senior Developer',
                'department' => 'Engineering',
                'status' => 'active',
                'attendance' => 'present',
                'image' => 'https://public.readdy.ai/ai/img_res/8158738786169008273df89f997802a9.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Isabella Martinez',
                'role' => 'HR Manager',
                'department' => 'Human Resources',
                'status' => 'active',
                'attendance' => 'present',
                'image' => 'https://public.readdy.ai/ai/img_res/f399551728fe1f7ae8b76f456ad53003.jpg',
            ],
            [
                'id' => 3,
                'name' => 'William Chen',
                'role' => 'Product Manager',
                'department' => 'Product',
                'status' => 'active',
                'attendance' => 'late',
                'image' => 'https://public.readdy.ai/ai/img_res/d2eb0f21b18b084f8f3305cd45f6687b.jpg',
            ],
            [
                'id' => 4,
                'name' => 'Emily Richardson',
                'role' => 'Marketing Director',
                'department' => 'Marketing',
                'status' => 'on leave',
                'attendance' => 'absent',
                'image' => 'https://public.readdy.ai/ai/img_res/3ba90e91274bf48f25cac0e3ce17c97f.jpg',
            ],
        ];
    }
}
