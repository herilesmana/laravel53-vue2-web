<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function index() {
		$users = [
			'0' => [
				'first_name' => 'Heri',
				'last_name' => 'Lesmana',
				'address' => 'Sunagara'
			],
			'1' => [
				'first_name' => 'Leni',
				'last_name' => 'Marlina',
				'address' => ''
			]
		];
		return view('admin.users.index', compact('users'));
	}

	public function create() {
		return view('admin.users.create');
	}

	public function store(Request $request) {
		User::create($request->all());
		return "Success";
	}
}