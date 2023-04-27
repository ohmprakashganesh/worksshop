<?php
namespace App\Controllers;
use Config\Database;
class Student extends BaseController{
    public function index()
    {
        $db=Database::connect();
        $query=$db->query("select * from student");
        $studentlist=$query->getResultArray();//query ma vako data stulist ma as a array pass garya ho
            return view('student/index',['data'=>$studentlist]);
    }
        public function new(){
            if(!$this->request->is('post')) {
                return view('student/new');
            }
            $data=$this->request->getPost();
            $student=[//variable array
                'name'=> $data['name'],
                'address' => $data['address']
        //databaseName[cols]      //input fields name
            ];
            $db=Database::connect();
            $db->table("student")->insert($student);
            return redirect()->to("/student");
        }
        public function edit(){
            session()->getFlashdata('status');//index page ma pathaunu aghi not requried

            $id=$this->request->getGet('id');
            $db=Database::connect();

            if(!$this->request->is('post')) {//value launw ko lagi input field ma id bata row object capture garya xw
                $query = $db->query("select * from student where id=".$id);
                $student=$query->getRowObject();
                return view('/student/edit',['data'=>$student]);
            }
            if($data=$this->request->getPost()){
                $student=[
                    'name'=> $data['name'],
                    'address'=> $data['address']
                    //databaseName[cols]      //input fields name
                ];                              
                                        //DBtable (id)<- inputfield($id)
                $db->table("student")->where('id',$id)->update($student);
                return redirect()->to(base_url("/student"))->with('status',"Edited Successfully");//->with dekhi not necessary
            }        
        }
        public function delete(){
            $id=$this->request->getGet('id');
            $db=Database::connect();
            if(!$this->request->is('post')) {
                $db->table("student")->where('id',$id)->delete();//inbuilt function of query to delete data of selected items(in this case id is the item selected)
                return redirect()->to(base_url("/student"))->with('status',"Deleted Successfully");
                
            }
        }
    }
    