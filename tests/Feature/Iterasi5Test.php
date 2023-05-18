<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class Iterasi5Test extends TestCase
{
    public function test_melihat_jumlah_pendaftaran_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/analytics');

        $response->assertStatus(200);
    }

    public function test_melihat_jumlah_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/analytics');

        $response->assertStatus(200);
    }

    public function test_melihat_detail_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/daftarTenant');

        $response->assertStatus(200);
    }

    public function test_menghapus_data_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->delete(route('daftarTenant.destroy',16));

        $response->assertStatus(302);
    }
}
