<?php

namespace Filament\Forms\Concerns;

trait Cloneable
{
    public function cloneComponents(): static
    {
        $components = [];

        foreach ($this->getComponents(true) as $component) {
            $components[] = $component->getClone();
        }

        return $this->components($components);
    }

    public function getClone(): static
    {
        $clone = clone $this;
        $clone->cloneComponents();

        return $clone;
    }
}
