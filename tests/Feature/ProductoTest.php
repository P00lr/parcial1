<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Producto;

class ProductoTest extends TestCase
{
    use RefreshDatabase; // Para reiniciar la base de datos en cada prueba

    /**
     * Verifica que se pueda ver la lista de productos.
     */
    public function test_puede_ver_lista_de_productos()
    {
        // Crear algunos productos de prueba en la base de datos
        Producto::factory()->count(3)->create();

        // Realizar una solicitud GET a la ruta de index de productos
        $response = $this->get(route('productos.index'));

        // Verificar que la solicitud fue exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verificar que la vista 'index' está siendo utilizada
        $response->assertViewIs('productos.index');

        // Verificar que se muestra la información de los productos en la vista
        $response->assertSee('Listado de Productos');
    }

    public function test_puede_crear_un_nuevo_producto()
    {
        // Datos de prueba para crear un producto
        $productoData = [
            'nombre' => 'Nuevo Producto',
            'cantidad' => 10,
            'precio' => 99.99,
            'descripcion' => 'Descripción del nuevo producto',
            'marca' => 'Marca del nuevo producto',
            'agregado_fecha' => now()->format('Y-m-d'),
            'fecha_vencimiento' => now()->addMonths(6)->format('Y-m-d'),
            'categoria' => 'Categoría del nuevo producto',
        ];

        // Realizar una solicitud POST a la ruta de almacenamiento de productos
        $response = $this->post(route('productos.store'), $productoData);

        // Verificar que se haya creado el producto en la base de datos
        $this->assertDatabaseHas('productos', ['nombre' => 'Nuevo Producto']);

        // Verificar que la redirección fue exitosa (código de estado 302)
        $response->assertStatus(302);

        // Opcional: verificar que se redirige a la página correcta después de crear
        $response->assertRedirect(route('productos.index'));
    }

        /**
     * Verifica que se pueda editar un producto existente.
     */
    public function test_puede_editar_un_producto()
    {
        // Crear un producto de prueba en la base de datos
        $producto = Producto::factory()->create([
            'nombre' => 'Producto Existente',
            'cantidad' => 5,
            'precio' => 50.00,
            'descripcion' => 'Descripción del producto existente',
            'marca' => 'Marca del producto existente',
            'agregado_fecha' => now()->subDays(7)->format('Y-m-d'), // hace 7 días
            'fecha_vencimiento' => now()->addMonths(3)->format('Y-m-d'), // dentro de 3 meses
            'categoria' => 'Categoría del producto existente',
        ]);

        // Nuevos datos para actualizar el producto
        $nuevosDatos = [
            'nombre' => 'Producto Modificado',
            'cantidad' => 10,
            'precio' => 75.00,
            'descripcion' => 'Nueva descripción del producto',
            'marca' => 'Nueva marca del producto',
            'agregado_fecha' => now()->format('Y-m-d'), // fecha actual
            'fecha_vencimiento' => now()->addMonths(6)->format('Y-m-d'), // dentro de 6 meses
            'categoria' => 'Nueva categoría del producto',
        ];

        // Realizar una solicitud PUT a la ruta de actualización del producto
        $response = $this->put(route('productos.update', $producto->id), $nuevosDatos);

        // Verificar que se haya actualizado el producto en la base de datos
        $this->assertDatabaseHas('productos', [
            'id' => $producto->id,
            'nombre' => 'Producto Modificado',
            'cantidad' => 10,
            'precio' => 75.00,
            'descripcion' => 'Nueva descripción del producto',
            'marca' => 'Nueva marca del producto',
            'agregado_fecha' => now()->format('Y-m-d'),
            'fecha_vencimiento' => now()->addMonths(6)->format('Y-m-d'),
            'categoria' => 'Nueva categoría del producto',
        ]);

        // Verificar que la redirección fue exitosa (código de estado 302)
        $response->assertStatus(302);

        // Opcional: verificar que se redirige a la página correcta después de actualizar
        $response->assertRedirect(route('productos.index'));
    }

    public function test_puede_eliminar_un_producto()
    {
        // Crear un producto de prueba en la base de datos
        $producto = Producto::factory()->create();

        // Realizar una solicitud DELETE a la ruta de eliminación del producto
        $response = $this->delete(route('productos.destroy', $producto->id));

        // Verificar que se haya eliminado el producto de la base de datos
        $this->assertDatabaseMissing('productos', ['id' => $producto->id]);

        // Verificar que la redirección fue exitosa (código de estado 302)
        $response->assertStatus(302);

        // Opcional: verificar que se redirige a la página correcta después de eliminar
        $response->assertRedirect(route('productos.index'));
        
    }
}
