<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKxFfWLp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKxFfWLp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKxFfWLp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKxFfWLp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKxFfWLp\App_KernelDevDebugContainer([
    'container.build_hash' => 'KxFfWLp',
    'container.build_id' => 'd22bf61b',
    'container.build_time' => 1667826828,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKxFfWLp');
