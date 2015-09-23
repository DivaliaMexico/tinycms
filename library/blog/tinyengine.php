<?php

class TinyEngine
{
    public $itemPath;

    function __construct($itemPath)
    {
        $this->itemPath = $itemPath;
    }

    public function fetchFilenamesInDirectory()
    {
        // Set sorting order for scandir()
        $sorting_order = SCANDIR_SORT_ASCENDING;
        // Scan all files in directory
        $directory = scandir($this->itemPath,1);
        // Only keep files with .md extension
        return array_filter($directory, function($data)
        {
            return substr($data,-3) == ".md" ? true : false;
        }
        );
    }

    public function fetchFileContents($filename)
    {
        // Create file handler
        $fh = fopen($this->itemPath.DIRECTORY_SEPARATOR.$filename, 'r');

        // Read file as variable
        $content = fread($fh, filesize($this->itemPath.DIRECTORY_SEPARATOR.$filename));

        // Close file
        fclose($fh);
        $item = array();

        // Remove .md extension from name key
        $item["name"] = str_replace(".md", "", $filename);

        // If the file contains tags, lines which start and end with | symbol
        if (strpos($content,"|") == 0)
        {
            // Get tag list from content
            $tag_array = explode("|", $content);

            // Split up into individual tags
            $item["tags"] = explode(",", trim($tag_array[1]," "));

            // Set content to content minus tags
            $content = $tag_array[2];
        }
        else
        {
            $item["tags"] = array();
        }
        
        // Format content using Markdown library
        $item["content"] = Markdown($content);
        return $item;
    }
}

?>
