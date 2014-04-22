<?php namespace Rice\Rules;

class FileRules {

    /**
     * Determine whether the file was uploaded.
     *
     * @param mixed $file
     * @return boolean
     */
    public function uploaded($file)
    {
        return \is_string($file) and \is_uploaded_file($file);
    }

    /**
     * Determine whether the path exists.
     *
     * @param mixed $path
     * @return boolean
     */
    public function exists($path)
    {
        return \is_string($path) and \file_exists($path);
    }

}

