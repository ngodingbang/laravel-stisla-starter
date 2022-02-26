<?php

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

uses(Tests\TestCase::class)->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

/**
 * Create user data from factory with "admin" role and specified company.
 *
 * @param  string  $role
 * @return \App\Models\User
 */
function pest_create_user(string $role): App\Models\User
{
    return App\Models\User::factory()
        ->verified()
        ->create()
        ->syncRoles($role);
}

/**
 * Create user data from factory with "manager" role.
 *
 * @return \App\Models\User
 */
function pest_create_manager(): App\Models\User
{
    return pest_create_user(App\Models\Role::ROLE_MANAGER);
}

/**
 * Create user data from factory with random role.
 *
 * @return \App\Models\User
 */
function pest_create_random_user(): App\Models\User
{
    return pest_create_user(Illuminate\Support\Arr::random([
        App\Models\Role::ROLE_ADMIN,
        App\Models\Role::ROLE_MANAGER,
        App\Models\Role::ROLE_STAFF,
    ]));
}

/**
 * Create user data from factory with manager or staff role.
 *
 * @return \App\Models\User
 */
function pest_create_random_manager_or_staff(): App\Models\User
{
    return pest_create_user(Illuminate\Support\Arr::random([
        App\Models\Role::ROLE_MANAGER,
        App\Models\Role::ROLE_STAFF,
    ]));
}
