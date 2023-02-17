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
            'singular' => 'unidad',
            'ayudaDescripcion' => 'Administrar las unidades en las que se venden los productos.'
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
            'singular' => 'unidad',
            'ayudaDescripcion' => 'Dar de alta de nuevas unidades de medida para especificar ¿Cómo se venden? los diferentes productos.'

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


    

}