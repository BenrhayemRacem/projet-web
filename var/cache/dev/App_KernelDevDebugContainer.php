<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6zx9oCo\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6zx9oCo/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6zx9oCo.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6zx9oCo\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6zx9oCo\App_KernelDevDebugContainer([
    'container.build_hash' => '6zx9oCo',
    'container.build_id' => '8872f2ff',
    'container.build_time' => 1623498919,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6zx9oCo');
