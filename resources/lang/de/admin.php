<?php

return [
    'title' => 'Moin! Food - Backend',
    'layout' => [
        'account' => [
            'user' => 'Benutzer',
            'logout' => 'Ausloggen'
        ],
        'pagination' => [
            'count' => 'Anzahl: :count'
        ]
    ],
    'pages' => [
        'login' => [
            'title' => 'Login Backend',
            'email' => 'E-Mail-Adresse',
            'password' => 'Passwort',
            'remember' => 'Eingeloggt bleiben',
            'login' => 'Jetzt einloggen',
        ],
        'dashboard' => [
            'breadcrumbs' => [
                "title" => 'Dashboard',
            ],
            'panels' => [
                'restaurants' => [
                    'title' => 'Restaurants',
                    'all' => 'Alle Restaurants anzeigen',
                ],
            ],
        ],
        'restaurants' => [
            'titles' => [
                "index" => 'Restaurants',
                "create" => 'Restaurant hinzufügen',
                "edit" => 'Restaurant bearbeiten',
            ],
            'breadcrumbs' => [
                "index" => 'Restaurants',
                "create" => 'Restaurant hinzufügen',
                "edit" => 'Restaurant bearbeiten',
            ],
        ],
        'properties' => [
            'titles' => [
                "index" => 'Eigenschaften',
                "create" => 'Eigenschaft hinzufügen',
                "edit" => 'Eigenschaft bearbeiten',
            ],
            'breadcrumbs' => [
                "index" => 'Eigenschaften',
                "create" => 'Eigenschaft hinzufügen',
                "edit" => 'Eigenschaft bearbeiten',
            ],
        ],
        'kitchens' => [
            'titles' => [
                "index" => 'Landesküchen',
                "create" => 'Landesküche hinzufügen',
                "edit" => 'Landesküche bearbeiten',
            ],
            'breadcrumbs' => [
                "index" => 'Landesküchen',
                "create" => 'Landesküche hinzufügen',
                "edit" => 'Landesküche bearbeiten',
            ],
        ],
        'restaurant_types' => [
            'titles' => [
                "index" => 'Ambiente',
                "create" => 'Ambiente hinzufügen',
                "edit" => 'Ambiente bearbeiten',
            ],
            'breadcrumbs' => [
                "index" => 'Ambiente',
                "create" => 'Ambiente hinzufügen',
                "edit" => 'Ambiente bearbeiten',
            ],
        ],
    ],
    'actions' => [
        'actions' => 'Aktionen',
        'create' => 'Hinzufügen',
        'edit' => 'Bearbeiten',
        'delete' => 'Entfernen',
        'save' => 'Speichern',
        'cancel' => 'Abbrechen',
        'close' => 'Schließen',
    ],
    'attributes' => [
        'id' => 'ID',
        'title' => 'Titel',
        'name' => 'Name',
        'created' => 'Hinzugefügt',
        'created_at' => 'Hinzugefügt am',
        'created_from' => 'Hinzugefügt von',
        'updated' => 'Aktualisiert',
        'updated_at' => 'Aktualisiert am',
        'updated_from' => 'Aktualisiert von',
        'state' => 'Status',
        'state_on' => 'Online',
        'state_off' => 'Offline',
        'on' => 'An',
        'off' => 'Aus'
    ],
    'messages' => [
        'destroy' => 'Wirklich löschen?',
        'sure' => 'Aktion wirklich durchführen?',
        'action-done' => 'Die Aktion wurde erfolgreich ausgeführt'
    ]
];
