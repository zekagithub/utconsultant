<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('adminlogin') && $this->uri->segment(2)&&$this->uri->segment(2)!='login'){
            redirect('back');
        }
    }

	public function index()
	{
        if($this->session->userdata('adminlogin'))
        {
            redirect('back/home');
        }
        $this->load->view('back/login/login');
	}
	public function login()
    {
        $data=array(

            'email'=>$email=$this->input->post('email'),
            'password'=>$password=$this->input->post('password')
        );
        $this->load->model('Dtbs');
       $result= $this->Dtbs->kontrol('admin',$email,$password);
        if ($result) {
            $this->session->set_userdata('adminlogin',true);
            $this->session->set_userdata('admininfo',$result);
            redirect('back/home');

        }else{

            $this->session->set_flashdata('success', '<div class="alert alert-danger"><h6>Hata oldu,Tekrar deneyin!</h6></div>');
            redirect('back');
        }
        $this->load->view('back/login/login');


    }
    public function home()
    {
        $this->load->view('back/home');
    }
    public function about()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('about');
        $data['melumat']=$result;
        $data['head']="Anasayfa";

        $this->load->view('back/about/about',$data);
    }
    public function aboutedit($id)
    {
        $this->load->model('Dtbs');
        $data['melumat']=$result=$this->Dtbs->cek('about',$id);
        $this->load->view('back/about/aboutedit',$data);
    }

    public function aboutupdate()
    {

        $config['upload_path'] = FCPATH . 'assets/front/images/about';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/about/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/about/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '600';
            $config['height'] = '245';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data = array(
                'id' => $id = $this->input->post('id'),
                'about_title_tr' => $this->input->post('title_tr'),
                'about_title_en' => $this->input->post('title_en'),
                'about_text_tr' => $this->input->post('metin_tr'),
                'about_text_en' => $this->input->post('metin_en'),
                'about_mission_tr' => $this->input->post('mission_tr'),
                'about_mission_en' => $this->input->post('mission_en'),
                'about_vision_tr' => $this->input->post('vision_tr'),
                'about_vision_en' => $this->input->post('vision_en'),
                'about_image' => $imagesave


            );

            $this->load->model('Dtbs');
            $result = $this->Dtbs->guncelle($data, $id, 'id', 'about');
            if ($result) {
                $this->session->set_flashdata('success', '<div class="alert alert-success">Hakkimizda Ugurla deyisdirildi!</div');
                redirect('back/about');
            } else {
                $this->session->set_flashdata('success', '<div class="alert alert-danger">Hata oldu,yeniden cehd edin!</div');
                redirect('back/about');
            }
            $this->load->view('back/about/about');


        } else {


            $data = array(
                'id' => $id = $this->input->post('id'),
                'about_title_tr' => $this->input->post('title_tr'),
                'about_title_en' => $this->input->post('title_en'),
                'about_text_tr' => $this->input->post('metin_tr'),
                'about_text_en' => $this->input->post('metin_en'),
                'about_mission_tr' => $this->input->post('mission_tr'),
                'about_mission_en' => $this->input->post('mission_en'),
                'about_vision_tr' => $this->input->post('vision_tr'),
                'about_vision_en' => $this->input->post('vision_en')


            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->guncelle($data, $id, 'id', 'about');
            if ($result) {
                $this->session->set_flashdata('success', '<div class="alert alert-success">Hakkimizda Ugurla deyisdirildi!</div');
                redirect('back/about');
            } else {
                $this->session->set_flashdata('success', '<div class="alert alert-danger">Hata oldu,yeniden cehd edin!</div');
                redirect('back/about');
            }
            $this->load->view('back/about/about');
        }


    }

    public function aboutdelete($id,$where,$from)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success', '<div class="alert alert-success">Hakkimizda Ugurla silindi!</div');
            redirect('back/about');
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger">Hata oldu,yeniden cehd edin!</div');
            redirect('back/about');
        }

    }
    public function blog(){
        $this->load->model('Dtbs');
        $data['melumat']=$this->Dtbs->listele('blog');
        $data['head']="Blog sayfasi";

        $this->load->view('back/blog/blog',$data);
    }
    public function blogadd()
    {
        $this->load->view('back/blog/blog_add');
    }
    public function blogadded()
    {
        $config['upload_path']= FCPATH.'assets/front/images/blog';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/blog/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/blog/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='370';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

           $data=array(
    'blog_title_tr'=>$title_tr=$this->input->post('title_tr'),
    'blog_title_en'=>$title_en=$this->input->post('title_en'),
    'blog_sef_tr'=>seflink($title_tr),
    'blog_sef_en'=>seflink($title_en),
    'blog_desc_tr'=>$this->input->post('description_tr'),
    'blog_desc_en'=>$this->input->post('description_en'),
    'blog_keywords_tr'=>$this->input->post('keywords_tr'),
    'blog_keywords_en'=>$this->input->post('keywords_en'),
    'blog_tag_tr'=>$this->input->post('tag_tr'),
    'blog_tag_en'=>$this->input->post('tag_en'),
    'blog_image'=>$imagesave,
    'blog_status'=>1,
    'blog_date'=>date('Y-m-d')

);
            $this->load->model('Dtbs');
            $result=$this->Dtbs->elave('blog',$data);
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">Haber eklendi...</div');
                redirect('back/blog');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata olduyeniden deneyin!</div');
                redirect('back/blog');
            }

        }
