<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Inquiries',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'email' => array(
    'from' => 'site@havymedia.com',
    'to' => 'info@havymedia.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'date' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Date',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Date\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>