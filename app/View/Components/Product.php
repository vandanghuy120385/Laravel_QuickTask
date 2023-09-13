<?php

namespace App\View\Components;

use Dotenv\Util\Str;
use Illuminate\View\Component;

class Product extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $slug;
    public string $image;
    public string $name;
    public float $price;
    public function __construct(string $slug,  string $image,  string $name,  float $price)
    {
        $this->slug = $slug;
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product');
    }
}