//sekilsiz
        $data=array(
            'blog_title_tr'=>$title_tr=$this->input->post('title_tr'),
            'blog_title_en'=>$title_en=$this->input->post('title_en'),
            'blog_sef_tr'=>seflink($title_tr),
            'blog_sef_en'=>seflink($title_en),
            'blog_desc_tr'=>$this->input->post('description_tr'),
            'blog_desc_en'=>$this->input->post('description_en'),
            'blog_keywords_tr'=>$this->input->post('keywords_tr'),
            'blog_keywords_en'=>$this->input->post('keywords_en'),
            'blog_tag_tr'=>$this->input->post('tag_tr'),
            'blog_tag_en'=>$this->input->post('tag_en'),
            'blog_status'=>1,
            'blog_date'=>date('Y-m-d')

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->elave('blog',$data);
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Haber eklendi!</div');
            redirect('back/blog');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/blog');
        }


    }
    public function blogedit($id)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('blog',$id);
        $data['melumat']=$result;
        $this->load->view('back/blog/blog_edit',$data);

    }
    public function blogupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/blog';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/blog/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/blog/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='370';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id' => $id = $this->input->post('id'),
                'blog_title_tr'=>$title_tr=$this->input->post('title_tr'),
                'blog_title_en'=>$title_en=$this->input->post('title_en'),
                'blog_sef_tr'=>seflink($title_tr),
                'blog_sef_en'=>seflink($title_en),
                'blog_desc_tr'=>$this->input->post('description_tr'),
                'blog_desc_en'=>$this->input->post('description_en'),
                'blog_keywords_tr'=>$this->input->post('keywords_tr'),
                'blog_keywords_en'=>$this->input->post('keywords_en'),
                'blog_tag_tr'=>$this->input->post('tag_tr'),
                'blog_tag_en'=>$this->input->post('tag_en'),
                'blog_image'=>$imagesave,
                'blog_status'=>1,
                'blog_date'=>date('Y-m-d')

            );
            $sil=blogimage($id);
            unlink($sil->blog_image);
            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','blog');
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">Haber guncellendi...</div');
                redirect('back/blog');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu.yeniden deneyin!</div');
                redirect('back/blog');
            }

        }
//sekilsiz
        $data=array(
            'id' => $id = $this->input->post('id'),

            'blog_title_tr'=>$title_tr=$this->input->post('title_tr'),
            'blog_title_en'=>$title_en=$this->input->post('title_en'),
            'blog_sef_tr'=>seflink($title_tr),
            'blog_sef_en'=>seflink($title_en),
            'blog_desc_tr'=>$this->input->post('description_tr'),
            'blog_desc_en'=>$this->input->post('description_en'),
            'blog_keywords_tr'=>$this->input->post('keywords_tr'),
            'blog_keywords_en'=>$this->input->post('keywords_en'),
            'blog_tag_tr'=>$this->input->post('tag_tr'),
            'blog_tag_en'=>$this->input->post('tag_en'),
            'blog_status'=>1,
            'blog_date'=>date('Y-m-d')

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','blog');
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Haber guncllendi!</div');
            redirect('back/blog');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/blog');
        }


    }
