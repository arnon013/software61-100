<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index()
	{
        echo "Report Index";
    }
    public function _hello()
    {
        echo "</br>"."Hello word";
    }
    public function showname($name="Arnon",$lastname="Phukerd")
    {
        echo "My name is ".$name."".$lastname;
        $this->_hello();
    }
    public function showviews()
    {
        $this->load->view("hello_views");
        $this->load->view("hello_views");
        $this->load->view("hello_views");
    }
    public function showuser()
    {
        $data ["name"] = "Arnon";
        $data ["lastname"] = "Phukerd";
        $data ["nickname"] = "Arm";
        $this->load->view("user_page",$data);
    }
    public function getuser($p1=null,$p2=null,$p3=null)
    {
        $data ["name"] = $p1;
        $data ["lastname"] = $p2;
        $data ["nickname"] = $p3;
        $this->load->view("user_page",$data);
    }
    public function showbooks()
    {
        $data["book"]=array("Jave","Kolin","php");
        $this->load->view("book_page",$data);
    }


}
