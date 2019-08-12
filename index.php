<?php 
Kirby::plugin('texnixe/userMethods', [
    'usersMethods' => [
         'hasPanelAccess' => function (): bool {
            return $this->role()->permissions()->for('access', 'panel');
        }
    ]
]);