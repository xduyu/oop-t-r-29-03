<?php
// class CUser
// {
//   public $name;
//   public $email;
//   public $age;
//   public $isActive = true;

//   // вывод информации пользователя
//   public function getInfoMethod()
//   {
//     return "name: {$this->name}, email: {$this->email}, age: {$this->age}, isActive: {$this->isActive}";
//   }

//   // диактивировать данные
//   public function deactivateUser()
//   {
//     $this->isActive = false;
//     return "the user has been deactivated";
//   }

//   // активировать данные
//   public function activateUser()
//   {
//     $this->isActive = true;
//     return "The user has been activated";
//   }
// }

// $user1 = new CUser();
// $user1->name = "name123";
// $user1->age = 1234;
// $user1->email = "email@email.com";
// $user1->deactivateUser();
// echo $user1->getInfoMethod();
// echo "</br>";
// $user1->activateUser();
// echo $user1->getInfoMethod();

// echo "</br>";
// $user2 = new CUser();
// $user2->name = "fedor";
// $user2->age = 123;
// $user2->email = "2email2@email2.com";
// echo $user2->deactivateUser();
// echo "</br>";
// echo $user2->getInfoMethod();

// echo "</br>";

// echo "Пользователь 1 активен: " . ($user1->isActive ? "da" : "net");
// echo "Пользователь " . $user2->name .  " активен: " . ($user2->isActive ? "da" : "net");


// конструктор:

// class CUser
// {
//   public $name;
//   public $age;

//   public function __construct($username, $userage)
//   {
//     $this->name = $username;
//     $this->age = $userage;
//   }

//   public function getInfo()
//   {
//     return "пользователь {$this->name} создан";
//   }
// }

// $user1 = new CUser("Anna", 100);
// echo $user1->getInfo();
// echo "</br>";
// $user2 = new CUser("Fedor", 100);
// echo $user2->getInfo();
// echo "</br>";
// деструктор 

// class File
// {
//   public $file;

//   public function __construct($filename)
//   {
//     $this->file = fopen($filename, "w");
//     echo "file opened";
//   }

//   public function __destruct()
//   {
//     fclose($this->file);
//     echo "file closed";
//   }

//   public function filewrite($text)
//   {
//     fwrite($this->file, $text);
//   }
// }

// $file = new File("text.txt");
// $file->filewrite("bebebbebebebebebebbe");

// class User
// {
//   public $name;
//   public $email;
//   public $age;

//   public function __construct($name, $email, $age)
//   {
//     $this->name = $name;
//     $this->email = $email;
//     $this->age = $age;
//   }

//   public function isAdult()
//   {
//     return $this->age > 18 ? "adult" : "teenager";
//   }
// }
// $user1 = new User("Anna", "anna@gmail.com", 20);
// $user2 = new User("Fedor", "fedor@gmail.com", 15);
// echo $user1->name . " is " . $user1->isAdult();
// echo "</br>";
// echo $user2->name . " is " . $user2->isAdult();
// 1) скидка = цена * (скидка/100)
class Product
{
  public $name;
  public $price;
  public $discount = 0;
  public $finalPrice = 0;

  public function __construct($name, $price, $discount)
  {
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;
    $discount = $this->price * ($this->discount / 100);
    $finalPrice = $this->price - $discount;
    $this->finalPrice = $finalPrice;
  }

  // public function getFinalPrice()
  // {
  //   $discount = $this->price * ($this->discount / 100);
  //   $finalPrice = $this->price - $discount;
  //   $this->finalPrice = $finalPrice;
  // }
  public function getInfo()
  {
    return "Товар: {$this->name}, Цена со скидкой: {$this->finalPrice} руб.";
  }
}

$product = new Product("milk", 200, 15);
echo $product->getInfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
</body>

</html>