<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBlgxlzE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBlgxlzE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBlgxlzE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBlgxlzE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBlgxlzE\App_KernelDevDebugContainer([
    'container.build_hash' => 'BlgxlzE',
    'container.build_id' => '460ba4f4',
    'container.build_time' => 1646652030,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBlgxlzE');
