<?php
// //// NOTE: Define a class
//
// class User {
//   // Properties
//   public $name;
//
//   // Methods
//   public function sayHello() {
//     return $this->name . " Hello users";
//
//   }
//
// }
// // Instantiate user object from User class
// $user = new User();
// // '->' is called Object Operator
// //echo $user->name;
// //var_dump($user->$name);
// $user->name = "shiva";
// echo "<br />";
// echo $user->sayHello();


// NOTE: Access Modifiers = Public, Private, Protected
//
// class User {
//   // Properties
//   public $name;
//
// }
//
// $user = new User();
//
// $user->name = "Dary";
//
// echo $user->name;


// NOTE: Class Inheritance
//
// class User {
//   // Properties
//   public $name;
//   public $email;
//
//   public function welcomeMsg() {
//     return "Have a good working day!";
//   }
// }
//
// class  Admin extends User {
//   public $level;
//
// }
//
// $user = new User();
// $user->name = "shiva";
// $user->email = "shiva@example.com";
//
// echo $user->name . " " . $user->email;
// echo "<br />";
// $admin = new Admin();
// $admin->name = "John";
// $admin->email = "john@yees.com";
// $admin->level = "superadmin";
//
// echo $admin->name . " " . $admin->email . " " . $admin->level;
//
// echo "<br />";
//
// echo $admin->welcomeMsg();

// // NOTE: Constructor and Deconstructor
// class User {
//   // Properties
//   public $name;
//   public $age;
//
//   public function __construct($name, $age) {
//     // echo "This is my constructor";
//     $this->name = $name;
//     $this->age = $age;
//     // echo "My name is: " . $this->name;
//     // echo "<br />";
//     // echo "I am " . $this->age . " years old";
//   }
//
//   // NOTE: Deconstructor
//   public function __destruct() {
//     echo "Destructor works!";
//   }
//
//   public function myAge() {
//     return "My age is: " . $this->age;
//   }
//
// }
//
// $user = new User("Shiva", 24);
// echo $user->myAge();




// NOTE: Getters and Setters

// class User {
//   private $name;
//   private $age;
//
//     public function __construct($name, $age) {
//       $this->name = $name;
//       $this->age = $age;
//     }

    // /**
    // * @return $name
    // */
    // public function getName() {
    //   return $this->name;
    // }
    //
    // /*
    // * @param $name
    // */
    //   public function setName($name) {
    //     $this->name = $name;
    //
    //   }
    //
    //   /**
    //   * @return $age
    //   */
    //   public function getAge() {
    //     return $this->age;
    //   }
    //
    //   /*
    //   * @param $age
    //   */
    //     public function setAge($age) {
    //       $this->age = $age;
    //
    //     }

//     // NOTE: Magic Method - __GET Method
//     public function __get($property) {
//       if (property_exists($this, $property)) {
//         return $this->$property;
//       }
//     }
//     // // NOTE: Magic Method - __SET Method
//     public function __set($property, $value) {
//       if (property_exists($this, $property)) {
//         $this->$property = $value;
//       }
//       return $this;
//     }
//   }
//
// $user = new User("Shiva", 24);
// // echo $user->getName();
// // echo "<br />";
// // echo $user->getAge();
//
// $user->__set('name', 'Rahul');
// echo $user->__get('name');



// // NOTE: Static Properties and Methods
// class User {
//     //static property
//     private static $nextId = 0;
//     private  $myId;
//
//     public static function printId() {
//         // NOTE: keyword self
//         return "User id is: " . self::$nextId;
//     }
// }
// /*
// $user = new User();
// $user->myId = 10;
// echo $user->myId;
// */
//
// // NOTE: class :: propertes - means we are directly entering into class to access static property and static methods
// //
//
// //echo User::$nextId;
// //echo "<br />";
// echo User::printId();


// NOTE: Abstarct classes and Methods
// abstract class Manager {
//   abstract protected function showProject($project);
// }
// class Employee extends Manager {
//   public function showProject($project = "Sony") {
//     return "I'm working in " . $project;
//
//   }
//   public function startProject($project) {
//     return $this->showProject($project);
//   }
//
// }
//
// $employee = new Employee();
// echo $employee->showProject();
//


// // NOTE: toString() Method in OOP php
//
// class User {
//   //properties
//   private $name;
//   private  $age;
//
// // Constructor
//   public function __construct($name, $age) {
//     $this->name = $name;
//     $this->age = $age;
//   }
//
//   // Magic Method - toString() -- which implictly converts objects into strings
//
//   public function __toString() {
//     return "Name: " . $this->name . "<br /> Age: " . $this->age;
//   }
//
//   // NOTE: Getters and Setters for name and age
//   public function getName() {
//     return $this->name;
//   }
//
//   public function setName($name) {
//     $this->name = $name;
//   }
//
//   public function getAge() {
//     return $this->age;
//   }
//
//   public function setAge($age) {
//     $this->age = $age;
//   }
//
// }
//
// $user = new User("Shiva", 23);
// // echo $user->getName();
// // echo "<br />";
// //// echo $user->getAge();
// //print_r($user); //Result User Object ( [name:User:private] => Shiva [age:User:private] => 23 )
// echo $user; //Result Name: Shiva Age: 23
// //because of magic method converts objests to string implictly


// NOTE: Final Method and class

  //  If we declare class as final we cannot extend or override that class
   // and  method as Final, we cannot override it.
//  class User {
//      public $name ="John";
//      public $age;
//
//      final public function printName($name) {
//         return "My name is " . $name;
//      }
//    }
//
// class Manager extends User {
//    public $name = "David";
//
//    // final public function printName($name) {
//    //    return "Hi mr. " . $name;
//    // }
// }
//
// $manager = new Manager();
// echo $manager->printName("Shiva");  //result: Fatal error: Cannot override final method User::printName() in C:\wamp64\www\php_tutorial_2023\OOPS\index.php on line 280

// even if we create instance of User , the result won't change
