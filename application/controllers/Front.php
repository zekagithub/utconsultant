<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends My_Controller
{
    public function index()
    {

        $this->load->model('Dtbs');
        $result = $this->Dtbs->cek('settings', 2);
        $services = $this->Dtbs->listele('services');
        $slider=$this->Dtbs->listele('slider');
        $data['melumat'] = $result;
        $data['slider']=$slider;
        $data['servic'] = $services;
        $this->load->view('front/home', $data);
    }

    //dildeyisdir
    public function dildeyisdir($dil)
    {
        $this->session->set_userdata('lang', $dil);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function about()
    {
        $this->load->model('Dtbs');
        $data['melum']=$this->Dtbs->cek('settings',2);

        $data['melumat'] = aboutcek();
        $data['head'] = "Hakkimizda";
        $this->load->view('front/about/about', $data);


    }

    public function services()
    {
        $this->load->model('Dtbs');
        $result = $this->Dtbs->listele('services');
        $data['head'] = "Hizmetler";
        $data['melumat'] = $result;
        $this->load->view('front/services/services', $data);
    }

    public function blog()
    {
        $this->load->model('Dtbs');
        $result = $this->Dtbs->listele('blog');
        $site = $this->Dtbs->cek('settings',2);
        $data['melum'] = $site;
        $data['melumat'] = $result;
        $data['head'] = 'Haberler';
        $this->load->view('front/blog/blog', $data);
    }

    public function blog_single($sef)
    {
        $this->load->model('Dtbs');
        $result = $this->Dtbs->blogcek($sef);
        $data['melumat'] = $result;
        $data['head'] = 'Haberler';
        $this->load->view('front/blog/blog_single', $data);
    }

    public function contact()
    {
        $this->load->model('Dtbs');
        $result = $this->Dtbs->cek('settings', 2);
        $data['melumat'] = $result;
        $data['head'] = 'Iletisim';
        $this->load->view('front/contact/contact', $data);
    }

    public function message()
    {
        $this->form_validation->set_rules('name', 'adiniz', 'trim|required|min_length[2]|max_length[15]|strip_tags');
        $this->form_validation->set_rules('email', 'emailiniz', 'trim|required|valid_email|strip_tags');
        $this->form_validation->set_rules('subject', 'movzu', 'trim|required|min_length[5]|strip_tags');
        $this->form_validation->set_rules('message', 'mesaj', 'trim|required|min_length[5]|strip_tags');

        $xetalar = array(
            'required' => '{field} burani bos qoymayin',
            'min_length' => '{field} minimum 2 herfli olmalidir',
            'valid_email' => '{field} kecerli bir email qeyd edin'
        );
        $this->form_validation->set_message($xetalar);

        if ($this->form_validation->run() == false) {
            redirect($_SERVER['HTTP_REFERER'], $this->session->set_flashdata('xeta', '<div class="alert alert-danger"
			<i class="fa fa-exclamation-circle"></i>
			' . $xetalar['xeta'] = validation_errors() . '

			'));
        } else {
            $data = array(
                'name' => $this->input->post('name', true),
                'mail' => $this->input->post('email', true),
                'subject' => $this->input->post('subject', true),
                'phone'=>$this->input->post('phone',true),
                'message' => $this->input->post('message', true),
                'message_status' => 0

            );


        }
        $cavab = $this->Dtbs->elave('message', $data);
        if ($cavab) {
            $this->session->set_flashdata('xeta', '<div class="alert alert-success"><h4>Mesaj basariyla iletildi,sizinle mailiniz aracigiyla iletisim yapilacak...</h4></div>');
            redirect($_SERVER['HTTP_REFERER']);


        } else {
            $this->session->set_flashdata('xeta', '<div class=alert alert-danger><h4>Mesaj iletilmedi,</h4></div>');
            redirect($_SERVER['HTTP_REFERER']);

        }
    }
    public function carier()
    {
        $this->load->model('Dtbs');
        $result = $this->Dtbs->listele('carier');
        $data['melumat'] = $result;
        $data['head'] = 'Karier';
        $this->load->view('front/carier/carier', $data);
    }
}
?>