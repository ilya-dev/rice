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

}

