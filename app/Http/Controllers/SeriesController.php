<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {

    private function listarSeries(Request $requisicao) {
//        return response('',302,['Location'=>'http://muralhadeescudos.com.br']);
//        return $requisicao->get('id');
//        ->url();
//        ->method();
        $series = [
            'Takeo',
            '86',
            'Tomo',
            'Nagatoro'
        ];
//        $html = '<ol>';
//        foreach ($series as $anime):
//            $html .= "<li>$anime</li>";
//        endforeach;
////        echo $html;
//        return $html;
//        return view('listaSeries', ['listaSeriesNaView' => $series]);
        return view('series.index')->with('listaSeriesNaView', $series);
    }

    public function index(Request $requisicao) {
        return $this->listarSeries($requisicao);
    }

    public function create() {
        return view('series.create');
    }

}
