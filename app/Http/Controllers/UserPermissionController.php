<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserPermissionController extends Controller
{
    // Attribuer une permission à un utilisateur
    public function assignPermission(Request $request, $userId)
    {
        $user = User::find($userId);

        $permissionName = $request->input('permission'); // Récupérer le nom de la permission depuis le formulaire

        $permission = Permission::where('name', $permissionName)->first(); // Trouver la permission

        $user->givePermissionTo($permission); // Attribuer la permission à l'utilisateur

        return redirect()->back()->with('success', 'Permission attribuée avec succès.');
    }

    // Révoquer une permission d'un utilisateur
    public function revokePermission(Request $request, $userId)
    {
        $user = User::find($userId);

        $permissionName = $request->input('permission'); // Récupérer le nom de la permission depuis le formulaire

        $permission = Permission::where('name', $permissionName)->first(); // Trouver la permission

        $user->revokePermissionTo($permission); // Révoquer la permission de l'utilisateur

        return redirect()->back()->with('success', 'Permission révoquée avec succès.');
    }
}
