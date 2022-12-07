<?php

namespace App\Http\Controllers;

use App\Models\ConsoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParserController extends Controller
{
    public function parse_qicoil_users() {
        $users = DB::connection('old_qicoil')->select('select * from users where isAdmin = 0');
        foreach ($users as $user) {
            if (User::where('email', $user->email)->exists()) continue;

            $newUser = User::create([
                'email' => $user->email,
                'password' => $user->password ?? bcrypt('qwe12345'),
                'name' => $user->name,
                'created_at' => $user->registrationDate,
                'uuid' => $user->deviceId,
                'os' => $user->os,
                'is_active' => $user->status,
            ]);
            // $newUser->assignRole('user');

            if ($user->isMaster || $user->isHighAbundance || $user->isPremium) { $newUser->tiers()->attach(1); }
            if ($user->isHighQuantum) { $newUser->tiers()->attach(2); }
            if ($user->isInnerCircle) { $newUser->tiers()->attach(3); }
        }
        return 'QiCoil users '.count($users);
    }

    public function parse_quantum_users() {
        $users = DB::connection('old_quantum')->select('select * from users where isAdmin = 0');
        foreach ($users as $user) {
            if (ConsoleUser::where('email', $user->email)->exists()) continue;

            $newUser = ConsoleUser::create([
                'email' => $user->email,
                'password' => $user->password ?? bcrypt('qwe12345'),
                'name' => $user->name,
                'created_at' => $user->registrationDate,
                'uuid' => $user->deviceId,
                'os' => $user->os,
                'is_active' => $user->status,
            ]);
            // $newUser->assignRole('user');

            if ($user->isMaster || $user->isHighAbundance || $user->isPremium) { $newUser->tiers()->attach(1); }
            if ($user->isHighQuantum) { $newUser->tiers()->attach(3); }
            if ($user->isInnerCircle) { $newUser->tiers()->attach(4); }
        }
        return 'Console users '.count($users);
    }
}
