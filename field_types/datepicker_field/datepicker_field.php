<?php
// initialisation
global $mf_domain;


// class with static properties encapsulating functions for the field type

class datepicker_field extends mf_custom_field {

  public $allow_multiple = TRUE;
  public $has_properties = TRUE;
  
  public function _update_description(){
    global $mf_domain;
    $this->description = __("Simple datepicker input",$mf_domain);
  }
  
  public function _options1(){
    global $mf_domain;
    
    $data = array(
      'option'  => array(
        'type'  => array(
          'type'        =>  'text',
          'id'          =>  'uno',
          'label'       =>  'opcion color picker',
          'name'        =>  'mf_field[option][uno]',
          'default'     =>  '',
          'description' =>  __( 'aqui una descripcion', $mf_domain ),
          'value'       =>  '',
          'div_class'    => 'clase1',
          'class'       => 'vemos1'
        )
      )
    );
    
    return $data;
  }
  
}
