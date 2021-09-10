<html> 
    <head>
        <Title> Pagina Ktronix</Title>
    </head>
    <body>
        <? php 
        echo 'Pagina Ktronix';
        ?>

    </body>
</html>

<html>
  <head>
    <title>My First PHP Page</title>
  </head>
  <body>
  <script language="php">
    echo "Pagina Ktronix!";
  </script>
  </body>
</html>

<? php echo '¡Tienda electronica!';?>
<? php 
   echo 'A';
   echo 'B';
   echo 'C';
?>

<? php 
   echo '<strong> Este es un texto en negrita.
</strong>';
?>

<? PHP
   echo '<p> ¡Empresa Ktronix! </p>'; Este es un echo de comentario de una sola linea '<p> ¡Empresa Electronica!' </p>;?>

<? php 
   echo '<p> ¡Empresa Ktronix!' </p>;/* Este es un mensaje de comentarios de arias lineas que abarca varias lines */ echo '<p> ¡Empresa electronica! </p>';?>

   $ nombre_variable = valor;

   <? php 
   $ nombre = 'Gabriela';
   $ edad = 18
   echo $nombre; // ¿Muestra 'Melissa'?>
   
   <? PHP
      define ('MSG', '¡Hola, Ktronix!', verdadero);
      echo msg; // Muestra '¡Hola, Ktronix!'?>

   <?php
     define ('AGE',18);
     ?>

     <?php
     $string1 = "¡Hola Ktronix!"; // comillas dobles
     $string2 = '¡Hola Ktronix!'; //comillas simples

     <? PHP
     $int1 = 42; // numero positivo
     $int2 = -42; // numero negativo
     ?>

     <? php
     $ x = 42.168;
     ?>

     <? php
     $ x = verdadero; $ y = falso;
     ?>

     <? PHP
     $str = "10";
     $int = 20;
     $suma = $ str + $ int;
     echo ($ suma); // ¿Salidas 30?>

     <? PHP
     $ nombre = 'Gabriela';
     function getName () {
        echo $ nombre;
     }
     getName ();// Error: Variable indefinida: ¿nombre?

     <? PHP
     $ nombre = 'Gabriela';
     function getName () { global $ nombre; echo $
      nombre; } getName ();// ¿Muestra 'Gabriela'?>

      <? PHP
      $ a = 'ktronix';
      $ hola = "¡Ktronix!";
      echo $$ a ; // Muestra '¡Ktronix!'

      $name = "Robert";
      echo $name;

      <? php 
      $ num1 = 8;
      $ num2 = 6; // Suma echo $ num1 + $ num2; // 14
      // Resta echo $ num1 - $ num2; // 2 //
      Multiplicacion echo $ num1 * num2; // 48 //
      Division echo $ num1 / $ num2; // 1,33333333333 ?>

      <? php
      $x = 14;
      $y = 3;
      echo $x % $y; //2
      ?>

      $ x ++; // equivalente a $ x = $ x + 1;
      $ x--; // equivalente a $ x = $ x-1;

      $ x ++; // incremento 
      posterior $ x--; // post-decremento 
      ++ $ x; // incremento previo 
      - $ x; // pre-decremento

      $ a = 2; $ b = $ a ++; // $ a = 3, $ b = 2
      $ a = 2; $ b = ++ $ a; // $ a = 3, $ b = 3

      $num1 = 5;
      $num2 = $num1;

      <? PHP
      $x = 50;
      $x += 100;
      echo $x;
      // Outputs: 150
      ?>

      $ nombre1 = "David"; 
      $ nombre2 = "Amy"; 
      $ nombre3 = "Juan"; 
      
      $ nombres = matriz ("David", "Amy", "John");

      $ nombres [0] = "David";
      $ nombres [1] = "Amy";
      $ nombres [2] = "Juan";

      echo $ nombres [1]; // Produce "Amy"

      <? php
      $ myArray [0] = "John";
      $ myArray [1] = "<strong> php </strong>";
      $ myArray [2] = 21;echo "$ myArray [0] es $ myArray
      [2] y conoce $ myArray [1];// ¿Muestra "John tiene 21 años y conoce PHP" ?>

      $ personas = matriz ("David" => "27", "Amy" => "21", 
      "John" => "42");
      // o
      $ personas ['David'] = "27";
      $ personas ['Amy'] = "21";
      $ personas ['John'] = "42";
      
      $ personas = matriz ("David" => "27", "Amy" => "21",
      "John" => "42");echo $ gente ['Amy']; // Salidas 21"
      []
     {}

     $people = array(
       'online'=>array('David', 'Amy'),
       'offline'=>array('John', 'Rob', 'Jack'),
       'away'=>array('Arthur', 'Daniel')
     );

   $people = array(
     'online'=>array('David', 'Amy'),
     'offline'=>array('John', 'Rob', 'Jack'),
     'away'=>array('Arthur', 'Daniel')
   );

   echo $people['Online'][0]; //Outputs "David"
   echo $people['away'][1]; //Outputs "Daniel"

   if (condición) {
      código a ejecutar si la condición es verdadera ;
   } else {
      código a ejecutar si la condición es falsa ;
   }

   <?php 
   $x = 10;
   $y = 20;
   if $x >= $y) {
      echo $x;
   } else  {
      echo $y;
   }

   // Outputs "20"
   ?>

   if($num==100)
   {
      echo "YES";
   }
   else 
   {
      echo "NO";
   }

   if (condición) {
      código a ejecutar si la condición es verdadera ;
    } elseif (condición) {
      código que se ejecutará si la condición es verdadera ;
    } else {
       código a ejecutar si la condición es falsa ;
    }

    <? php
    $ edad = 21;if ($edad <= 13) { echo"Niño";} elseif
    ($ edad> 13 && $ edad <19) { echo "Adolescente";}
    else { echo "Adulto";} // ¿Salidas "Adultos"?>

    while (la condicion es verdadera) {
       codigo a ejecutar;
    }

    $i = 1;
    while ($i <7) {
       echo "El valor es $ i <br/>";
       $i ++;
    }

    $i =1;
    while($i <=15) {
       echo $i;
       $i++;
    }  

    do {
      código a ejecutar;
    } while (la condición es verdadera );

    $i=5;
    hacer {
       echo "El numero es". $i. "<br/>";
       $i++;
    } while ($i <=7);// Salida // El numero es 5 // El
    numero es 6 // El numero es 7

    $i = 0;
    do {
       $i++;
    } while ($i<10);

    for (init; test; increment) {
      código a ejecutar;
   }

   for ($a = 0; < 6; $a++) {
      echo "Value of a : " $a . "<br />"

    $name = "Bruce";
    for($i=0; $i<10;$i++) {
       echo $name;
    }

    foreach (array as $value) {
      code to be executed;
    }
    //or
    foreach (array as $key => $value) {
       code to be executed;
    }

    $names = array("John", "David", "Amy");
    foreach ($names as $name) {
       echo $name.'<br />';
    }
    // John
    // David
    // Amy

    $items = array("one","Two","Three");
    foreach($items as $item) {
       echo$item."<br/>";
    }

    switch (n) {
      case value1:
        //code to be executed if n=value1
        break;
      case value2:
         //code to be executed if n=value2
         break;
      ...
      default:
        // code to be executed if n is different from all labels
    }

    $today='Tue';
    switch ($today) {
       case "Mon":
         echo "Hoy es Lunes.";
         break;
       case "Tue":
         echo "Hoy es es Martes.";
         break;
       case "Wed":
         echo "Hoy es Miercoles.";
         break;
       case "Thu":
         echo "Hoy es Jueves.";
         break;
       case "Fri":
         echo "Hoy es Viernes.";
         break;
       case "Sat":
         echo "Hoy es Sabado.";
         break;
       case "Sun":
         echo "Hoy es Domingo";
         break;
       default:
         echo "Invalid is Tuesday.";
    }
    //Outputs "Hoy es Jueves."

    $i = 1;
    switch($i) {
       case "1":
         echo 'One';
         break;
       case "2":
         echo 'Two';
         break;
   }

   $X=5;
   switch ($x) {
      case 1:
         echo "One";
         break;
      case 2:
         echo "Two";
         break;
      default:
      echo"No match";
   }
   //Outputs "No match"

   $day = 'Wed';

   switch ($day) {
      case 'Mon':
         echo 'First day of the week';
         break;
      case 'Tue':
      case 'Wed':
      case 'Thu':
         echo 'Working day';
         break;
      case 'Fri':
         echo 'Friday!';
         break;
      default:
         echo 'Weekend!';
   }
   //Outputs "Working day"

   $x=1;
   cambiar ($x) {
      case 1:
         echo "One";
      case 2:
         echo "Two"
      case 3:
         echo "Three"
      default:
         echo "No match";
   }  
   //Outputs "OneTwoThreeNo match"

   for ($i=0;$i<=50;$i++) {
      echo $i;
      if ($i==5) {
         break;
      } 
   }

   for ($i=0 $i<10; $i++) {
      if 
      ($i%2==0) {
         continue;
      } 
      echo $i . '';
   }
   //Output: 1 3 5 7 9

   <?php
      echo '<h1>Welcome</h1>';
   ?>

   <html>
      <body>
      <?php include 'header.php'; ?>
      <p>This is a paragraph</p>
      </body>
   </html>

   function functionName() {    
      //code to be executed
   }

   function sayHello() {
      echo "Hello";
   }

   sayHello(); //call the function
   //Outputs "Hello"

   function myFunc () {
      echo "PHP is awesonme!";
   }
   myFunc();

   function multiplyBytwo($number) {
      $answer = $number * 2;
      echo $answer;
   }
   multiplyBytwo(3);
   //Outputs 6

   function multiply($num1, $num2) {
      echo $num1 * $num2;
   }
   multiply(3, 6);
   //Outputs 18

   function setCounter($num=10) {
      echo "Counter is ".$num;
   }
   setCounter(42); //Counter is 42
   setCounter(); //Counter is 10

   function myMul($num1,$num2) {
      echo $num1*$num2;
   }

   function mult($num1, $num2) {
      $res ) $num1 * $num2;
      return $res;
   }

   echo mult(8, 3);
   // Outputs 24

   <?php
   echo $_SERVER['SCRIPT_NAME'];
   //Outputs "/somefile.php"

   <?php
     $addr = $_SERVER['SCRIPT_NAME'];
     echo $addr;
   ?>

   <?php
   echo $_SERVER['HTTP_HOST'];
   //Outputs "localhost"
   ?>

   <?php
   $host = $_SERVER['HTTP_HOST'];
   $image_path = $host.'/images/';
   ?>

   <?php
   require 'config.php';
   echo '<img src="'.$image_path.'header.png" />';
   ?>

   <form action="my.php"
   method="post">
   </form>

   <? php
   echo "Hola". $ _GET ['nombre'] . ".";
   echo "Tú eres". $ _GET ['edad'] . "Años.";
   ?>

   <?php
   // Start the session
   session_start();
   $_SESSION['color'] = "red";
   $_SESSION['name'] = "John";
   ?>

   <?php
   // Start the session
   session_start();
   ?>
   <!DOCTYPE html>
   <html>
   <body>
   <?php
   echo "Your name is " . $_SESSION['name'];
   // Outputs "Your name is John"
   ?>
   </body>
   </html>

   session_start();
   $name = "Alex";
   $_SESSION['name'] = "name";
   echo $_SESSION['name'];

   setcookie(name, value, expire, path, domain, secure, httponly)

   <?php
   $value = "John";
   setcookie("user", $value, time() + (86400 * 30), '/'); 
   if(isset($_COOKIE['user'])) {
     echo "Value is: ". $_COOKIE['user'];
   }
   //Outputs "Value is: John"
   ?>

   setcookie ('logged', 1, time () + 3600);

   $myfile = fopen("file.txt", "w");

   fopen ('test.txt','w');

   <?php
   $myfile = fopen("names.txt", "w");
   $txt = "John\n";
   fwrite($myfile, $txt);
   $txt = "David\n";
   fwrite($myfile, $txt);
   fclose($myfile);
   /* File contains:
   John
   David
   */
   ?>

   $handle = fopen('num.txt', 'w');
   fwrite($handle, '1');
   fwrite($handle, '2');
   fclose($handle);

   $myFile = "test.txt";
   $fh = fopen($myFile, 'a');
   fwrite($fh, "Some text");
   fclose($fh);

   <? php
   if (isset ($ _ POST ['texto'])) {
     $ nombre = $ _POST ['texto'];
     $ mango = fopen ('nombres.txt', 'a');
     fwrite ($ identificador, $ nombre. "\ n");
     fclose ($ identificador); 
   }
   ?>
   <form method = "post">
      Nombre: <input type = "text" name = "text" /> 
      <input type = "submit" name = "submit" />
   </form>

   $h = fopen ('my.txt', 'a');
   fwrite($h, 'test');
   fclose ($h);

   $read = file('names.txt');
   foreach ($read as $line) {
      echo $line .", ";
   }

   $read = file('names.txt');
   $count = count($read);
   $i =1;
   foreach ($read as $line) {
      echo $line;
      if($i < $count) {
         echo ', ';
      }
      $i++;
   }

   $nums = file ("nums.txt");
   foreach($nums as $num) {
      echo $num."<br/>;
   }

   $h = fopen ('file.txt', 'a');
   for($i=1;$i<=10; $i++) {
      fwrite ($h, $i);
   }
   fclose($h);

   class Person {
      public $age; //property
      public function speak() { //method
        echo "Hi!"
      }
    }

    $bob = new Person();
    echo $bob->age;
    class Person {
       public $age;
       functionspeack() {
          echo "Hi!";
       }
    }

    class Dog { 
       public $legs=4;
       public function display() {
          echo $this->legs;
         }
      }
      $d1 = new Dog();
      $d1->display(); //4

      $d2 = new Dog();
      $d2->legs = 2;
      $d2->display(); //2

      class Student {
         public $name;
         public $age;
         public function printData() {
            echo $this->name;
            echo $this->age;
         }
      }

      class Person 
      public function __construct() {
         echo "Object created";
      }
   }
   $p = new Person();

   class Person {
      public $name;
      public $age;
      public function __construct($name, $age) {
         $this->name = $name;
         $this->age = $age;
      }
   }
   $p = new Person ("David", 42);

   class Person {
      public function __destruct() {
         echo "Object destroyed";
      }
   }
   $p = new Person();

   class Animal {
      public $ name;
      public function hi() {
         echo "Hi from Animal";
      }
   }
   class Dog extends Animal {
   }

   $d = new Dog();
   $d->hi();

   <?php
   interface AnimalInterface {
      public function makeSound();
   }

   class Dog implements AnimalInterface {
      public function makeSound() {
         echo "Woof! <br/>;
      }
   }
   class Cat implements AnimalInterface {
      public function makeSound() {
         echo "Meow! <br/>";
      }
   }

   $myObj1 = new Dog();
   $myObj1->makeSound();

   $myObj2 = new Cat();
   $myObj2->makeSound();
   ?>

   class Demo implements AInterface, BInterface, CInterface {
      // Functions declared in interfaces must be defined here
    }

    interface IMusician {
       public function play();
   }
   class Guitarist implements IMusician {
      public function play() {
         echo "playin a guitar";
      }
   }

   <?php
   abstract class Fruit {
      private $color;

      abstract publi function eat();
      
      public function setColor($c) {
         $this->color = $c;
      }
   }

   class Apples extends Fruit {
      public function eat() {
         echo "Omnomnom";
      }
   }

   $obj = new Apple();
   $obj->eat();
   ?>

   <?php
   class myClass {
      static $myStaticProperty = 42;
   }

   echo myClass::$myStaticProperty;
   ?>

   <?php
   class myClass {
      static $myProperty = 42;
      static function myMethod() {
         echo self::$myProperty;
      }
   }

   myClass::myMethod();
   ?>

   <?php
   class myClass {
      final function myFunction() {
         echo "Parent";
      }
   }
   // ERROR because a final method cannot be overridden in child classes.
   class myClass2 extends myClass {
      function myFunction() {
         echo "child";
      }
   }
   ?>

   <?php 
   final class myFinalClass }
   }

   // ERROR because a final class cannot be inherited.
   class myClass extends myFinalClass {
   }
   ?>

   interface MusicanInterface {
      public function play();
   }
   class Guitarist implements 
   MusicianInterface {
      public function play() {
         echo "La La La";
      }
   }
   $obj = new Guitaris();
   $obj->play();


          