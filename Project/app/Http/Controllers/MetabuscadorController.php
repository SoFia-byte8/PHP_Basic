<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Switch_;

class MetabuscadorController extends Controller
{
    //ACCIÓN para mostrar formulario de busqueda
    public function formulario_buscador(){
        //Retorna view "metabuscador"
        return view("metabuscador");
    }

    //ACCIÓN  de busqueda
    public function buscar()
    {
        $termino = $_POST["termino"];
        $motor = $_POST["motores"];

        //Redireccionamiento - motor y termino
        //queryString
        switch ($motor) {
            case 'Google':
                return redirect()->to("https://www.google.com/search?q={$termino}");
                break;
            case 'Bing':
                return redirect()->to("https://www.bing.com/search?q={$termino}");
                break;
            case 'Flaticon':
                return redirect()->to("https://www.flaticon.com/search?word={$termino}");
                break;
            case 'Youtube':
                return redirect()->to("https://www.youtube.com/results?search_query={$termino}");
                break;
            case 'Baidu':
                return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd={$termino}");
                break;
            case 'Wikipedia':
                return redirect()->to("https://es.wikipedia.org/wiki/{$termino}");
                break;
            case 'Translate':
                return redirect()->to("https://translate.google.com/?hl=es&sl=en&tl=es&text={$termino}");
                break;
            case 'LinkedinLearning':
                return redirect()->to("https://www.linkedin.com/learning/search?keywords={$termino}");
                break;
            case 'Ya':
                return redirect()->to("https://www.tutorialesprogramacionya.com/{$termino}ya");
                break;
            case 'Khan':
                return redirect()->to("https://es.khanacademy.org/search?page_search_query={$termino}");
                break;
        }
    }
}