public function blogdelete($id,$where,$from)
{
     $this->load->model('Dtbs');
     $result=$this->Dtbs->sil($id,$where,$from);
    if ($result) {
        $this->session->set_flashdata('success', '<div class="alert alert-success">Haber Basariyla  silindi!</div');
        redirect('back/blog');
    } else {
        $this->session->set_flashdata('success', '<div class="alert alert-danger">Hata oldu,yeniden cehd edin!</div');
        redirect('back/blog');
    }
}
public function services()
{
    $this->load->model('Dtbs');
    $data['melumat']=$this->Dtbs->listele('services');
    $data['head']="Hizmetler";

    $this->load->view('back/services/services',$data);
}

    public function servicesadd()
    {
        $this->load->view('back/services/services_add');
    }
    public function servicesadded()
    {
        $config['upload_path']= FCPATH.'assets/front/images/services';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/services/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/services/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='499';
            $config['height'] ='297';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'services_name_tr'=>$this->input->post('name_tr'),
                'services_name_en'=>$this->input->post('name_en'),
                'services_desc_tr'=>$this->input->post('description_tr'),
                'services_desc_en'=>$this->input->post('description_en'),
                'icon'=>$this->input->post('icon'),
                'services_image'=>$imagesave


            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->elave('services',$data);
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">hizmet eklendi...</div');
                redirect('back/services');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/services');
            }

        }
//sekilsiz
        $data=array(
            'services_name_tr'=>$this->input->post('name_tr'),
            'services_name_en'=>$this->input->post('name_en'),
            'services_desc_tr'=>$this->input->post('description_tr'),
            'services_desc_en'=>$this->input->post('description_en'),

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->elave('services',$data);
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Hizmet eklendi!</div');
            redirect('back/services');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/services');
        }


    }
    public function servicesedit($id)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('services',$id);
        $data['melumat']=$result;
        $this->load->view('back/services/services_edit',$data);

    }


    public function servicesupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/services';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/services/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/services/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='499';
            $config['height'] ='297';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'services_name_tr'=>$this->input->post('title_tr'),
                'services_name_en'=>$this->input->post('title_en'),
                'services_desc_tr'=>$this->input->post('description_tr'),
                'services_desc_en'=>$this->input->post('description_en'),
                'icon'=>$this->input->post('icon'),
                'services_image'=>$imagesave


            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','services');
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">hizmet guncellendi...</div');
                redirect('back/services');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/services');
            }

        }
//sekilsiz
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'services_name_tr'=>$this->input->post('title_tr'),
            'services_name_en'=>$this->input->post('title_en'),
            'services_desc_tr'=>$this->input->post('description_tr'),
            'icon'=>$this->input->post('icon'),
            'services_desc_en'=>$this->input->post('description_en')

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','services');
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Hizmet guncellendi!</div');
            redirect('back/services');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/services');
        }


    }
    function servicesdelete($id,$where,$from){
        $this->load->model('Dtbs');
       $result=$this->Dtbs->sil($id,$where,$from);
       $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Hizmet silindi!</div');
            redirect('back/services');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/services');
        }

    }

    public function servicestitle()
    {

        $this->load->model('Dtbs');
        $data['melumat']=$this->Dtbs->cek('services',5);
        $this->load->view('back/services/servicestitle',$data);



    }
    public function servicestitleupdate()
    {
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'services_top_title_tr'=>$this->input->post('top_title_tr'),
            'services_top_title_en'=>$this->input->post('top_title_en')
        );
        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','services');
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Hizmet ust guncellendi!</div');
            redirect('back/services');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/services');
        }


    }




    //settings

     function settings()
     {
         $this->load->model('Dtbs');
         $result=$this->Dtbs->listele('settings');
         $data['melumat']=$result;
         $data['head']="Ayarlar sayfasi";

         $this->load->view('back/settings/settings',$data);
     }
    public function settingsedit($id)
    {
        $this->load->model('Dtbs');
        $data['melumat']=$result=$this->Dtbs->cek('settings',$id);
        $this->load->view('back/settings/settings_edit',$data);
    }
