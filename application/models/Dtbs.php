<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dtbs extends CI_Model
{

function kontrol($from,$email,$password)
{
    $result=$this->db->from($from)->where('email',$email)
        ->where('password',sha1(md5($password)))
        ->get()->row();
    return $result;
}
    function guncelle($data=array(),$id,$where,$from)
    {
        $result=$this->db->where($where,$id)->update($from,$data);
        return $result;
    }
    function listele($from)
    {
        $result=$this->db->select('*')->from($from)->order_by('id','desc')->get()->result();
        return $result;
    }
    function cek ($from,$id)
    {
          $result=$this->db->select('*')
              ->from($from)->where('id',$id)
              ->get()->row();
          return $result;
    }
    function sil($id,$where,$from)
    {
        $result=$this->db->delete($from,array($where=>$id));
        return $result;
    }
    function  elave($from,$data)
    {
        $result=$this->db->insert($from,$data);
        return $result;
    }
function blogcek($sef)
{
    $result=$this->db->select('*')
        ->from('blog')
        ->where('blog_sef_tr',$sef)
        ->get()
        ->row();
    return $result;
}
    function messageguncelle($id,$data)
    {
        $result=$this->db->where('id',$id)->update('message',$data);
        return $result;
    }

}

