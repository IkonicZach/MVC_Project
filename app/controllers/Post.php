<?php

class Post extends Controller
{
    public function __construct()
    {
        echo "this is constructor of " . __CLASS__ . " class<br>";
    }
    public function index()
    {
        echo "this is index of " . __CLASS__ . " class<br>";
    }
    public function show($data = [])
    {
        echo "this is show of " . __CLASS__ . " class<br>";
        echo "<pre>" . print_r($data, true) . "</pre>";
    }

}
