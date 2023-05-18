<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class Iterasi3Test extends TestCase
{
    public function test_login()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->get('/analytics');

        $response->assertStatus(200);

    }

    public function test_registrasi()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->post('/login');

        $response->assertStatus(302);
    }

    public function test_logout()
    {
        $user = User::where('email','ibtitk@gmail.com')->first();

        $response = $this->actingAs($user)->post('/logout');

        $response->assertStatus(302);
    }
    
    public function test_mengajukan_pendaftaran_tenant()
    {
        $user = User::where('email','1108@gmail.com')->first();

        $request = [
            'nama_pemilik_usaha' => 'lorem',
            'email' => 'lorem',
            'no_telp' => 'lorem',
            'jenis_tenant'=> 'lorem',
            'jenis_bidang_usaha'=> 'lorem',
            'nama_usaha'=> 'lorem',
            'deskripsi'=> 'lorem'
        ];

        $response = $this->actingAs($user)->post(route('tnRegistrasi.add'),$request);

        $response->assertStatus(500);
    }

    public function test_melihat_status_pendaftaran_tenant()
    {
        $user = User::where('email','1108@gmail.com')->first();

        $response = $this->actingAs($user)->get('/status/1108@gmail.com');

        $response->assertStatus(200);


    }
}
