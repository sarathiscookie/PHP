<?php
# Single Responsibility Principle
# A class should have only one responsibility and only one reason to change. That means a class does not perform multiple jobs.

// Violation
// PHP class that handles both user authentication and user data manipulation. Violating SRP

/*
class UserHandler {
    public function authenticate($username, $password) {
        // Authenticates user
    }

    public function createUser($userData) {
        // Creates a new user
    }

    public function updateUser($userId, $newUserData) {
        // Updates user information
    }

    // Other user-related methods...
}
*/

// Solution
// Applying SRP, the responsibilities could be split into separate classes
class UserAuthenticator {
    public function authenticate($username, $password) {
        // Authenticates user
    }
}

class UserManager {
    public function createUser($userData) {
        // Creates a new user
    }

    public function updateUser($userId, $newUserData) {
        // Updates user information
    }

    // Other user-related methods...
}

