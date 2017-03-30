<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Gwensreports_Form_Report_Contribute_Depdate',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Contribute_Depdate',
      'description' => 'Contribute_Depdate (org.britepaths.gwensreports)',
      'class_name' => 'CRM_Gwensreports_Form_Report_Contribute_Depdate',
      'report_url' => 'contribute/depdate',
      'component' => 'CiviContribute',
    ),
  ),
);