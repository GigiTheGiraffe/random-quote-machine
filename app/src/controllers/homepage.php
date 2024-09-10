<?php

namespace App\Src\Controllers;
use App\Src\Model\RandomnImages as Image, App\Src\Model\RandomnQuotes as Quote;
require_once '../model/randomnImages.php';
require_once '../model/randomnQuotes.php';
class Homepage
{
    private string $imageUrl;
    private string $imageAlt;
    private string $quoteAuthor;
    private string $quoteContent;

    public function getImageAlt(): string {
        return $this->imageAlt;
    }
    public function getImageUrl(): string {
        return $this->imageUrl;
    }
    public function getQuoteAuthor(): string {
        return $this->quoteAuthor;
    }
    public function getQuoteContent(): string {
        return $this->quoteContent;
    }

    public function __construct() {
        $array = Image::images();
        $key = array_rand($array);
        $this->imageUrl = $key;
        $this->imageAlt = $array[$key];
        $array = Quote::quotes();
        $key = array_rand($array);
        $this->quoteContent = $key;
        $this->quoteAuthor = $array[$key];
    }
}

$content = new Homepage();

require_once '../../templates/view.php';
