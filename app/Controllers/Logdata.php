<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ApiModel;
date_default_timezone_set("Asia/Jakarta");


class Logdata extends ResourceController
{

    use ResponseTrait;

    // get all
    public function index(){
      $apiModel = new ApiModel();
      $data = $apiModel->orderBy('id', 'DESC')->findAll();
      return $this->respond($data);
    }

    // create
    public function create() {
        $apiModel = new ApiModel();
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
            'suhu' => $this->request->getVar('suhu'),
            'kelembapan'  => $this->request->getVar('kelembapan'),
            'created_date'  => date('Y-m-d H:i:s'),
            'blok' => $this->request->getVar('blok'),
        ];

        $apiModel->insert($data);
  
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'Logdata has been added'
          ]
      ];
      return $this->respondCreated($response);
    }

    // single
    public function getLogdata($id = null){
        $apiModel = new ApiModel();
        $data = $apiModel->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('logdata does not exist.');
        }
    }

 //   update
    public function update($id = null){
        $apiModel = new ApiModel();
        $id = $this->request->getVar('id');
        $data = [
            'no.' => $this->request->getVar('no'),
            // 'Waktu'  => $this->request->getVar('Waktu'),
            'suhu'  => $this->request->getVar('suhu'),
            'kelembapan'  => $this->request->getVar('kelembapan'),
            'blok'  => $this->request->getVar('blok'),
        ];
        $apiModel->update($id, $data);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'logdata updated.'
          ]
      ];
      return $this->respond($response);
    }

    // delete
    public function delete($id = null){
        $apiModel = new ApiModel();
        $data = $apiModel->where('id', $id)->delete($id);

        if($data){
            $apiModel->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'logdata deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('logdata does not exist.');
        }
    }

   
}