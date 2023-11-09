<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserRoleController extends Controller
{
    // Attribuer un rôle à un utilisateur
    public function assignRole(Request $request, $userId)
    {
        $user = User::find($userId);

        $roleName = $request->input('role'); // Récupérer le nom du rôle depuis le formulaire

        $role = Role::where('name', $roleName)->first(); // Trouver le rôle

        $user->assignRole($role); // Attribuer le rôle à l'utilisateur

        return redirect()->back()->with('success', 'Rôle attribué avec succès.');
    }

    // Révoquer un rôle d'un utilisateur
    public function revokeRole(Request $request, $userId)
    {
        $user = User::find($userId);

        $roleName = $request->input('role'); // Récupérer le nom du rôle depuis le formulaire

        $role = Role::where('name', $roleName)->first(); // Trouver le rôle

        $user->removeRole($role); // Révoquer le rôle de l'utilisateur

        return redirect()->back()->with('success', 'Rôle révoqué avec succès.');
    }
}
