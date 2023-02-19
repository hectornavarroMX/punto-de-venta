<?php
namespace App\Controllers;

use App\Models\CategoriasModel;
use App\Controllers\BaseController;

class Categorias extends BaseController
{
    protected $categorias;

    public function __construct()
    {
        $this->categorias = new CategoriasModel();
    }

    public function index($activo = 1)
    {
        //consulta db
        $categorias = $this->categorias->where('activo', $activo)->findAll();

        $data = [
            //query resultado de la consulta
            'datos' => $categorias,

            //Información para la pagina Vista
            'titulo' => 'Departamentos',
            'ayudaDescripcion' => 'Administrar las categorias en las que se venden los productos.',
        ];

        //vistas
        echo view('header');
        echo view('categorias/categorias', $data);
        echo view('footer');
    }

    public function nuevo()
    {

        $data = [
            //query resultado de la consulta
            'datos' => $categorias,

            //Información para la pagina Vista
            'titulo' => 'Agregar departamento',
            'ayudaDescripcion' => 'Dar de alta de nuevas categorias o departamentos para especificar ¿Cómo se venden? los diferentes productos.',

        ];

        //vistas
        echo view('header');
        echo view('categorias/nuevo', $data);
        echo view('footer');
    }

    public function insertar()
    {
        $this->categorias->save([
            'nombre' => $this->request->getPost('nombre'),
        ]);

        return redirect()->to(base_url('/categorias'));
    }

    //función para mostrar la vista editar
    public function editar($id)
    {
        //consulta db
        $categoria = $this->categorias->where('id', $id)->first();

        $data = [
            //query resultado de la consulta
            'datos' => $categoria,

            //Información para la pagina Vista
            'titulo' => 'Editar una categoria de medida',
            'ayudaDescripcion' => 'Modifica categorias de medida existentes.',
        ];

        //vistas
        echo view('header');
        echo view('categorias/editar', $data);
        echo view('footer');
    }

    
    public function actualizar()
    {
        //Consulta para actualizar
        $this->categorias->update( $this->request->getPost('id'),
            
            //Formulario a BD
            [
                'nombre' => $this->request->getPost('nombre'),
            ]
        );

        return redirect()->to(base_url('/categorias'));
        // return redirect()->to(base_url('/categorias/editar/'.$this->request->getPost('id')));
    }
    
    public function eliminados($activo = 0)
    {
        //consulta db
        $categorias = $this->categorias->where('activo', $activo)->findAll();

        $data = [
            //query resultado de la consulta
            'datos' => $categorias,

            //Información para la pagina Vista
            'titulo' => 'Categorias de medida eliminadas',
            'ayudaDescripcion' => 'Categorias que no se utilizan. Si lo deseas, puedes ingresarlas nuevamente al sistema',
        ];

        //vistas
        echo view('header');
        echo view('categorias/eliminados', $data);
        echo view('footer');
    }

    public function eliminar($id)
    {
        //Consulta para eliminar
        $this->categorias->update( $id,
            
            //Modificar columna activo a 0 para ocultar
            [
                'activo' => 0,
            ]
        );

        return redirect()->to(base_url('/categorias'));
    }

    public function reingresar($id)
    {
        //Consulta para reingresar
        $this->categorias->update( $id,
            
            //Modificar columna activo a 1 para mostrar
            [
                'activo' => 1,
            ]
        );

        return redirect()->to(base_url('/categorias/eliminados'));
    }
}