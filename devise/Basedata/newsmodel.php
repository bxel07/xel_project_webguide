<?php

namespace xel\framework\Basedata;
use xel\framework\Basedata\Basedata;
use Pdo;

class newsmodel extends Basedata{
    
    public function read()
    {
        $data = $this->Xgen->select()->from('news')->go();
        return $data;
    }


    public function read_by_id($data) {
        $data1 = $this->Xgen->select()->from('news')->where('id = :id', $data)->go();

        return $data1;
    }


    public function create(array $data = [])
    {
        
        $data = $this->Xgen->insert_query('news',
        [
            'title' => $data['title'],
            'content' =>$data['content']
        ])->go();
    }

    public function update(array $data = [])
    {
        var_dump($data);
        $this->Xgen->update_query('news', ['title' => $data['title'], 'content'=>$data['content']])->where('id = :id', $data['id'])->go();
    }

    public function delete($data = [])
    {
        // $this->Xgen->delete('news','id = :id', (int)$data)->go();
        $this->Xgen->delete('news')->where('id = :id', (int)$data['id'])->go();
    }
}