public function settingsupdate()
{
    $data=array(
        'id'=>$id=$this->input->post('id'),
        'site_title'=>$this->input->post('title'),
        'site_url'=>$this->input->post('url'),
        'adress'=>$this->input->post('adress'),
        'adress2'=>$this->input->post('adress2'),
        'mail'=>$this->input->post('mail'),
        'phone'=>$this->input->post('phone'),
        'site_desc'=>$this->input->post('desc'),
        'site_keywords'=>$this->input->post('keywords')

    );
    $this->load->model('Dtbs');
    $result=$this->Dtbs->guncelle($data,$id,'id','settings');
    if ($result) {
        $this->session->set_flashdata('success', '<div class="alert alert-success">ayarlar basariyla deyisdirildi!</div');
        redirect('back/settings');
    } else {
        $this->session->set_flashdata('success', '<div class="alert alert-danger">Hata oldu,yeniden cehd edin!</div');
        redirect('back/settings');
    }
}
public function settingsdelete($id,$where,$from)
{
    $this->load->model('Dtbs');
    $result=$this->Dtbs->sil($id,$where,$from);
    if ($result) {
        $this->session->set_flashdata('success', '<div class="alert alert-success">ayarlar basariyla Silindi!</div');
        redirect('back/settings');
    } else {
        $this->session->set_flashdata('success', '<div class="alert alert-danger">Hata oldu,yeniden cehd edin!</div');
        redirect('back/settings');
    }
}
//adminsettings
public function adminsettings()
{
    $this->load->model('Dtbs');
    $result=$this->Dtbs->cek('admin',1);
    $data['melumat']=$result;
    $this->load->view('back/settings/adminsettings',$data);
}
public function adminsettingsupdate()
{
    $data=array(
        'id'=>$id=$this->input->post('id'),
        'email'=>$this->input->post('email'),
        'password'=>sha1(md5($this->input->post('password')))

    );
    $this->load->model('Dtbs');
    $result=$this->Dtbs->guncelle($data,$id,'id','admin');
    if ($result) {
        $this->session->set_flashdata('success','<div class="alert alert-success">Admin giris guncellendi...</div');
        redirect('back/adminsettings');
    }else{
        $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
        redirect('back/adminsettings');
    }
}
//messages
    function messages()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('message');
        $data['melumat']=$result;
        $data['head']="Mesajlar sayfasi";

        $this->load->view('back/messages/messages',$data);
    }
    function messageread($id)
    {
          $this->load->model('Dtbs');
          $data=array(
              'message_status'=>1
          );
          $this->Dtbs->messageguncelle($id,$data);
         $data['melumat']=$result=$this->Dtbs->cek('message',$id);
          $this->load->view('back/messages/messages_read',$data);
    }
    public function messagedelete($id,$where,$from)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success', '<div class="alert alert-success">Mesaj basariyla Silindi!</div');
            redirect('back/messages');
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger">Hata oldu,yeniden cehd edin!</div');
            redirect('back/messages');
        }
    }
    //carier
    public function carier()
    {
        $this->load->model('Dtbs');
        $data['melumat']=$this->Dtbs->listele('carier');
        $data['head']="Kariyer sayfasi";

        $this->load->view('back/carier/carier',$data);
    }

    public function carieredit($id)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('carier',$id);
        $data['melumat']=$result;
        $this->load->view('back/carier/carier_edit',$data);

    }

    public function carierupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/carier';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/carier/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/carier/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='450';
            $config['height'] ='352';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'carier_desc_tr'=>$this->input->post('description_tr'),
                'carier_desc_en'=>$this->input->post('description_en'),
                'carier_desc_title_tr'=>$this->input->post('desc_title_tr'),
                'carier_desc_title_en'=>$this->input->post('desc_title_en'),
                'carier_image'=>$imagesave


            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','carier');
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">Karyer guncellendi...</div');
                redirect('back/carier');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/carier');
            }

        }
