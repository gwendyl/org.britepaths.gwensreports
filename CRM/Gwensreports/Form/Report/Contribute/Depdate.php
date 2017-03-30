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

  public function alterDisplay(&$rows) {
    parent::alterDisplay($rows);

    // Put contact type next to donor category field
    if (!empty($this->_columnHeaders['civicrm_contact_contact_type'])
    && !empty($this->_columnHeaders['civicrm_value_donor_type_19_custom_142'])) {
      $newColumnHeaders = array();
      $contactTypeCol = $this->_columnHeaders['civicrm_contact_contact_type'];
      unset($this->_columnHeaders['civicrm_contact_contact_type']);
      foreach ($this->_columnHeaders as $key => $col) {
        if ($key == 'civicrm_value_donor_type_19_custom_142') {
          $newColumnHeaders['civicrm_contact_contact_type'] = $contactTypeCol;
          $contactTypeCol = FALSE;
        }
        $newColumnHeaders[$key] = $col;
      }
      $this->_columnHeaders = $newColumnHeaders;
    }
  }

}
