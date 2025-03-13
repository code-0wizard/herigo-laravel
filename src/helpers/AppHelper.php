<?php

use Illuminate\Support\Facades\Auth;

function is_logged_in(): bool
{
  return Auth::check();
}