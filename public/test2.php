<?php

interface Notifier
{
    public function notify(string $message);
}

class FacebookNotifier implements Notifier
{
    public function notify(string $message)
    {
        echo 'Facebook_ ' . $message;
    }
}

class TelegramNotifier implements Notifier
{
    public function notify(string $message)
    {
        echo 'Telegram_ ' . $message;
    }
}

class ViberNotifier implements Notifier
{
    public function notify(string $message)
    {
        echo 'Viber_ ' . $message;
    }
}

class PostController
{
    public $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function createPost()
    {
        $this->notifier->notify('pre create');
    }
}

$notify = new FacebookNotifier();
//$notify = new TelegramNotifier();
//$notify = new ViberNotifier();

$post = new PostController($notify);
$post->createPost();