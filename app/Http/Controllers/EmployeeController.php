<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Position;
use App\Models\Hometown;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::query()
            ->with(['position', 'hometown'])
            ->orderByDesc('id')
            ->paginate(10);

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $positions = Position::orderBy('position_name')->get();
        $hometowns = Hometown::orderBy('home_town_name')->get();
        return view('employees.create', compact('positions', 'hometowns'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_employee' => ['required', 'string', 'max:255'],
            'position_id' => ['required', 'integer', 'exists:position,id'],
            'home_town_id' => ['required', 'integer', 'exists:hometown,id'],
            'date_of_birth' => ['required', 'date'],
        ]);

        Employee::create($data);
        return redirect()->route('employees.index');
    }

    public function edit(Employee $employee)
    {
        $positions = Position::orderBy('position_name')->get();
        $hometowns = Hometown::orderBy('home_town_name')->get();
        return view('employees.edit', compact('employee', 'positions', 'hometowns'));
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'name_employee' => ['required', 'string', 'max:255'],
            'position_id' => ['required', 'integer', 'exists:position,id'],
            'home_town_id' => ['required', 'integer', 'exists:hometown,id'],
            'date_of_birth' => ['required', 'date'],
        ]);

        $employee->update($data);
        return redirect()->route('employees.index');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
