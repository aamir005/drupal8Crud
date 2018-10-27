<?php

namespace Drupal\crudoperation\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CreateUpdateForm.
 */
class CreateUpdateForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'create_update_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['first_name'] = [
      '#type' => 'text_format',
      '#title' => $this->t('First Name'),
      '#description' => $this->t('User First Name'),
      '#weight' => '0',
    ];
    $form['last_name'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Last Name'),
      '#weight' => '0',
    ];
    $form['email_id'] = [
      '#type' => 'email',
      '#title' => $this->t('Email Id'),
      '#description' => $this->t('user email id'),
      '#weight' => '0',
    ];
    $form['mobile_number'] = [
      '#type' => 'tel',
      '#title' => $this->t('Mobile Number'),
      '#description' => $this->t('User&#039;s Mobile Number'),
      '#weight' => '0',
    ];
    $form['address'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Address'),
      '#description' => $this->t('User&#039;s Address'),
      '#weight' => '0',
    ];
    $form['gender'] = [
      '#type' => 'radio',
      '#title' => $this->t('Gender'),
      '#description' => $this->t('User&#039;s Gender'),
      '#weight' => '0',
    ];
    $form['age'] = [
      '#type' => 'number',
      '#title' => $this->t('Age'),
      '#description' => $this->t('user&#039;s age'),
      '#weight' => '0',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }

}
