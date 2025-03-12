<div class="bg-gray-50 ml-250 mt-20" style="margin-left: 250px;">
    <div class="flex">
        <main class="flex-1 p-6">
            <div class="space-y-6">
                <!-- Welcome Section -->
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">Welcome back, Admin</h2>
                        </div>
                       
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-4 gap-6">
                    <!-- Repeat for each stat -->
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600">Total Employees</p>
                                <h3 class="text-2xl font-semibold text-gray-800 mt-1">248</h3>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-users text-blue-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Other stats -->
                    <!-- Repeat for each stat -->
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600">Present Today</p>
                                <h3 class="text-2xl font-semibold text-gray-800 mt-1">248</h3>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-blue-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Other stats -->
                    <!-- Repeat for each stat -->
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600">On Leave</p>
                                <h3 class="text-2xl font-semibold text-gray-800 mt-1">2</h3>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-home text-blue-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Other stats -->
                    <!-- Repeat for each stat -->
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600">Pending Requests</p>
                                <h3 class="text-2xl font-semibold text-gray-800 mt-1">24</h3>
                            </div>
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-clock text-blue-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Other stats -->
                </div>

                <!-- Charts -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div id="attendanceChart" style="height: 300px;"></div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div id="payrollChart" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const attendanceChart = echarts.init(document.getElementById('attendanceChart'));
        const payrollChart = echarts.init(document.getElementById('payrollChart'));

        const attendanceOption = {
            animation: false,
            title: {
                text: 'Monthly Attendance Overview',
                left: 'center'
            },
            tooltip: {
                trigger: 'axis'
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
            },
            yAxis: {
                type: 'value',
                max: 100
            },
            series: [{
                data: [95, 93, 97, 94, 96, 95],
                type: 'line',
                smooth: true,
                color: '#3B82F6'
            }],
        };

        const payrollOption = {
            animation: false,
            title: {
                text: 'Payroll Distribution',
                left: 'center'
            },
            tooltip: {
                trigger: 'item'
            },
            series: [{
                type: 'pie',
                radius: '70%',
                data: [{
                        value: 60,
                        name: 'Salary'
                    },
                    {
                        value: 15,
                        name: 'Bonus'
                    },
                    {
                        value: 25,
                        name: 'Benefits'
                    },
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)',
                    },
                },
            }],
        };

        attendanceChart.setOption(attendanceOption);
        payrollChart.setOption(payrollOption);
    });
</script>