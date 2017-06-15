<?php

/**
 * Created by PhpStorm.
 * User: vikram
 * Date: 3/6/17
 * Time: 11:48 PM
 */
class Gallery extends CI_Model
{
    public function getGallery(){
        return $this->db->get('ci_ajax_gallery')->result();
    }

    public function save($param){
        $data = array(
            'path' => $param['name'],
            'thumb_path' => $param['thumb']
        );
        $this->db->insert('ci_ajax_gallery', $data);
    }

    public function reset(){
        $this->db->empty_table('ci_ajax_gallery');
    }
}