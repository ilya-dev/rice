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

    /**
     * Determine whether the given path points to a directory.
     *
     * @param mixed $path
     * @return boolean
     */
    public function directory($path)
    {
        return \is_string($path) and \is_dir($path);
    }

    /**
     * Determine whether the given path points to a file.
     *
     * @param mixed $path
     * @return boolean
     */
    public function file($path)
    {
        return \is_string($path) and \is_file($path);
    }

}

