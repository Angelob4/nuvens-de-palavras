<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordCloudController extends Controller
{
    public function index()
    {
        return view('word-cloud/index');
    }

    public function create()
    {
        return view('word-cloud.create-edit');
    }
    /**
     * Retorna uma lista de palavras que não podem ser usadas
     *
     * @return array
     */
    private function getRestrictWords()
    {
        return [
            "DE",
            "deste",

            "dela",
            "ela",
            "me",
            "até",
            "já",
            "ser",
            "sem",
            "os",
            "da",
            "as",
            "EM",
            "e",
            "POR",
            "A",
            "À",
            "à",
            "COM",
            "dele",
            "ele",
            "PARA",
            "AO",
            "AOS",
            "AONDE",
            "ONDE",
            "DO",
            "DUM",
            "AONDE",
            "DESTA",
            "isto",
            "disto",
            "NO",
            "NA",
            "naquele",
            "às",
            "É",
            "naqueles",
            "naquela",
            "naquelas",
            "num",
            "NESTE",
            "NISTO",
            "NISSO",
            "Â",
            "ÀQUILO",
            "PRA",
            "pro",
            "está",
            "estarão",
            "que",
            "aos",
            "o",
            "ã",
            "UM",
            "SE",
            "mais",
            "é",
            "nos",
            "como",
            "sua",
            "não",
            "das",
            "pela",
            "pelo",
            "pelas",
            "pelos",
            "dos",
            "umas",
            "uma",
            "desse",
            "dessa",
            "assim",
            "tão",
            "uns",
            "cada",
            "nele",
            "nela",
            "nesse",
        ];
    }
    public function insert(Request $request)
    {
        $restricWords = $this->getRestrictWords();

        $stringUpcase        = strtolower($request->txtcloud);

        $stringWithoutComma  = str_replace(',', '', $stringUpcase);
        $stringWithoutDot    = str_replace('.', '', $stringWithoutComma);
        $stringWithoutDashR  = str_replace("\r", '', $stringWithoutDot);
        $stringWithoutDashN  = str_replace("\n", '', $stringWithoutDashR);
        $stringWithoutDashT  = str_replace("\t", '', $stringWithoutDashN);
        $stringWithoutNumber = str_replace(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "$", "@", "!", "&", "%", "/", "\\", "'", ",", "."), '', $stringWithoutDashT);

        $listOfWords = explode(" ", $stringWithoutNumber);

        $count = [];

        foreach ($listOfWords as $key => $value) {

            foreach ($restricWords as $preKey => $preValue) {
                if (strtolower($value) == strtolower($preValue)) {
                    $value = "";
                }
            }

            if (isset($count[$value])) {
                $count[$value] =  $count[$value] + 1;
            } else {
                $count[$value] = 1;
            }
        }

        arsort($count);

        return view('word-cloud/index', [
            "listOfWord" => $count
        ]);
    }
}
