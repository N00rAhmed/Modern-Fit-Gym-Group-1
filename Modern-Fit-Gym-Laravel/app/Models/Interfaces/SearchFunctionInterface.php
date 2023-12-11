<?php

namespace App\Http\Controllers;

class SearchFunctionInterface
{
    private $SearchQuery = "search query string";

    public function getSearchQuery()
    {
        return $SearchQuery;
    }
    public function setSearchQuery($search_query){
        $SearchQuery = $search_query;
    }


    public function SearchFunction(){

    }

}
