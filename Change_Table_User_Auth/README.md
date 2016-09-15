How to change table User in LARAVEL
-----------------------------------

We have 2 files.

 1. User.php
 2. AdminController.php

**In User.php**

    protected $table = 'table_name';
    protected $primaryKey = 'id';

Function set password:

    public function getAuthPassword() {
        return $this->pass_word;
    }
