# 30-Day PHP and Laravel Learning Path
*2 Hours Daily Study Guide*

## 📚 Pre-requisites
- VS Code with PHP/Laravel extensions installed
- XAMPP/Laravel Valet
- Composer
- Git
- Basic understanding of HTML/CSS

## 🎯 Daily Schedule Structure
- **30 minutes**: Learn new concept
- **60 minutes**: Practice coding
- **30 minutes**: Review and fix errors

## 🗓️ Week 1: PHP Fundamentals (Days 1-7)

### Day 1: Variables & Data Types
- **Theory (30 mins)**
  - Understanding PHP syntax
  - Variables
  - Basic data types (string, integer, float, boolean)
- **Practice (60 mins)**
  ```php
  $name = "John";              // String
  $age = 25;                   // Integer
  $price = 99.99;              // Float
  $isActive = true;            // Boolean
  ```
- **Exercise**: Create a simple personal information form processor

### Day 2: Arrays & Control Structures
- **Theory (30 mins)**
  - Indexed arrays
  - Associative arrays
  - if/else statements
  - Switch statements
- **Practice (60 mins)**
  ```php
  $users = ['John', 'Jane', 'Bob'];
  $userDetails = [
      'name' => 'John',
      'age' => 25,
      'city' => 'New York'
  ];
  ```
- **Exercise**: Create a grade calculator program

### Day 3: Loops & Functions
- **Theory (30 mins)**
  - for loops
  - foreach loops
  - while loops
  - Function creation and usage
- **Practice (60 mins)**
  ```php
  function calculateTotal($price, $tax) {
      return $price + ($price * $tax);
  }
  
  foreach($users as $user) {
      echo $user;
  }
  ```
- **Exercise**: Create a simple calculator with basic operations

### Day 4-5: OOP Basics
- **Theory (30 mins)**
  - Classes and Objects
  - Properties and Methods
  - Constructor
  - Access modifiers
- **Practice (60 mins)**
  ```php
  class User {
      private $name;
      private $email;
      
      public function __construct($name, $email) {
          $this->name = $name;
          $this->email = $email;
      }
      
      public function getName() {
          return $this->name;
      }
  }
  ```
- **Exercise**: Create a simple User management class

### Day 6-7: Database Operations
- **Theory (30 mins)**
  - MySQL basics
  - PDO introduction
  - CRUD operations
- **Practice (60 mins)**
  ```php
  $pdo = new PDO("mysql:host=localhost;dbname=test", "user", "password");
  $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
  $stmt->execute([1]);
  ```
- **Exercise**: Create a simple contact management system

## 🗓️ Week 2: Advanced PHP & Laravel Introduction (Days 8-14)

### Day 8-10: Important PHP Concepts
- Error handling (try/catch)
- Form handling & validation
- Sessions & Cookies
- File operations
- Regular expressions basics

### Day 11-14: Laravel Basics
- Installation and setup
- Directory structure
- Artisan CLI
- Basic routing
- Controllers introduction
```php
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

class UserController extends Controller {
    public function index() {
        return view('users.index');
    }
}
```

## 🗓️ Week 3: Laravel Core Concepts (Days 15-21)

### Day 15-17: Database & Models
- Migrations
- Eloquent ORM
- Model relationships
- Seeders and factories
```php
class User extends Model {
    protected $fillable = ['name', 'email'];
    
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
```

### Day 18-21: Essential Features
- Authentication
- Form validation
- Middleware
- Blade templating
- File storage

## 🗓️ Week 4: Project & Advanced Features (Days 22-30)

### Day 22-25: Advanced Laravel Features
- Email sending
- Job queues
- Events and listeners
- API basics
- Testing introduction

### Day 26-30: Final Project
Build a complete Blog System including:
- User authentication
- CRUD operations for posts
- Comments system
- Basic admin panel
- Image upload
- Search functionality

## 📝 Project Milestones
1. **Day 7**: Simple PHP Contact Manager
2. **Day 14**: Basic Laravel Todo List
3. **Day 21**: User Authentication System
4. **Day 30**: Complete Blog System

## 🔧 Learning Resources
1. Official Documentation:
   - PHP.net
   - Laravel.com/docs

2. Video Tutorials:
   - Laracasts.com (free videos)
   - YouTube channels (Laravel Daily, Codecourse)

3. Practice Platforms:
   - GitHub (create repository for each project)
   - Laravel Playground

## ✅ Daily Checklist
- [ ] Read/watch learning material (30 mins)
- [ ] Code practice (60 mins)
- [ ] Review and debug (30 mins)
- [ ] Push code to GitHub
- [ ] Review previous day's concepts

## 🎯 Success Tips
1. Code every day without fail
2. Focus on understanding, not memorizing
3. Build projects, don't just read
4. Use Git for version control
5. Join Laravel communities:
   - Laravel.io
   - Laracasts Forums
   - Reddit r/laravel

## 📌 Note
This is an intensive learning path. If you need more time with any concept, it's okay to adjust the schedule. Focus on understanding core concepts thoroughly before moving forward.
