<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeroBanner extends Component
{
    public string $smallText;
    public string $midText;
    public string $largeText1;
    public string $largeText2;
    public string $desc;
    public string $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $smallText,  string $midText, string $largeText1, string $largeText2, string $desc, string $image)
    {
        $this->smallText = $smallText;
        $this->midText = $midText;
        $this->largeText1 = $largeText1;
        $this->largeText2 = $largeText2;
        $this->desc = $desc;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero-banner');
    }
}
