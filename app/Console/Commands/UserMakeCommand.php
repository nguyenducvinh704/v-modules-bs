<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class UserMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('Name');
        $email = $this->ask('Email Address');
        $password = Hash::make($this->secret('Password'));
        $passwordConfirmation = $this->secret('Confirm Password');

        if (! Hash::check($passwordConfirmation, $password)) {
            $this->error('Sorry, this password and confirm password is not match.');
            return 1;
        }

        if (User::query()->where('email', $email)->exists()) {
            $this->error('Sorry, this email is exists.');
            return 1;
        }

        (new User())->forceFill([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'email_verified_at' => now(),
        ])->save();

        $this->info('User created.');

        return 0;
    }
}
