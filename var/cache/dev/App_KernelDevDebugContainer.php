<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKP7b7bM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKP7b7bM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKP7b7bM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKP7b7bM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKP7b7bM\App_KernelDevDebugContainer([
    'container.build_hash' => 'KP7b7bM',
    'container.build_id' => 'bf445b3d',
    'container.build_time' => 1706557066,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKP7b7bM');
