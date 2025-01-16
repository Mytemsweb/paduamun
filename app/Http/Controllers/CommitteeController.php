<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function index() {
        $data["committees"] = $this->get_committees();
        return view('committee', $data);
    }

    public function get_committees() {
        return $committees = [
            [
                'id'        => 1,
                'committee' => "Comité de Asuntos Sociales, Culturales y Humanitarios (SOCHUM)",
                'theme'     => "Destrucción de Ambientes y Desplazamiento de Comunidades Amazónicas",
                'director_01' => "Sofia Vargas",
                'director_02' => "Rocío Saldaña",
                'imagen'    => '1.jpg'
            ],
        
            [
                'id'        => 2,
                'committee'    => "Organización Mundial de la Salud (OMS Histórico)",
                'theme'     => "Respuesta a la Creciente Crisis de COVID-19",
                'director_01' => "Sandro Ratti",
                'director_02' => "Pamela Guevara",
                'imagen'    => '2.png'
            ],
        
            [
                'id'        => 3,
                'committee'    => "United Nations Human Settlements Programme (UN-HABITAT)",
                'theme'     => "Access to Affordable Housing in Rural Areas",
                'director_01' => "Alessandra Cáceres",
                'director_02' => "Eliana Diaz",
                'imagen'    => '3.png'
            ],
        
            [
                'id'        => 4,
                'committee'    => "Fictional CRISIS",
                'theme'     => "Arcane - The Piltover and Zaun Conflict",
                'director_01' => "Lorenzo Saldivar",
                'director_02' => "Diego Mori",
                'imagen'    => '4.jpeg'
            ],
        
            [
                'id'        => 5,
                'committee'    => "United Nations Economic and Social Council (ECOSOC)",
                'theme'     => "Impact of Illegal Mining on the Amazon Rainforest",
                'director_01' => "Sandro Rodriguez",
                'director_02' => "Krunoslav Silva",
                'imagen'    => '5.png'
            ],
        
            [
                'id'        => 6,
                'committee'    => "United Nations Environment Programme (UNEP)",
                'theme'     => "The Conservation of Animal Especies Habitats in the Amazon River",
                'director_01' => "Bruno Bambarén",
                'director_02' => "Diana Gómez",
                'imagen'    => '6.png'
            ],
        
            [
                'id'        => 7,
                'committee'    => "Third-Party Actors",
                'theme'     => "-",
                'director_01' => "Fabiana Delgadillo",
                'director_02' => "Atrid Cuti",
                'imagen'    => '7.png'
            ],
        
            [
                'id'        => 8,
                'committee'    => "United Nations Children's Fund (UNICEF)",
                'theme'     => "Child Marriage in Native Communities",
                'director_01' => "Alessandra Linares",
                'director_02' => "Fernanda Pineda",
                'imagen'    => '8.png'
            ],
        
            [
                'id'        => 9,
                'committee'    => "Commission on the Status of Women (CSW)",
                'theme'     => "Reproductive Rights and Limited Access to Health Services",
                'director_01' => "Micaela Fuertes",
                'director_02' => "Thais Galarreta",
                'imagen'    => '9.jpg'
            ],
        
            [
                'id'        => 10,
                'committee'    => "International Labour Organization (ILO)",
                'theme'     => "Combating Workers Trafficking and Exploitation in Agriculture",
                'director_01' => "Valentina Baldini",
                'director_02' => "Paris Alban",
                'imagen'    => '10.jpeg'
            ],
        ];
        
    }

    public function get_committ(Request $request) {
        $committees = $this->get_committees(); // Obtén los datos del array
        $committee = collect($committees)->firstWhere('id', $request->id);
        if (!$committee) {
            return response()->json(['status' => false]);
        }

        /* $committee['guide_url'] = route('download_guide', ['id' => $committee['id']]); */

        return response()->json([
            'status' => true,
            'data'   => $committee
        ]);
    }
}
