<?php 

/* =================================================================================================
Project metaboxes here
================================================================================================= */

 // Project details
$meta_boxes[] = array(
  'id'            => 'project-details', // $id
  'title'         => 'Project Details', // $title
  'pages'         => array('project'), // $Array of pages boxes will appear on
  'context'       => 'normal', // $context (normal, advanced, side)
  'priority'      => 'high', // position in editor (high, core, default, low)
  'autosave' => true,

  // List of meta fields
  'fields' => array(

    array(
      'id'   => $prefix . 'description',
      'type' => 'text',
      'desc' => 'Description',
    ),
    array(
      'id'   => $prefix . 'date_range',
      'type' => 'text',
      'desc' => 'Date Range',
    ),
    array(
      'id'   => $prefix . 'involvement',
      'type' => 'text',
      'desc' => 'e.g. "full time"',
    ),
    array(
      'id'   => $prefix . 'primary_color',
      'type' => 'text',
      'desc' => 'Primary Color',
    ),
    array(
      'id'   => $prefix . 'secondary_color',
      'type' => 'text',
      'desc' => 'Secondary Color',
    ),
    array(
      'id'   => $prefix . 'featured_on',
      'type' => 'textarea',
      'desc' => 'HTML list of places featured with links',
    ),
    array(
      'id'   => $prefix . 'role',
      'type' => 'textarea',
      'desc' => 'List / description of role in project'
    ),
  )
 );



// Image metaboxes
for ($i=1; $i<=10; $i++) {

  $enumerator = ($i < 10) ? '0'.$i : $i;

  $meta_boxes[] = array(
    'id'            => 'image-' . $enumerator, // $id
    'title'         => 'Image ' . $enumerator, // $title
    'pages'         => array('project'), // $Array of pages boxes will appear on
    'context'       => 'normal', // $context (normal, advanced, side)
    'priority'      => 'high', // position in editor (high, core, default, low)
    'autosave' => true,

    // List of meta fields
    'fields' => array(

      array(
          'name'             => 'Image Upload',
          'id'               => $prefix . 'image-' . $enumerator,
          'type'             => 'plupload_image',
          'max_file_uploads' => 1,
        ),

      array(
        'id'   => $prefix . 'description-' . $enumerator,
        'type' => 'text',
        'desc' => 'Description',
      ),
      array(
        'id'   => $prefix . 'status-' . $enumerator,
        'type' => 'text',
        'desc' => 'Status',
      ),

      array(
       'id'   => $prefix . 'date-' . $enumerator,
       'type' => 'text',
       'desc' => 'Date',
      ), 
    )
   );
}




 ?>