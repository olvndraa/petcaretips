<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Simulasi pencarian di file Blade
        $results = [
            'anjing' => [],
            'kucing' => [],
            'hamster' => [],
            'kelinci' => [],
            'burung' => [],
            'artikelanjing' => [],
            'artikelkucing' => [],
            'namaanjing' => [],
            'namakucing' => [],
            'namakelinci' => [],
            'namahamster' => [],
            'rasanjing' => [],
            'raskucing' => [],
            'rashamster' => [],
            'raskelinci' => [],
            'rasburung' => [],
        ];

        foreach ($results as $key => &$value) {
            $filename = resource_path("views/{$key}.blade.php");
            if (file_exists($filename)) {
                $content = file_get_contents($filename);
                if (stripos($content, $query) !== false) {
                    $value = $content;
                }
            }
        }

        return view('search.results', ['results' => $results, 'query' => $query]);
    }
}
