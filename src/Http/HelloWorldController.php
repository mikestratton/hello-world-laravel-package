<?php

namespace Mikestratton\Hello\Http;

class HelloWorldController{

    public function hello($name = null){
        return view('helloworldpackage::hello-world', compact('name'));
    }


}