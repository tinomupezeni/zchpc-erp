<div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-lg w-full max-w-lg shadow-lg">
        <div class="p-4 border-b flex justify-between items-center">
            <h2 class="text-xl font-semibold">Add Employee</h2>
            <button
                onClick="setShowModal(false)"
                class="text-gray-500 hover:text-gray-700">
                ✕
            </button>
        </div>

        <form class="p-6 space-y-4" method="post" action="add_employee.php">
          <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="text-sm text-gray-600">Full Name</label>
                <input
                    type="text"
                    name="name"
                    value="<?php echo isset($employee['name']) ? $employee['name'] : '' ?>"
                    required
                    class="w-full p-2 border rounded" />
            </div>
            <div>
                <label class="text-sm text-gray-600">Position</label>
                <input
                    type="text"
                    name="position"
                    value="<?php echo isset($employee['position']) ? $employee['position'] : '' ?>"
                    required
                    class="w-full p-2 border rounded" />
            </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="text-sm text-gray-600">Department</label>
            <input
                type="text"
                name="department"
                value="<?php echo isset($employee['department']) ? $employee['department'] : '' ?>"
                required
                class="w-full p-2 border rounded" />
        </div>
        <div>
            <label class="text-sm text-gray-600">Employee ID</label>
            <input
                type="text"
                name="employeeId"
                value="<?php echo isset($employee['employeeId']) ? $employee['employeeId'] : '' ?>"
                required
                class="w-full p-2 border rounded" />
        </div>
    </div>

    <div>
        <label class="text-sm text-gray-600">Email</label>
        <input
            type="email"
            name="email"
            value="<?php echo isset($employee['email']) ? $employee['email'] : '' ?>"
            required
            class="w-full p-2 border rounded" />
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="text-sm text-gray-600">Phone</label>
            <input
                type="text"
                name="phone"
                value="<?php echo isset($employee['phone']) ? $employee['phone'] : '' ?>"
                required
                class="w-full p-2 border rounded" />
        </div>
        <div>
            <label class="text-sm text-gray-600">Salary (USD)</label>
            <input
                type="number"
                name="salary"
                value="<?php echo isset($employee['salary']) ? $employee['salary'] : '' ?>"
                required
                class="w-full p-2 border rounded" />
        </div>
    </div>
    <div class="flex justify-end gap-3 mt-4">
        <button
            type="button"
            onClick="setShowModal(false)"
            class="px-4 py-2 border rounded text-gray-600 hover:bg-gray-100">
            Cancel
        </button>
        <button
            type="submit"
            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Add Employee
        </button>
    </div>
    </form>
</div>
</div>

<script>
    function setShowModal(show) {
        const modal = document.querySelector('.fixed.inset-0');
        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $employeeId = $_POST['employeeId'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];

    header('Location: employees.php?success=1');
    exit;
}
?>