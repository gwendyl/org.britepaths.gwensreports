<?php

class CRM_Gwensreports_Form_Report_Contribute_Depdate extends CRM_Report_Form_Contribute_Detail {
  public function __construct() {
    parent::__construct();
    $this->_columns['civicrm_contact']['fields']['contact_type']['default'] = TRUE;
    $this->_columns['civicrm_phone']['fields']['phone']['default'] = FALSE;
    $this->_columns['civicrm_email']['fields']['email']['default'] = FALSE;
    if (!empty($this->_columns['civicrm_contribution']['fields']['campaign_id'])) {
      $this->_columns['civicrm_contribution']['fields']['campaign_id']['default'] = FALSE;
    }
    if (!empty($this->_columns['civicrm_address']['fields']['country_id'])) {
      $this->_columns['civicrm_address']['fields']['country_id']['default'] = FALSE;
    }
  }

}
