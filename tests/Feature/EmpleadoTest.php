<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Empleado;
use Tests\TestCase;

class EmpleadoTest extends TestCase
{
    use RefreshDatabase; // Para reiniciar la base de datos en cada prueba

    
    // Verifica que se pueda ver la lista de empleados.
     
     public function test_puede_ver_lista_de_empleados()
    {
        // Crear algunos empleados de prueba en la base de datos
        Empleado::factory()->count(3)->create();

        // Realizar una solicitud GET a la ruta de index de empleados
        $response = $this->get(route('empleados.index'));

        // Verificar que la solicitud fue exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verificar que la vista 'index' está siendo utilizada
        $response->assertViewIs('empleados.index');

        // Verificar que se muestra la información de los empleados en la vista
        $response->assertSee('Lista de Empleados');
    }

    
     // Verifica que se pueda crear un nuevo empleado.
     
     public function test_puede_crear_un_nuevo_empleado()
    {
        // Datos de prueba para crear un empleado
        $empleadoData = [
            'nombreCompleto' => 'Empleado Ejemplo',
            'ci' => '12345678', // Cambiar a string según tus reglas de validación
            'telefono' => '78901234', // Cambiar a string según tus reglas de validación
            'fechaNacimiento' => '1990-01-01',
            'email' => 'empleado@example.com',
            'direccion' => '123 Calle Falsa',
            'cargo' => 'Desarrollador',
            'salario' => '5000.00', // Cambiar a string según tus reglas de validación
        ];

        // Realizar una solicitud POST a la ruta de almacenamiento de empleados
        $response = $this->post(route('empleados.store'), $empleadoData);

        // Verificar que se haya creado el empleado en la base de datos
        $this->assertDatabaseHas('empleados', ['email' => 'empleado@example.com']);

        // Verificar que la redirección fue exitosa (código de estado 302)
        $response->assertStatus(302);

        // Opcional: verificar que se redirige a la página correcta después de crear
        $response->assertRedirect(route('empleados.index'));
    }
    //------------------------------------------------------------------------------------
   // Verifica que se pueda actualizar un empleado existente.
   public function test_puede_actualizar_un_empleado()
   {
       // Crear un empleado de prueba en la base de datos
       $empleado = Empleado::factory()->create(['nombreCompleto' => 'Empleado Existente']);

       // Datos actualizados para el empleado
       $empleadoActualizado = [
           'nombreCompleto' => 'Empleado Actualizado',
           'ci' => '23456789', // Cambiar a string según tus reglas de validación
           'telefono' => '98765432', // Cambiar a string según tus reglas de validación
           'fechaNacimiento' => '1980-01-01',
           'email' => 'empleado_actualizado@example.com',
           'direccion' => 'Nueva Calle 456',
           'cargo' => 'Gerente',
           'salario' => '5000.00', // Cambiar a string según tus reglas de validación
       ];

       // Realizar una solicitud PUT a la ruta de actualización del empleado
       $response = $this->put(route('empleados.update', $empleado->id), $empleadoActualizado);

       // Verificar que se haya actualizado el empleado en la base de datos
       $this->assertDatabaseHas('empleados', ['email' => 'empleado_actualizado@example.com']);

       // Verificar que la redirección fue exitosa (código de estado 302)
       $response->assertStatus(302);

       // Verificar que se redirige a la página correcta después de actualizar
       $response->assertRedirect(route('empleados.index'));
   }

   // Verifica que se pueda eliminar un empleado.
   public function test_puede_eliminar_un_empleado()
   {
       // Crear un empleado de prueba en la base de datos
       $empleado = Empleado::factory()->create();

       // Realizar una solicitud DELETE a la ruta de eliminación del empleado
       $response = $this->delete(route('empleados.destroy', $empleado->id));

       // Verificar que se haya eliminado el empleado de la base de datos
       $this->assertDatabaseMissing('empleados', ['id' => $empleado->id]);

       // Verificar que la redirección fue exitosa (código de estado 302)
       $response->assertStatus(302);

       // Verificar que se redirige a la página correcta después de eliminar
       $response->assertRedirect(route('empleados.index'));
   } 
}
