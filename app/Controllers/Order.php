<?php
namespace App\Controllers;
 
use App\Models\OrderModel;
 
class Order extends BaseController
{
    protected $order;
    public function index()
    {
        return view('vw_order');
    }
 
    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    
                ]
            ],
            'jumlah_baju' => [
                'rules' => 'required|min_length[4]|max_length[20]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    
                ]
            ],
           
            ]
        )) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new OrderModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'jumlah_baju' => $this->request->getVar('jumlah_baju'),
                ]);
        return redirect()->to("https://wa.me/+6281548692036");
    }
}
?>