//sekilsiz
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'carier_desc_tr'=>$this->input->post('description_tr'),
            'carier_desc_en'=>$this->input->post('description_en'),
            'carier_desc_title_tr'=>$this->input->post('desc_title_tr'),
            'carier_desc_title_en'=>$this->input->post('desc_title_en')

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','carier');
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Karyer guncellendi!</div');
            redirect('back/carier');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/carier');
        }


    }
    public function  carieradd()
    {
         $this->load->view('back/carier/carieradd');
    }
    public function carieradded()
    {
        $config['upload_path']= FCPATH.'assets/front/images/carier';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/carier/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/carier/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='450';
            $config['height'] ='352';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'carier_desc_title_tr'=>$this->input->post('title_tr'),
                'carier_desc_title_en'=>$this->input->post('title_en'),
                'carier_desc_tr'=>$this->input->post('description_tr'),
                'carier_desc_en'=>$this->input->post('description_en'),

                'carier_image'=>$imagesave


            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->elave('carier',$data);
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">Karyer eklendi...</div');
                redirect('back/carier');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/carier');
            }

        }
    }

    function carierdelete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Karyer silindi!</div');
            redirect('back/carier');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/carier');
        }

    }
    //cariertitle

    public function cariertitle()
    {

        $this->load->model('Dtbs');
        $data['melumat']=$this->Dtbs->cek('carier',7);
        $this->load->view('back/carier/cariertitle',$data);

    }
    public function cariertitleupdate()
    {
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'carier_top_title_tr'=>$this->input->post('top_title_tr'),
            'carier_top_title_en'=>$this->input->post('top_title_en')
        );
        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','carier');
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Karyer ust guncellendi!</div');
            redirect('back/carier');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/carier');
        }


    }



    //testmin
    public function testmin()
    {
        $this->load->model('Dtbs');
        $data['melumat']=$this->Dtbs->listele('testmin');
        $data['head']="Ortaklar";

        $this->load->view('back/testmin/testmin',$data);
    }
    public function testminadd()
    {
        $this->load->view('back/testmin/testmin_add');
    }
    public function testminadded()
    {
        $config['upload_path']= FCPATH.'assets/front/images/brand';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/brand/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/brand/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='300';
            $config['height'] ='62';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'testmin_name_tr'=>$this->input->post('name_tr'),
                'testmin_name_en'=>$this->input->post('name_en'),

                'testmin_image'=>$imagesave


            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->elave('testmin',$data);
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">Ortak eklendi...</div');
                redirect('back/testmin');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/testmin');
            }

        }
//sekilsiz
        $data=array(
            'testmin_name_tr'=>$this->input->post('name_tr'),
            'testmin_name_en'=>$this->input->post('name_en')

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->elave('testmin',$data);
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Hizmet eklendi!</div');
            redirect('back/testmin');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/testmin');
        }


    }
    public function testminedit($id)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('testmin',$id);
        $data['melumat']=$result;
        $this->load->view('back/testmin/testmin_edit',$data);

    }
    public function testminupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/brand';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/brand/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/brand/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='300';
            $config['height'] ='62';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'testmin_name_tr'=>$this->input->post('name_tr'),
                'testmin_name_en'=>$this->input->post('name_en'),

                'testmin_image'=>$imagesave


            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','testmin');
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">Ortak guncellendi...</div');
                redirect('back/testmin');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/testmin');
            }

        }
//sekilsiz
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'testmin_name_tr'=>$this->input->post('name_tr'),
            'testmin_name_en'=>$this->input->post('name_en')

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','testmin');
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Hizmet guncellendi!</div');
            redirect('back/testmin');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/testmin');
        }


    }
//testmindelete
    function testmindelete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Ortak silindi!</div');
            redirect('back/testmin');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/testmin');
        }

    }
    public function project()
    {
        $this->load->model('Dtbs');
        $data['melumat']=$this->Dtbs->listele('project');
        $data['head']="Projeler sayfasi";

        $this->load->view('back/project/project',$data);
    }
    public function projectadd()
    {
        $this->load->view('back/project/project_add');
    }
    public function projectadded()
    {
        $config['upload_path']= FCPATH.'assets/front/images/projects';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/projects/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/projects/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='390';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'project_title_tr'=>$this->input->post('name_tr'),
                'project_title_en'=>$this->input->post('name_en'),

                'project_image'=>$imagesave


            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->elave('project',$data);
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">proje eklendi...</div');
                redirect('back/project');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/project');
            }

        }
