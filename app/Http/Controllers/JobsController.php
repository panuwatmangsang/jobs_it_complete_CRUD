<?php

namespace App\Http\Controllers;

use App\Models\JobsSearch;
use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;
use Illuminate\Support\Facades\File;

class JobsController extends Controller
{
    // search jobs post
    public function test_search(Request $request)
    {
        $hosts = ["http://127.0.0.1:9200"];

        $client = ClientBuilder::create()
            ->setHosts($hosts)
            ->build();


        // =========== create index ================
        // $params = [
        //     'index' => 'sample_index',
        //     'id' => 'sampleId',
        //     'body' => [
        //         'name' => 'sample product',
        //         'price' => '3400',
        //         'description' => 'my description'
        //     ]
        // ];
        // $response = $client->index($params);
        // dd($response);

        // =========== ดึงค่ามาแสดง ================
        // $params = [
        //     'index' => 'sample_index',
        //     'id' => 'sampleId',
        // ];
        // $response = $client->get($params);
        // dd($response);

        // =========== update index ================
        // $params = [
        //     'index' => 'sample_index',
        //     'id' => 'sampleId',
        //     'body' => [
        //         'doc' => [
        //             'price' => '50000',
        //         ]
        //     ]
        // ];
        // $response = $client->update($params);
        // dd($response);

        // ============ delete index =============
        // $params = [
        //     'index' => 'sample_index',
        //     'id' => 'sampleId',
        // ];
        // $response = $client->delete($params);
        // dd($response);

        // ============ delete index at management =============
        // $params = [
        //     'index' => 'sample_index',
        // ];
        // $response = $client->indices()->delete($params);
        // dd($response);
        // echo "deleted";

        // ============ search get,raw,first =============

        // form kibana
        // $params = [
        //     'index' => 'jobs_searches_1629038883',
        // ];
        // $response = $client->search($params);
        // dd($response);

        // form database
        // $jobs = JobsSearch::search('panuwat')->raw();
        // dd($jobs);

        // ============ get query index =============
        // $params = [
        //     'index' => 'jobs_searches_1629038883',
        //     'body' => [
        //         'query' => [
        //             'match' => [
        //                 'jobs_name' => 'web'
        //             ]
        //         ]
        //     ]

        // ];
        // $response = $client->search($params);
        // dd($response);

        // ============ get advance query index =============
        if ($query = $request->get('query')) {

            $params = [
                'index' => 'jobs_searches',
                'body' => [
                    'query' => [
                        'multi_match' => [
                            'query' => $query,
                            "fields" => [
                                "jobs_name_company",
                                "jobs_name",
                                "jobs_quantity",
                                "jobs_salary",
                                "jobs_detail",
                                "jobs_contact",
                                "jobs_address",
                            ]
                        ]
                    ]
                ]
            ];

            $results = $client->search($params);

            // echo json_encode($results["hits"]["hits"]);
            // return view('applicants.applicants_search', ['query' => $query, '["hits"]["hits"]]);

            return view('applicants.applicants_search', ['query' => $query, 'results' => $results]);
        } else {
            return view('applicants.applicants_search', ['query' => null]);
        }
    }

    // ============================================================================================
    // ============================================================================================ 
    // search applicants
    public function app_search(Request $request)
    {
        $hosts = ["http://127.0.0.1:9200"];

        $client = ClientBuilder::create()
            ->setHosts($hosts)
            ->build();


        // =========== create index ================
        // $params = [
        //     'index' => 'sample_index',
        //     'id' => 'sampleId',
        //     'body' => [
        //         'name' => 'sample product',
        //         'price' => '3400',
        //         'description' => 'my description'
        //     ]
        // ];
        // $response = $client->index($params);
        // dd($response);

        // =========== ดึงค่ามาแสดง ================
        // $params = [
        //     'index' => 'sample_index',
        //     'id' => 'sampleId',
        // ];
        // $response = $client->get($params);
        // dd($response);

        // =========== update index ================
        // $params = [
        //     'index' => 'sample_index',
        //     'id' => 'sampleId',
        //     'body' => [
        //         'doc' => [
        //             'price' => '50000',
        //         ]
        //     ]
        // ];
        // $response = $client->update($params);
        // dd($response);

        // ============ delete index =============
        // $params = [
        //     'index' => 'sample_index',
        //     'id' => 'sampleId',
        // ];
        // $response = $client->delete($params);
        // dd($response);

        // ============ delete index at management =============
        // $params = [
        //     'index' => 'sample_index',
        // ];
        // $response = $client->indices()->delete($params);
        // dd($response);
        // echo "deleted";

        // ============ search get,raw,first =============

        // form kibana
        // $params = [
        //     'index' => 'jobs_searches_1629038883',
        // ];
        // $response = $client->search($params);
        // dd($response);

        // form database
        // $jobs = JobsSearch::search('panuwat')->raw();
        // dd($jobs);

        // ============ get query index =============
        // $params = [
        //     'index' => 'jobs_searches_1629038883',
        //     'body' => [
        //         'query' => [
        //             'match' => [
        //                 'jobs_name' => 'web'
        //             ]
        //         ]
        //     ]

        // ];
        // $response = $client->search($params);
        // dd($response);

        // ============ get advance query index =============
        if ($query = $request->get('query')) {

            $params = [
                'index' => 'histories',
                'body' => [
                    'query' => [
                        'multi_match' => [
                            'query' => $query,
                            "fields" => [
                                "name_prefix",
                                "first_name",
                                "last_name",
                                "university",
                                "faculty",
                                "branch",
                                "gpa",
                                "educational",
                                "experience",
                                "dominant_language",
                                "language_learned",
                                "charisma",
                                "name_village",
                                "home_number",
                                "alley",
                                "road",
                                "district",
                                "canton",
                                "province",
                                "postal_code",
                                "my_name_village",
                                "my_home_number",
                                "my_alley",
                                "my_road",
                                "my_district",
                                "my_canton",
                                "my_province",
                                "my_postal_code",
                            ]
                        ]
                    ]
                ]
            ];

            $results = $client->search($params);

            // echo json_encode($results["hits"]["hits"]);
            // return view('applicants.applicants_search', ['query' => $query, '["hits"]["hits"]]);

            return view('ent.ent_index', ['query' => $query, 'results' => $results]);
        } else {
            return view('ent.ent_index', ['query' => null]);
        }
    }

    // // ============================================================================================
    // // ============================================================================================ 

    // // ==================== text search ===================
    // // public function search(Request $request)
    // // {
    // //     if ($query = $request->get('query')) {
    // //         $results = JobsSearch::search($query)->get();

    // //         return view('applicants.applicants_search', ['query' => $query, 'results' => $results]);
    // //     } else {
    // //         return view('applicants.applicants_search', ['query' => null]);
    // //     }
    // // }
}
