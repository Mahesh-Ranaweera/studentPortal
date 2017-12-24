<?php
    /**
     *User class for registering new users
     */

     class User{
        public $fname;
        public $lname;
        public $parent;
        public $school;
        public $district;
        public $field;
        public $contact;

        public function __construct($fname, $lname, $parent, $school, $district, $field, $contact){
            $this->fname = $fname;
            $this->lname = $fname;
            $this->parent= $parent;
            $this->school= $school;
            $this->district = $district;
            $this->field = $field;
            $this->contact=$contact;
        }

        public function getName(){
            return $this->fname;
        }

     }