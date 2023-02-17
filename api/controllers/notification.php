<?php

class Notification
{
    private string $id;
    public string $icon_path;
    public string $content;
    public DateTime $created_at;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
