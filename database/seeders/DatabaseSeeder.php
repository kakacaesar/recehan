<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(\Database\Seeders\Tables\ActivityLogSeeder::class);
        $this->call(\Database\Seeders\Tables\CacheLocksSeeder::class);
        $this->call(\Database\Seeders\Tables\JobBatchesSeeder::class);
        $this->call(\Database\Seeders\Tables\KategoriPemasukanSeeder::class);
        $this->call(\Database\Seeders\Tables\KategoriPengeluaranSeeder::class);
        $this->call(\Database\Seeders\Tables\ModelHasPermissionsSeeder::class);
        $this->call(\Database\Seeders\Tables\ModelHasRolesSeeder::class);
        $this->call(\Database\Seeders\Tables\OauthAccessTokensSeeder::class);
        $this->call(\Database\Seeders\Tables\OauthAuthCodesSeeder::class);
        $this->call(\Database\Seeders\Tables\OauthClientsSeeder::class);
        $this->call(\Database\Seeders\Tables\OauthDeviceCodesSeeder::class);
        $this->call(\Database\Seeders\Tables\OauthRefreshTokensSeeder::class);
        $this->call(\Database\Seeders\Tables\PasswordResetTokensSeeder::class);
        $this->call(\Database\Seeders\Tables\PemasukanSeeder::class);
        $this->call(\Database\Seeders\Tables\PengeluaranSeeder::class);
        $this->call(\Database\Seeders\Tables\PermissionsSeeder::class);
        $this->call(\Database\Seeders\Tables\RoleHasPermissionsSeeder::class);
        $this->call(\Database\Seeders\Tables\RolesSeeder::class);
        $this->call(\Database\Seeders\Tables\UsersSeeder::class);
    }
}
