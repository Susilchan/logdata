<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ModelPenyiraman;
date_default_timezone_set("Asia/Jakarta");


class Penyiraman extends ResourceController
{

    use ResponseTrait;

    // get all
    public function index(){
      $penyiraman = new ModelPenyiraman();
      $data = $penyiraman->orderBy('id', 'DESC')->findAll();
      return $this->respond($data);
    }

    // create
    public function create() {
        $penyiraman = new ModelPenyiraman();
        $key = $this->request->getVar("key");
        // $key = 'keyloveK7';

        if (!($key === "keyloveK7")) {
            $response = [
                'code'    => 403,
                'status'   => 'error',
                'messages' => "Key is Not Valid"
            ];
            return $this->respondCreated($response);
        }
        $data = [
            'penyiraman' => $this->request->getVar('penyiraman'),
            
            'created_date'  => date('Y-m-d H:i:s'),
            
        ];

        $penyiraman->insert($data);
  
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'penyiraman has been added'
          ]
      ];
      return $this->respondCreated($response);
    }

    // single
    public function getModelPenyiraman($id = null){
        $penyiraman = new ModelPenyiraman();
        $data = $penyiraman->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('penyiraman does not exist.');
        }
    }


    // delete
    public function delete($id = null){
        $penyiraman = new ModelPenyiraman();
        $data = $penyiraman->where('id', $id)->delete($id);

        if($data){
            $penyiraman->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'penyiraman deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('penyiraman does not exist.');
        }
    }

   
}