<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create() {
        return view('dashboard.data-user',[
            'users' => User::all()
        ]);
    }

    public function delete($id) {
        $data = User::find($id);
        $data->delete();
        return redirect('dashboard.data-user');
    }
}
