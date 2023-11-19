<?php

class Dream
{
    public function connect()
    {
        $json_file = 'DreamDictionary.json';

        $json_data = file_get_contents($json_file);

        $dreams = json_decode($json_data, true);

        return $dreams;
    }

    public function blogHeader()
    {
        $dreams = $this->connect();

        $blogHeaders = $dreams['BlogHeader'];

        return $blogHeaders;
    }

    public function blogDetail()
    {
        $dreams = $this->connect();

        $blogDetails = $dreams['BlogDetail'];

        return $blogDetails;
    }

    public function title()
    {
        $searchTitle = $_POST['searchTitle'];

        return $searchTitle;
    }

    public function search()
    {
        $dreams = $this->connect();

        $blogDetails = $this->blogDetail();

        $searchTitle = $this->title();

        $results = array_filter($blogDetails, function ($item) use ($searchTitle) {
            return stripos($item['BlogContent'], $searchTitle) !== false;
        });

        return $results;
    }
}

$dreams = new Dream();
