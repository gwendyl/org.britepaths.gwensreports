<?php

class CRM_Gwensreports_Form_Report_Contribute_Depdate extends CRM_Report_Form_Contribute_Detail {
  public function __construct() {
    parent::__construct();
    $this->_columns['civicrm_contact']['fields']['contact_type']['default'] = TRUE;
  }

}
