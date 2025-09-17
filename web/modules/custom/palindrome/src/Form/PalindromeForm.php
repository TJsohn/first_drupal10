<?php

namespace Drupal\palindrome\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PalindromeForm extends FormBase
{

    public function getFormId()
    {
        return 'palindrome_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['text'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Enter text'),
            '#required' => TRUE,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Check'),
        ];

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $input = $form_state->getValue('text');
        $normalized = strtolower(preg_replace('/[^a-z0-9]/', '', $input));
        $is_palindrome = $normalized === strrev($normalized);

        if ($is_palindrome) {
            $this->messenger()->addStatus($this->t('Yes, this is a palindrome!'));
        } else {
            $this->messenger()->addError($this->t('No, this is not a palindrome.'));
        }
    }
}
