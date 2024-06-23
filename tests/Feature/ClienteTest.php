<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cliente;

class ClienteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_puede_ver_lista_de_clientes()
    {
        Cliente::factory()->count(3)->create();

        $response = $this->get(route('clientes.index'));

        $response->assertStatus(200);
        $response->assertViewIs('clientes.index');
        $response->assertSee('Listado de Clientes');
    }

    public function test_puede_crear_un_nuevo_cliente()
    {
        $clienteData = [
            'nombreCompleto' => 'Cliente Ejemplo',
            'telefono' => '78901234',
            'email' => 'cliente@example.com',
            'direccion' => '123 Calle Falsa',
            'genero' => 'masculino',
            'fechaNacimiento' => '1990-01-01',
            'formaPago' => 'tarjeta',
            'estadoCliente' => 'activo',
        ];

        $response = $this->post(route('clientes.store'), $clienteData);

        $this->assertDatabaseHas('clientes', ['email' => 'cliente@example.com']);
        $response->assertStatus(302);
        $response->assertRedirect(route('clientes.index'));
    }

    public function test_puede_actualizar_un_cliente()
    {
        $cliente = Cliente::factory()->create(['nombreCompleto' => 'Cliente Existente']);

        $clienteActualizado = [
            'nombreCompleto' => 'Cliente Actualizado',
            'telefono' => '98765432',
            'email' => 'cliente_actualizado@example.com',
            'direccion' => 'Nueva Calle 456',
            'genero' => 'femenino',
            'fechaNacimiento' => '1980-01-01',
            'formaPago' => 'efectivo',
            'estadoCliente' => 'inactivo',
        ];

        $response = $this->put(route('clientes.update', $cliente->id), $clienteActualizado);

        $this->assertDatabaseHas('clientes', ['email' => 'cliente_actualizado@example.com']);
        $response->assertStatus(302);
        $response->assertRedirect(route('clientes.index'));
    }

    public function test_puede_eliminar_un_cliente()
    {
        $cliente = Cliente::factory()->create();

        $response = $this->delete(route('clientes.destroy', $cliente->id));

        $this->assertDatabaseMissing('clientes', ['id' => $cliente->id]);
        $response->assertStatus(302);
        $response->assertRedirect(route('clientes.index'));
    }}
