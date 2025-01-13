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
                'committee' => "United Nations Social, Cultural, and Humanitarian Committee (SOCHUM)",
                'theme'     => "Destruction of Environments and Displacement of Amazonian Communities",
                'director'  => "Sofia Vargas",
                'type'      => "Doubles",
                'imagen'    => '1.jpg'
            ],

            [
                'id'        => 2,
                'comite'    => "Organización Mundial de la Salud (OMS Histórico)",
                'theme'     => "Respuesta a la Creciente Crisis de COVID-19",
                'director'  => "Sandro Ratti",
                'type'      => "Syngles",
                'imagen'    => '2.jpg'
            ],

            [
                'id'        => 3,
                'comite'    => "United Nations Human Settlements Programme (UN-HABITAT)",
                'theme'     => "Access to Affordable Housing in Rural Areas",
                'director'  => "Alessandra Cáceres",
                'type'      => "Doubles",
                'imagen'    => '3.jpg'
            ],

            [
                'id'        => 4,
                'comite'    => "Fictional CRISIS",
                'theme'     => "Arcane - The Piltover and Zaun Conflict",
                'director'  => "Lorenzo Saldivar",
                'type'      => "Syngles",
                'imagen'    => '4.jpg'
            ],

            [
                'id'        => 5,
                'comite'    => "Economic and Social Council (ECOSOC)",
                'theme'     => "Impact of Illegal Mining on the Amazon Rainforest",
                'director'  => "Sandro Rodriguez",
                'type'      => "Syngles",
                'imagen'    => '5.jpg'
            ],

            [
                'id'        => 6,
                'comite'    => "United Nations Environment Programme (UNEP)",
                'theme'     => "The Conservation of Animal Especies Habitats in the Amazon River",
                'director'  => "Bruno Bambarén",
                'type'      => "Syngles",
                'imagen'    => '6.jpg'
            ],

            [
                'id'        => 7,
                'comite'    => "Third-Party Actors",
                'theme'     => "-",
                'director'  => "Fabiana Delgadillo",
                'type'      => "-",
                'imagen'    => '7.jpg'
            ],

            [
                'id'        => 8,
                'comite'    => "United Nations Children's Fund",
                'theme'     => "Child Marriage in Native Communities",
                'director'  => "Alessandra Linares",
                'type'      => "Syngles",
                'imagen'    => '8.jpg'
            ],

            [
                'id'        => 9,
                'comite'    => "Commission on the Status of Women",
                'theme'     => "Reproductive Rights and Limited Access to Health Services",
                'director'  => "Micaela Fuertes",
                'type'      => "Syngles",
                'imagen'    => '9.jpg'
            ],

            [
                'id'        => 10,
                'comite'    => "International Labour Organization",
                'theme'     => "Combating Workers Trafficking and Exploitation in Agriculture",
                'director'  => "Valentina Baldini",
                'type'      => "Syngles",
                'imagen'    => '10.jpg'
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
