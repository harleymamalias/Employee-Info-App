<!DOCTYPE html>
<html>

<head>
    <title>Employee Details</title>
</head>

<body>
    <h1>Employee Details</h1>
    <p>Name: {{ $employee->name }}</p>
    <p>Email: {{ $employee->email }}</p>
    @if($employee->photo)
    <p>Photo URL: {{ Storage::disk('employee_photos')->url($employee->photo) }}</p>
    @else
    <p>No photo uploaded.</p>
    @endif
    <br>
    <a href="{{ route('employees.index') }}">Back to Employees</a>
</body>

</html>
