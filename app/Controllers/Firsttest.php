<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class Firsttest extends Controller
{
    public function getposts() 
    {
        // getposts = getPosts
        //   echo "First test controller";
        $posts = array(
            "Love Life",
            "Friendship",
            "Romance",
            "Communication"
        );

        print_r($posts);
    }

    // public function test_body_parser() {
    // $parser = new \CodeIgniter\View\Parser();
    
    // $data = [
    //         'blog_title'   => 'My Blog Title',
    //         'blog_heading' => 'My Blog Heading'
    // ];
    
    // echo $parser->setData($data)
    //              ->render('practice/blog_template');
    // }
}