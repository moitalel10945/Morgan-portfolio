<?php

use Livewire\Component;
use App\Models\Skill;

new class extends Component
{
    public function getSkillsProperty(){
        return Skill::orderBy('level','desc')->get();
    }
};
?>

<div class="max-w-3xl mx-auto space-y-6">
    @foreach ($this->skills as $skill)
    <div>
        <div class="flex justify-between mb-1 ont-medium text-gray-900">
            <span>{{ $skill->name}}</span>
            <span>{{ $skill->level }}%</span>
        </div>
        <div class="w-full bg-surface-muted rounded h-2">
            <div class="bg-primary h-2 rounded transition-all duration-500" style="width:{{ $skill->level }}%">
            </div>
        </div>
    </div>
    @endforeach
</div>