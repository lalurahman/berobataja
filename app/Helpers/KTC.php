<?php

function format_rupiah($angka)
{

  $hasil_rupiah = "Rp. " . number_format($angka, 2, ',', '.');
  return $hasil_rupiah;
}

function form_input($errors,  $name, $label, $data)
{
  $is_invalid = '';
  $invalid_feedback = '<span></span>';
  if ($errors->first($name)) {
    $is_invalid = 'is-invalid';
    $invalid_feedback = '<div class="invalid-feedback">' . $errors->first($name) . '</div>';
  }

  $form = '<div class="form-group">
            <label for="">' . $label . '</label>
            <input type="text" class="form-control ' . $is_invalid . '  name="' . $name . '"  placeholder="' . $label . '">'
    . $invalid_feedback .
    '</div>';

  return $form;
}
