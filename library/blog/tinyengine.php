<?php

class TinyEngine
{
    public $itemPath;

    function __construct($itemPath)
    {
        $this->itemPath = $itemPath;
    }

    function fetchFilenamesInDirectory()
    {
        $ignored = array('.', '..', '.svn', '.htaccess');

        $files = array();
        foreach (scandir($this->itemPath) as $file)
        {
            if (in_array($file, $ignored)) continue;
            $files[$file] = filemtime($this->itemPath . '/' . $file);
        }

        arsort($files);
        $files = array_keys($files);

        return ($files) ? $files : false;
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
