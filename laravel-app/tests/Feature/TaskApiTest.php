<?php

use App\Models\Task;
use App\Models\User;
use Database\Seeders\RoleSeeder;

it('shows a task', function () {
    new RoleSeeder()->run();
    $user = User::factory()->create();
    $task = Task::factory()->create();

    $this
        ->actingAs($user)
        ->getJson("/api/tasks/{$task->id}")
        ->assertOk()->assertJsonFragment(['id' => $task->id]);
});

it('returns 404 for missing task', function () {
    new RoleSeeder()->run();
    $user = User::factory()->create();
    $this
        ->actingAs($user)
        ->getJson('/api/tasks/9999')->assertNotFound();
});

it('updates a task', function () {
    new RoleSeeder()->run();
    $user = User::factory()->create();
    $task = Task::factory()->create(['status' => 'todo']);
    $this
        ->actingAs($user)
        ->putJson("/api/tasks/{$task->id}", ['status' => 'done'])
        ->assertOk()->assertJsonFragment(['status' => 'done']);
});

it('deletes a task', function () {
    new RoleSeeder()->run();
    $user = User::factory()->create();
    $task = Task::factory()->create();
    $this
        ->actingAs($user)
        ->deleteJson("/api/tasks/{$task->id}")->assertNoContent();
});

it('filters by status', function () {
    new RoleSeeder()->run();
    $user = User::factory()->create();
    Task::factory()->count(3)->create(['status' => 'todo']);
    Task::factory()->count(2)->create(['status' => 'done']);
    $this
        ->actingAs($user)
        ->getJson('/api/tasks?status=todo')->assertOk()->assertJsonCount(3, 'data');
});
