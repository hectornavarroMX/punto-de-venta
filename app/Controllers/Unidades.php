<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UnidadesModel;

class Unidades extends Controller
{
    protected $unidades;

    public function __construct()
    {
        $this->unidades = new UnidadesModel();
    }

    public function index($activo = 1)
    {
        $unidades = $this->unidades->where('activo', $activo)->findAll();
        // titulo de la página
        $data = [
            'titulo' => 'Unidades', 
            'datos' => $unidades,
            'ayudaDescripcion' => 'Aquí puedes administrar las unidades en las que se venden los productos.',
            'singular' => 'unidad'
        ];

        echo view ('header');
        echo view ('unidades/unidades', $data);
        echo view ('footer');
    }

}