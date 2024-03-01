<?php

$config = array(

  'kits' => array(
    array(
      'field' => 'kit_name',
      'label' => 'Nombre del Kit',
      'rules' => 'trim|required'
    ),

    array(
      'field' => 'user_id',
      'label' => 'Responsable',
      'rules' => 'trim|required'
    ),

    array(
      'field' => 'status',
      'label' => 'Estado',
      'rules' => 'trim|required'
    ),

    array(
      'field' => 'observations',
      'label' => 'Observaciones',
      'rules' => 'trim'
    )
  ),

  'tools' => array(
    array(
      'field' => 'kit_id',
      'label' => 'Kit',
      'rules' => 'trim|required|integer'
    ),

    array(
      'field' => 'tool_name',
      'label' => 'Nombre de la herramienta',
      'rules' => 'trim|required'
    ),

    array(
      'field' => 'stock',
      'label' => 'Cantidad',
      'rules' => 'trim|required'
    ),

    array(
      'field' => 'brand',
      'label' => 'Marca',
      'rules' => 'trim|required'
    ),

    array(
      'field' => 'status',
      'label' => 'Estado',
      'rules' => 'trim|required'
    ),

    array(
      'field' => 'observations',
      'label' => 'Observaciones',
      'rules' => 'trim'
    )
  )
);
