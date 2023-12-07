<?php

namespace App\View\Components\Sections;

use Closure;
use App\Models\Skill;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SkillsSection extends Component {
    public $skills;
    /**
     * Create a new component instance.
     */
    public function __construct(Skill $skills) {
        $this->skills = $skills;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.sections.skills-section');
    }
}