//sekilsiz
        $data=array(
            'project_title_tr'=>$this->input->post('name_tr'),
            'project_title_en'=>$this->input->post('name_en')

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->elave('project',$data);
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Proje eklendi!</div');
            redirect('back/project');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/project');
        }


    }
    public function projectedit($id)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('project',$id);
        $data['melumat']=$result;
        $this->load->view('back/project/project_edit',$data);

    }
    public function projectupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/projects';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/projects/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/projects/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='390';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'project_title_tr'=>$this->input->post('name_tr'),
                'project_title_en'=>$this->input->post('name_en'),

                'project_image'=>$imagesave



            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','project');
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">Ortak guncellendi...</div');
                redirect('back/project');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/project');
            }

        }
//sekilsiz
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'project_title_tr'=>$this->input->post('name_tr'),
            'project_title_en'=>$this->input->post('name_en')

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','project');
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Proje guncellendi!</div');
            redirect('back/project');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/project');
        }


    }
    //projectdeleete
    function projectdelete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Proje silindi!</div');
            redirect('back/project');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/project');
        }

    }

    public function cixis()
    {
        $this->session->sess_destroy();
        redirect('back');

    }

    //slider
    public function slider()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('slider');
        $data['head']="Slider sayfasi";

        $data['melumat']=$result;

        $this->load->view('back/slider/slider',$data);
    }
    public function slideradd()
    {
        $this->load->view('back/slider/slider_add');
    }
    public function slideradded()
    {
        $config['upload_path']= FCPATH.'assets/front/images/slides';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/slides/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/slides/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='1920';
            $config['height'] ='700';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'slider_name_tr'=>$this->input->post('name_tr'),
                'slider_name_en'=>$this->input->post('name_en'),
                'slider_desc_tr'=>$this->input->post('desc_tr'),
                'slider_desc_en'=>$this->input->post('desc_en'),
                'slider_link_name_tr'=>$this->input->post('linkname_tr'),
                'slider_link_name_en'=>$this->input->post('linkname_en'),
                'slider_link_url'=>$this->input->post('linkurl'),

                'slider_image'=>$imagesave


            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->elave('slider',$data);
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">slider eklendi...</div');
                redirect('back/slider');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/slider');
            }

        }
//sekilsiz
        $data=array(
            'slider_name_tr'=>$this->input->post('name_tr'),
            'slider_name_en'=>$this->input->post('name_en'),
            'slider_desc_tr'=>$this->input->post('desc_tr'),
            'slider_desc_en'=>$this->input->post('desc_en'),
            'slider_link_name_tr'=>$this->input->post('linkname_tr'),
            'slider_link_name_en'=>$this->input->post('linkname_en'),
            'slider_link_url'=>$this->input->post('linkurl')
        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->elave('slider',$data);
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">Proje eklendi!</div');
            redirect('back/slider');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/slider');
        }


    }

    public function slideredit($id)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('slider',$id);
        $data['melumat']=$result;
        $this->load->view('back/slider/slider_edit',$data);

    }

    public function sliderupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/slides';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/slides/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/slides/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='1920';
            $config['height'] ='700';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'slider_name_tr'=>$this->input->post('name_tr'),
                'slider_name_en'=>$this->input->post('name_en'),
                'slider_desc_tr'=>$this->input->post('desc_tr'),
                'slider_desc_en'=>$this->input->post('desc_en'),
                'slider_link_name_tr'=>$this->input->post('linkname_tr'),
                'slider_link_name_en'=>$this->input->post('linkname_en'),
                'slider_link_url'=>$this->input->post('linkurl'),

                'slider_image'=>$imagesave



            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','slider');
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success">slider guncellendi...</div');
                redirect('back/slider');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
                redirect('back/slider');
            }

        }
//sekilsiz
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'slider_name_tr'=>$this->input->post('name_tr'),
            'slider_name_en'=>$this->input->post('name_en'),
            'slider_desc_tr'=>$this->input->post('desc_tr'),
            'slider_desc_en'=>$this->input->post('desc_en'),
            'slider_link_name_tr'=>$this->input->post('linkname_tr'),
            'slider_link_name_en'=>$this->input->post('linkname_en'),
            'slider_link_url'=>$this->input->post('linkurl')

        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','slider');
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">slider guncellendi!</div');
            redirect('back/slider');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/slider');
        }


    }
    function sliderdelete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success">slider silindi!</div');
            redirect('back/slider');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div');
            redirect('back/slider');
        }

    }






}
