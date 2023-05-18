<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class Iterasi4Test extends TestCase
{
    public function test_melihat_daftar_ajuan_pendaftaran_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/regisTenant');

        $response->assertStatus(200);
    }

    public function test_menerima_ajuan_pendaftaran_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->post(route('regisTenant.edit',100));

        $response->assertStatus(405);
    }

    public function test_melihat_detail_ajuan_pendaftaran_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/regisTenant/99');

        $response->assertStatus(200);
    }

    public function test_menghapus_data_ajuan_pendaftaran_tenant()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->delete(route('regisTenant.destroy',100));

        $response->assertStatus(302);
    }
}
