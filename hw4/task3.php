<?php

$users = [
    [
        'phone' => '375295675435',
        'name' => 'Kirill',
        'password' => '#`7q+3}VCz-&R&.y',
        'updated_password_at' => '10.08.2022'
    ],
    [
        'phone' => '375334564356',
        'name' => 'Max',
        'password' => '%n#wSEdL~6XDKmGf',
        'updated_password_at' => '15.01.2023'
    ],
    [
        'phone' => '48295675435',
        'name' => 'Andrey',
        'password' => '%NYD9Bu%Y43"vsS*',
        'updated_password_at' => '11.12.2022'
    ]
];

foreach ($users as &$user) {
    $diffUpdatedPass = time() - strtotime($user['updated_password_at']);
    $diffUpdatedPassInDay = $diffUpdatedPass / (60 * 60 * 24);
    if ($diffUpdatedPassInDay > 90) {
        $user['password'] = 'new_password';
    }
}

print_r($users);