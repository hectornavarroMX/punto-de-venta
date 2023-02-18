<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UnidadesModel;
use App\Controllers\BaseController;

class Unidades extends BaseController
{
    protected $unidades;

    public function __construct()
    {
        $this->unidades = new UnidadesModel();
    }

    public function index($activo = 1)
    {
        //consulta db
        $unidades = $this->unidades->where('activo', $activo)->findAll();

        $data = [
            //query resultado de la consulta
            'datos' => $unidades,

            //Información para la pagina Vista
            'titulo' => 'Unidades de medida',
            'ayudaDescripcion' => 'Administrar las unidades en las que se venden los productos.',
        ];

        //vistas
        echo view('header');
        echo view('unidades/unidades', $data);
        echo view('footer');
    }

    public function nuevo()
    {

        $data = [
            //query resultado de la consulta
            'datos' => $unidades,

            //Información para la pagina Vista
            'titulo' => 'Agregar unidad',
            'ayudaDescripcion' => 'Dar de alta de nuevas unidades de medida para especificar ¿Cómo se venden? los diferentes productos..',

        ];

        //vistas
        echo view('header');
        echo view('unidades/nuevo', $data);
        echo view('footer');
    }

    public function insertar()
    {
        $this->unidades->save([
            'nombre' => $this->request->getPost('nombre'),
            'nombre_corto' => $this->request->getPost('nombre_corto'),
        ]);

        return redirect()->to(base_url('/unidades'));
    }

    //función para mostrar la vista editar
    public function editar($id)
    {
        //consulta db
        $unidad = $this->unidades->where('id', $id)->first();

        $data = [
            //query resultado de la consulta
            'datos' => $unidad,

            //Información para la pagina Vista
            'titulo' => 'Editar una unidad de medida',
            'ayudaDescripcion' => 'Modifica unidades de medida existentes.',
        ];

        //vistas
        echo view('header');
        echo view('unidades/editar', $data);
        echo view('footer');
    }

    
    public function actualizar()
    {
        //Consulta para actualizar
        $this->unidades->update( $this->request->getPost('id'),
            
            //Formulario a BD
            [
                'nombre' => $this->request->getPost('nombre'),
                'nombre_corto' => $this->request->getPost('nombre_corto'),
            ]
        );

        return redirect()->to(base_url('/unidades'));
    }
    
    public function eliminados($activo = 0)
    {
        //consulta db
        $unidades = $this->unidades->where('activo', $activo)->findAll();

        $data = [
            //query resultado de la consulta
            'datos' => $unidades,

            //Información para la pagina Vista
            'titulo' => 'Unidades de medida eliminadas',
            'ayudaDescripcion' => 'Unidades que no se utilizan. Si lo deseas, puedes ingresarlas nuevamente al sistema',
        ];

        //vistas
        echo view('header');
        echo view('unidades/eliminados', $data);
        echo view('footer');
    }

    public function eliminar($id)
    {
        //Consulta para eliminar
        $this->unidades->update( $id,
            
            //Modificar columna activo a 0 para ocultar
            [
                'activo' => 0,
            ]
        );

        return redirect()->to(base_url('/unidades'));
    }

    public function reingresar($id)
    {
        //Consulta para reingresar
        $this->unidades->update( $id,
            
            //Modificar columna activo a 1 para mostrar
            [
                'activo' => 1,
            ]
        );

        return redirect()->to(base_url('/unidades/eliminados'));
    }
}